<?php
class ViewCheckboxField extends ViewControl
{
	public function showDBValue(&$data, $keylink)
	{		
		$result = "<img src=\"";
		$imgSrc = "images/check_";
		if($data[$this->field] && $data[$this->field] != 0)
			$imgSrc .= "yes";
		else
			$imgSrc .= "no";

		$result .=GetRootPathForResources($imgSrc.".gif")."\" border=0";
		if(isEnableSection508())
			$result .= " alt=\" \"";
		$result .=  ">";
		
		return $result;
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