<?php
class ViewDocumentDownloadOldField extends ViewControl
{
	/**
	 * addJSFiles
	 * Add control JS files to page object
	 */
	function addJSFiles()
	{
				$this->AddJSFile("include/zoombox/zoombox.js");
		$this->getJSControl();
	}
	
	/**
	 * addCSSFiles
	 * Add control CSS files to page object
	 */ 
	function addCSSFiles()
	{
		$this->AddCSSFile("include/zoombox/zoombox.css");
	}
	
	public function showDBValue(&$data, $keylink)
	{
		if($this->container->forExport && $this->container->forExport != "excel")
			return "LONG BINARY DATA - CANNOT BE DISPLAYED";
		$value = $data[$this->field];
		$result = $value;
		if(!CheckImageExtension($result))
			return "";
			
		if($this->container->forExport == "excel")
			return $result;
		$uploadFolder = $this->container->pSet->getUploadFolder($this->field);
		$finalUploadFolder = $this->container->pSet->getFinalUploadFolder($this->field);
		$fileName = $value;
		if(!myfile_exists(getabspath($finalUploadFolder.$value)))
			$value = GetRootPathForResources("images/no_image.gif");
		else 
			$value = GetRootPathForResources($uploadFolder.$value);
		if($this->container->pSet->showThumbnail($this->field))
		{
			$thumbprefix = $this->container->pSet->getStrThumbnail($this->field);
		 	// show thumbnail
			$thumbname = $thumbprefix.$fileName;
			if(substr($uploadFolder,0,7) != "http://")
			{
				if(!myfile_exists($finalUploadFolder.$thumbname))
					$thumbname = $value;
				else 
					$thumbname = GetRootPathForResources($uploadFolder.$thumbname);
			}
			$linkPrefix = "";
						
			$result = "<a target=_blank href=\"".runner_htmlspecialchars($value)."\" class='zoombox'>";
			$result .= "<img";
			if($this->is508)
				$result .= " alt=\"".runner_htmlspecialchars($data[$this->field])."\"";
			$result .= " border=0";
			$result .= " src=\"".runner_htmlspecialchars($thumbname)."\"></a>";
		}
		else
		{
			$imageSize = "";
			$imgWidth = $this->container->pSet->getImageWidth($this->field);
			if($imgWidth)
				$imageSize .= " width=".$imgWidth;
			
			$imgHeight = $this->container->pSet->getImageHeight($this->field);
			if($imgHeight)
				$imageSize .= ($imgHeight ? " height=".$imgHeight : "");
			
			if($divSize != "")
				$divSize = 'style="'.$divSize.'"';
			if($this->is508)
				$result='<img alt=\"'.runner_htmlspecialchars($data[$this->field]).'\" src="'.runner_htmlspecialchars($value).'" '.$imageSize.' border="0">';
			else
				$result='<img src="'.runner_htmlspecialchars($value).'" '.$imageSize.' border="0">';
		}
		return $result;
	}
}
?>