<?php
class FileFieldSingle extends EditControl
{
	function FileFieldSingle($field, $pageObject, $id)
	{
		parent::EditControl($field, $pageObject, $id);
		$this->format = EDIT_FORMAT_FILE;
		
		global $conn;
		$this->conn = $conn;
	}
	
	/**
	 * addJSFiles
	 * Add control JS files to page object
	 */
	function addJSFiles()
	{
		$this->pageObject->AddJSFile("include/zoombox/zoombox.js");
	}
	
	/**
	 * addCSSFiles
	 * Add control CSS files to page object
	 */ 
	function addCSSFiles()
	{
		$this->pageObject->AddCSSFile("include/zoombox/zoombox.css");
	}
	
	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		if($this->pageObject->pageType == PAGE_SEARCH || $this->pageObject->pageType == PAGE_LIST)
		{
			echo '<input id="'.$this->cfield.'" '.$this->inputStyle.' type="text" '
				.($mode == MODE_SEARCH ? 'autocomplete="off" ' : '')
				.(($mode==MODE_INLINE_EDIT || $mode==MODE_INLINE_ADD) && $this->is508==true ? 'alt="'.$this->strLabel.'" ' : '')
				.'name="'.$this->cfield.'" '.$this->pageObject->pSetEdit->getEditParams($this->field).' value="'
				.runner_htmlspecialchars($value).'">';	
			$this->buildControlEnd($validate);
			return;
		}	
			
		if($mode == MODE_SEARCH)
			$this->format = "";
		$disp = "";
		$strfilename = "";
		$function = "";
		if($mode == MODE_EDIT || $mode == MODE_INLINE_EDIT)
		{
//	show current file
			$fileName = $value;
			if($this->pageObject->pSetEdit->getViewFormat($this->field) == FORMAT_FILE 
				|| $this->pageObject->pSetEdit->getViewFormat($this->field) == FORMAT_FILE_IMAGE)
			{
				$uploadFolder = $this->pageObject->pSetEdit->getUploadFolder($this->field);
				if(!CheckImageExtension($value))
				{
					$disp = "<a target=\"_blank\" href=\"".GetRootPathForResources(runner_htmlspecialchars($uploadFolder.$value))."\">"
						.runner_htmlspecialchars($value)."</a>";
				}
				else 
				{
					$finalUploadFolder = $this->pageObject->pSetEdit->getFinalUploadFolder($this->field);
					if(!myfile_exists(getabspath($finalUploadFolder.$value)))
						$value = "images/no_image.gif";
					else 
						$value = $uploadFolder.$value;					
					if($this->pageObject->pSetEdit->showThumbnail($this->field))
					{
						$thumbprefix = $this->pageObject->pSetEdit->getStrThumbnail($this->field);
					 	// show thumbnail
						$thumbname = $thumbprefix.$fileName;
						if(substr($uploadFolder, 0, 7) != "http://")
						{ 
							if(!myfile_exists(getabspath($finalUploadFolder.$thumbname)))
							{
								$thumbname = $value;
							}
							else 
								$thumbname = $uploadFolder.$thumbname;
						}
						
						$disp = "<a target=\"_blank\" href=\"".GetRootPathForResources(runner_htmlspecialchars($value))."\" class='zoombox zgallery'>";
						$disp.="<img";
						if(isEnableSection508())
							$disp.= " alt=\"".runner_htmlspecialchars($fileName)."\"";
						$disp.=" border=0";
						$disp.=" src=\"".GetRootPathForResources(runner_htmlspecialchars($thumbname))."\"></a>";
					}
					else
					{
						if($value != "images/no_image.gif")
						{
							if(filesize($finalUploadFolder.$fileName) > 51200)
								$imageValue = "images/icons/jpg.png";
							else 
								$imageValue = $value;
						}
						else 
							$imageValue = "images/no_image.gif";
							
						if(isEnableSection508())
							$disp='<img alt=\"'.runner_htmlspecialchars($fileName).'\" src="'.GetRootPathForResources(runner_htmlspecialchars($imageValue)).'" border=0>';
						else
							$disp='<img src="'.GetRootPathForResources(runner_htmlspecialchars($imageValue)).'" border=0>';
						if($imageValue != "images/no_image.gif")
							$disp = "<a target=\"_blank\" href=\"".GetRootPathForResources(runner_htmlspecialchars($value))."\">".$disp."</a>";							
					}
				}
				$disp .= "<br />";
			}
//	filename edit
			$filename_size = 30;
			if($this->pageObject->pSetEdit->isUseTimestamp($this->field))
				$filename_size = 50;
			$strfilename = '<input type=hidden name="filenameHidden_'.$this->cfieldname.'" value="'.runner_htmlspecialchars($fileName).'"><br>'
				."Filename"
				.'&nbsp;&nbsp;<input type="text" style="background-color:gainsboro" disabled id="filename_'.$this->cfieldname
				.'" name="filename_'.$this->cfieldname.'" size="'.$filename_size.'" maxlength="100" value="'.runner_htmlspecialchars($fileName).'">';
			$strtype = '<br><input id="'.$this->ctype.'_keep" type="Radio" name="'.$this->ctype
					.'" value="upload0" checked class="rnr-uploadtype">'."Keep";
			
			if((strlen($value) || $mode==MODE_INLINE_EDIT) && !$this->pageObject->pSetEdit->isRequired($this->field))
			{
				$strtype .= '<input id="'.$this->ctype.'_delete" type="Radio" name="'.$this->ctype
					.'" value="upload1" class="rnr-uploadtype">'."Delete";
			}
			$strtype .= '<input id="'.$this->ctype.'_update" type="Radio" name="'.$this->ctype
				.'" value="upload2" class="rnr-uploadtype">'."Update";
		}
		else
		{
//	if Adding record
			$filename_size=30;
			if($this->pageObject->pSetEdit->isUseTimestamp($this->field))
				$filename_size=50;
			$strtype='<input id="'.$this->ctype.'" type="hidden" name="'.$this->ctype.'" value="upload2">';
			$strfilename='<br>'."Filename"
				.'&nbsp;&nbsp;<input type="text" id="filename_'.$this->cfieldname.'" name="filename_'.$this->cfieldname.'" size="'
				.$filename_size.'" maxlength="100">';			
		}
		echo $disp.$strtype.$function;
		
		if ($mode==MODE_EDIT || $mode==MODE_INLINE_EDIT)
		{
			echo '<br>';
		}
		
		echo '<input type="File" id="'.$this->cfield.'" '.(($mode==MODE_INLINE_EDIT || $mode==MODE_INLINE_ADD) && $this->is508 == true 
			? 'alt="'.$this->strLabel.'" ' : '').' name="'.$this->cfield.'" >'.$strfilename;
		echo '<input type="Hidden" id="notempty_'.$this->cfieldname.'" value="'.(strlen($value)? 1 : 0).'">';
		$this->buildControlEnd($validate);
	}
	
	function readWebValue(&$avalues, &$blobfields, $strWhereClause, $oldValuesRead, &$filename_values)
	{
		$this->getPostValueAndType();
		if (FieldSubmitted($this->goodFieldName."_".$this->id))
		{
			$fileNameForPrepareFunc = securityCheckFileName(postvalue("filename_".$this->goodFieldName."_".$this->id));
			if($this->pageObject->pageType != PAGE_EDIT)
			{
				$this->webValue = prepare_upload($this->field, "upload2", $fileNameForPrepareFunc, $fileNameForPrepareFunc, ""
					, $this->id, $this->pageObject);
			}
			else
			{
				if(substr($this->webType, 0, 4) == "file")
				{
					$prepearedFile = prepare_file($this->webValue, $this->field, $this->webType, $fileNameForPrepareFunc, $this->id);
					if($prepearedFile !== false)
					{
						$this->webValue = $prepearedFile["value"];
						$filename = $prepearedFile["filename"];
					}
					else 
					$this->webValue = false;
				}
				else if(substr($this->webType, 0, 6) == "upload")
				{
					if($fileNameForPrepareFunc)
						$this->webValue = $fileNameForPrepareFunc;
					if($this->webType == "upload1")
					{
						// file deletion, read filename from the database
						if(!$oldValuesRead)
						{
							$rsold = db_query($this->pageObject->gQuery->gSQLWhere($strWhereClause), $this->conn);
							$dataold = db_fetch_array($rsold);
							$oldValuesRead = true;
						}
						$fileNameForPrepareFunc = $dataold[$this->field];
					}
					$this->webValue = prepare_upload($this->field, $this->webType, $fileNameForPrepareFunc, $this->webValue, "", $this->id, $this->pageObject);
				}
			}
		}
		else
			$this->webValue = false;
		
		if(!($this->webValue === false))
		{
			//if($this->webValue)
			{
				if($this->pageObject->pSetEdit->getResizeOnUpload($this->field) 
					|| $this->pageObject->pSetEdit->getCreateThumbnail($this->field))
					$contents = GetUploadedFileContents("value_".$this->goodFieldName."_".$this->id);
			
				if($this->webValue && $this->pageObject->pSetEdit->getCreateThumbnail($this->field))
				{
					$ext = CheckImageExtension(GetUploadedFileName("value_".$this->goodFieldName."_".$this->id));
					$thumb = CreateThumbnail($contents, $this->pageObject->pSetEdit->getThumbnailSize($this->field), $ext);
					$this->pageObject->filesToSave[] = new SaveFile($thumb, $this->pageObject->pSetEdit->GetStrThumbnail($this->goodFieldName)
						.$this->webValue, $this->pageObject->pSetEdit->getUploadFolder($this->field), $this->pageObject->pSetEdit->isAbsolute($this->field));
				}
				$avalues[$this->field] = $this->webValue;
			}
		}
	}

	function makeWidthStyle($widthPx)
	{
		if(0 == $widthPx)
			return "";
		return "min-width: ".$widthPx."px";
	}
}
?>