<?php
class ConnectionManager
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();

	
	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */	
	protected $_tablesConnectionIds;
	
	
	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}
	
	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */	
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}
	
	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */	
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}
	
	/**
	 * Get connection object by the connection id 
	 * @param String connId
	 * @return Connection
	 */	
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) )
			$this->cache[ $connId ] = $this->getConnection( $connId );

		return $this->cache[ $connId ];
	}
	
	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "finanace_at_localhost" );
	}

	/**
	 * Get the users table db connection 
	 * @return Connection
	 */	
	public function getForLogin()
	{
		return $this->byId( "finanace_at_localhost" );
	}
	
	/**
	 * Get the log table db connection 
	 * @return Connection
	 */	
	public function getForAudit()
	{
		return $this->getDefault();
	}
	
	/**
	 * Get the locking table db connection 
	 * @return Connection
	 */		
	public function getForLocking()
	{
		return $this->getDefault();
	}	
	
	/**
	 * Get the 'ug_groups' table db connection 
	 * @return Connection
	 */	
	public function getForUserGroups()
	{
		return $this->byId( "finanace_at_localhost" );
	}		

	/**
	 * Get the saved searches table db connection 
	 * @return Connection
	 */	
	public function getForSavedSearches()
	{
		return $this->byId( "finanace_at_localhost" );
	}

	/**
	 * Get the webreports tables db connection 
	 * @return Connection
	 */		
	public function getForWebReports()
	{
		return $this->getDefault();
	}
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		include_once getabspath("connections/Connection.php");
		
		$data = $this->_connectionsData[ $connId ];	
		switch( $data["connStringType"] )
		{
			case "mysql":
				if( useMySQLiLib() )
				{
					include_once getabspath("connections/MySQLiConnection.php");
					return new MySQLiConnection( $data );
				}
				
				include_once getabspath("connections/MySQLConnection.php");	
				return new MySQLConnection( $data );	

			case "mssql":
			case "compact":
				if( useMSSQLWinConnect() )
				{
					include_once getabspath("connections/MSSQLWinConnection.php");
					return new MSSQLWinConnection( $data );
				}
				if( isSqlsrvExtLoaded() )
				{
					include_once getabspath("connections/MSSQLSrvConnection.php");	
					return new MSSQLSrvConnection( $data );
				}
				
				include_once getabspath("connections/MSSQLUnixConnection.php");
				return new MSSQLUnixConnection( $data );			

			case "msaccess":
			case "odbc":
			case "odbcdsn":
			case "custom":
			case "file":
				if( stripos($data["ODBCString"], 'Provider=') !== false )
				{
					include_once getabspath("connections/ADOConnection.php");
					return new ADOConnection( $data );
				}
				
				include_once getabspath("connections/ODBCConnection.php");
				return new ODBCConnection( $data );
			
			case "oracle":
				include_once getabspath("connections/OracleConnection.php");
				return new OracleConnection( $data );

			case "postgre":
				include_once getabspath("connections/PostgreConnection.php");
				return new PostgreConnection( $data );

			case "db2":
				include_once getabspath("connections/DB2Connection.php");
				return new DB2Connection( $data );

			case "informix":
				include_once getabspath("connections/InformixConnection.php");
				return new InformixConnection( $data );

			case "sqlite":
				include_once getabspath("connections/SQLite3Connection.php");
				return new SQLite3Connection( $data );
		}
	}
	
	/**
	 * Set the data representing the project's 
	 * db connection properties
	 */	 
	protected function _setConnectionsData()
	{
		// content of this function can be modified on demo account
		// variable names $data and $connectionsData are important

		$connectionsData = array();
		
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "finanace_at_localhost";
		$data["connName"] = "khmerban_finance at localhost";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;localhost;khmerban_finance;khmerban_finance!23;;khmerban_finance;;1"; //currently unused
		
		$this->_connectionsIdByName["khmerban_finance at localhost"] = "finanace_at_localhost";
		
		$data["connInfo"] = array();
		$data["ODBCUID"] = "khmerban_finance";
		$data["ODBCPWD"] = "khmerban_finance!23";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused
		
		$data["connInfo"][0] = "localhost";
		$data["connInfo"][1] = "khmerban_finance";
		$data["connInfo"][2] = "khmerban_finance!23";
		$data["connInfo"][3] = "";
		$data["connInfo"][4] = "khmerban_finance";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 3.51 Driver};Server=localhost;Uid=khmerban_finance;Pwd=khmerban_finance!23;Database=khmerban_finance;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 0;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "";

		$connectionsData["finanace_at_localhost"] = $data;
		$this->_connectionsData = $connectionsData;
	}
	
	/**
	 * Set the data representing the correspondence between 
	 * the project's table names and db connections
	 */	 
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["transactions"] = "finanace_at_localhost";
		$connectionsIds["accounts"] = "finanace_at_localhost";
		$connectionsIds["users"] = "finanace_at_localhost";
		$connectionsIds["LookUps"] = "finanace_at_localhost";
		$connectionsIds["usersLookUp"] = "finanace_at_localhost";
		$connectionsIds["accountsLookUp"] = "finanace_at_localhost";
		$connectionsIds["loanaccounts"] = "finanace_at_localhost";
		$connectionsIds["CashDeposit"] = "finanace_at_localhost";
		$connectionsIds["CashWithdrawl"] = "finanace_at_localhost";
		$connectionsIds["LoanCredit"] = "finanace_at_localhost";
		$connectionsIds["LoanPayment"] = "finanace_at_localhost";
		$connectionsIds["SavingsStatements"] = "finanace_at_localhost";
		$connectionsIds["LoanStatements"] = "finanace_at_localhost";
		$connectionsIds["MonthlyBalanceSheet"] = "finanace_at_localhost";
		$connectionsIds["BalaceEnquiry"] = "finanace_at_localhost";
		$connectionsIds["NEFTTransfer"] = "finanace_at_localhost";
		$connectionsIds["recordidcounter"] = "finanace_at_localhost";
		$connectionsIds["YearlyBalanceSheet"] = "finanace_at_localhost";
		$connectionsIds["TransactionLog"] = "finanace_at_localhost";
		$connectionsIds["ClientCashWithdrawl"] = "finanace_at_localhost";
		$connectionsIds["ClientLoanCredit"] = "finanace_at_localhost";
		$connectionsIds["ClientSavingsAccounts"] = "finanace_at_localhost";
		$connectionsIds["ClientLoanAccounts"] = "finanace_at_localhost";
		$connectionsIds["SavingsAccounts"] = "finanace_at_localhost";
		$connectionsIds["MonthlyStatement"] = "finanace_at_localhost";
		$connectionsIds["YearlyStatement"] = "finanace_at_localhost";
		$connectionsIds["usersLookupFiltered"] = "finanace_at_localhost";
		$connectionsIds["accountsLookUpFiltered"] = "finanace_at_localhost";
		$connectionsIds["admin_rights"] = "finanace_at_localhost";
		$connectionsIds["admin_members"] = "finanace_at_localhost";
		$connectionsIds["admin_users"] = "finanace_at_localhost";
		$connectionsIds["ClientAccounts"] = "finanace_at_localhost";
		$connectionsIds["schedule"] = "finanace_at_localhost";
		$connectionsIds["loan"] = "finanace_at_localhost";
		$this->_tablesConnectionIds = $connectionsIds;
	}
	
	/**
	 * Check if It's possible to add to one table's sql query 
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];
		
		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;
			
		return true;	
	}
	
	/**
	 * Close db connections
	 * @destructor
	 */
	function __desctruct() 
	{
		foreach( $this->cache as $connection )
		{
			$connection->close();
		}
	}
}
?>