<?php
class searchParamsLogger
{
	/**
	 * @type String
	 */
	protected $searchSaveTableName = "";
	
	/**
	 * @type String
	 */
	protected $userID = "";
	
	/**
	 * @type String
	 */	
	protected $cookie = "";
	
	/**
	 * @type String
	 */
	protected $tableName;
	protected $dbSearchSaveTableName;
	protected $dbNameFieldName;
	protected $dbSearchFieldName;
	protected $dbTableNameFieldName;
	protected $dbCookieFieldName;
	protected $dbUserNameFieldName;	
	protected $conn;
	
	/**
	 * This property is used to store 
	 * the 'getSavedSeachesParams' method`s cash
	 * @type Array
	 */
	protected $savedSearchesParams = array(); 
	
	public function searchParamsLogger( $tableName ) 
	{
		global $conn;
		
		$this->tableName = $tableName;
		$this->conn = $conn;
		
		$this->assignDbFieldsAndTableNames();						
		$this->assignUserId();	
		$this->assignCookieParams();	
	}
	
	/**
	 * Add fields wrappers to the real fields name
	 * and assing them to the corresponding class properties
	 */
	protected function assignDbFieldsAndTableNames() {
		$this->dbSearchSaveTableName = AddTableWrappers( $this->searchSaveTableName );
		$this->dbNameFieldName = AddFieldWrappers( "NAME" );
		$this->dbSearchFieldName = AddFieldWrappers( "SEARCH" );
		$this->dbTableNameFieldName = AddFieldWrappers( "TABLENAME" );
		$this->dbCookieFieldName = AddFieldWrappers( "COOKIE" );
		$this->dbUserNameFieldName = AddFieldWrappers( "USERNAME" );	
		
	}
	
	/**
	 * Assign the userID prop with the currenly logged in user`s name
	 */
	protected function assignUserId()
	{
		if( isset($_SESSION["UserID"]) && $_SESSION["UserID"] != "Guest" )	
			$this->userID = $_SESSION["UserID"];
	}
	
	/**
	 * Set a COOKIE 'searchSaving' param If It isn`t set before.
	 * Assign the 'cookie' property with the COOKIE 'searchSaving' param
	 */
	protected function assignCookieParams()
	{
		if( !strlen($_COOKIE["searchSaving"]) && !$this->userID ) 
			setcookie("searchSaving", generatePassword(24), time() + 5 * 365 * 86400);
		
		$this->cookie = $_COOKIE["searchSaving"];
	}
	
	/**
	 * Save the search under a particular name
	 * @param String $searchName
	 * @param Array $searchParams
	 */
	public function saveSearch( $searchName, $searchParams )
	{	
		$savedSearchNames = $this->getSavedSeachesParams();
		if (array_key_exists($searchName, $savedSearchNames) )
		{
			$this->updateSearch( $searchName, $searchParams );
			return;
		}
		
		$columnsList = "NAME, SEARCH, TABLENAME";
		$valuesList =  db_prepare_string( $searchName ).", ".db_prepare_string( runner_serialize_array( $searchParams ) ).", ".db_prepare_string( $this->tableName );
		
		if($this->userID)
		{
			$columnsList.= ", ".$this->dbUserNameFieldName;
			$valuesList.= ", ".db_prepare_string( $this->userID );
		} 
		else if($this->cookie)
		{	
			$columnsList.= ", ".$this->dbCookieFieldName;
			$valuesList.= ", ".db_prepare_string( $this->cookie );
		}
			
		$sql = "INSERT INTO ". $this->dbSearchSaveTableName ." (".$columnsList.") values (".$valuesList.")";
		db_exec($sql, $this->conn);	
	}

	/**
	 * Update the existing saved search
	 * @param String $searchName
	 * @param Array $searchParams
	 */
	public function updateSearch( $searchName, $searchParams )
	{
		$where = $this->dbNameFieldName."=".db_prepare_string( $searchName )." AND ".$this->getCommonWhere();	
		$sql = "UPDATE ". $this->dbSearchSaveTableName ." SET ". $this->dbSearchFieldName ."= ".db_prepare_string( serialize( $searchParams ) )." WHERE ".$where;
		
		db_exec($sql, $this->conn);
	}
	
	/**
	 * Delete the saved search 
	 * @param String searchName
	 */	
	public function deleteSearch( $searchName )
	{	
		$where = $this->dbNameFieldName."=".db_prepare_string( $searchName )." AND ".$this->getCommonWhere();	
		$sql = "DELETE FROM ". $this->dbSearchSaveTableName ." WHERE ".$where;
		
		db_exec($sql, $this->conn);
	}
	
	/**
	 * Get the commont where condition envolving
	 * user id and cookie values
	 * @return String
	 */
	protected function getCommonWhere()
	{
		$wheres = array();
		if($this->userID)
			$wheres[] = $this->dbUserNameFieldName."=".db_prepare_string( $this->userID );
		if($this->cookie)	
			$wheres[] = $this->dbCookieFieldName."=".db_prepare_string( $this->cookie );
		
		if( !count($wheres) )
			return "1=0";
		
		return whereAdd( $this->dbTableNameFieldName."=".db_prepare_string( $this->tableName ), implode(" OR ", $wheres) );	
	}
	
	/**
	 * Get the save searches` names basing on 
	 * security params and current page`s table name
	 * @return Array
	 */
	public function getSavedSeachesParams()
	{
		if( count($this->savedSearchesParams) )
			return $this->savedSearchesParams; 			
	
		$where = $this->getCommonWhere();			
		$sql = "SELECT ".$this->dbNameFieldName.", ". $this->dbSearchFieldName ." from ". $this->dbSearchSaveTableName ." where ".$where." ORDER BY ".$this->dbNameFieldName;
		
		$rs = db_query($sql, $this->conn);
		
		$names = array();
		while( $data = db_fetch_array($rs) )
			$names[ $data["NAME"] ] = runner_unserialize_array( $data["SEARCH"] );

		$this->savedSearchesParams = $names;
		return $names;
	}
}
?>