<?php
class DBFunctions
{
	/**
	 * The left db wrapper
	 * @type String
	 */
	protected $strLeftWrapper;
	
	/**
	 * The right db wrapper	
	 * @type String
	 */	
	protected $strRightWrapper;

	
	function DBFunctions( $leftWrapper, $rightWrapper, $extraParams )
	{
		$this->strLeftWrapper = $leftWrapper;
		$this->strRightWrapper = $rightWrapper;
	}

	/**
	 * @param String strName
	 * @return String
	 */	
	public function addTableWrappers( $strName )
	{
		if( substr($strName, 0, 1) == $this->strLeftWrapper )
			return $strName;
			
		$arr = explode(".", $strName);
		$ret = "";
		foreach( $arr as $e )
		{
			if( $ret != "" )
				$ret .= ".";
			$ret .= $this->strLeftWrapper . $e . $this->strRightWrapper;
		}
		return $ret;
	}
}
?>