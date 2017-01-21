<?php
class ViewEmailHyperlinkField extends ViewControl
{
	public function showDBValue(&$data, $keylink)
	{
		$result = $data[$this->field];
		
		if( !strlen( $result ) )
			return "";
			
		$containsMailTo = substr($result,0,7) == "mailto:";	
		$title = $containsMailTo ? substr($result, 8) : $result;
		$link = $containsMailTo ? $result : "mailto:".$result;
			
		if( $this->searchHighlight )
			$title = $this->highlightSearchWord($title, false, ""); 
					
		return '<a href="'.$link.'">'.$title.'</a>';
	}
	
	/**
	 * Get the field's content that will be exported
	 * @prarm &Array data
	 * @prarm String keylink
	 * @return String
	 */
	public function getExportValue(&$data, $keylink = "")
	{
		return nl2br( $data[ $this->field ] );
	}	
}
?>