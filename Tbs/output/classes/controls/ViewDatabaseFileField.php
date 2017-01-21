<?php
class ViewDatabaseFileField extends ViewControl
{
	public function showDBValue(&$data, $keylink)
	{
		$value = "";
		$fileNameF = $this->container->pSet->getFilenameField($this->field);
		if($fileNameF) 
		{
			$fileName = $data[$fileNameF];
			if(! $fileName)
				$fileName = "file.bin";
		} 
		else 
			$fileName = "file.bin";
		
		if( strlen($data[$this->field]) ) 
		{
			$value = "<a href='".GetTableLink("getfile", "", "table=".GetTableURL($this->container->pSet->_table)."&filename=".rawurlencode($fileName)."&field=".rawurlencode($this->field).$keylink)."'>";
			$value.= runner_htmlspecialchars($fileName);
			$value.= "</a>";
		}
		return $value;
	}
	
	/**
	 * Get the field's content that will be exported
	 * @prarm &Array data
	 * @prarm String keylink
	 * @return String
	 */
	public function getExportValue(&$data, $keylink = "")
	{
		return "LONG BINARY DATA - CANNOT BE DISPLAYED";
	}
}
?>