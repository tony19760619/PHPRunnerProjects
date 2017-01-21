<?php
require_once "plugins/PHPExcel/IOFactory.php";
function openImportExcelFile($uploadfile)
{
	global $ext;
	if(strtoupper($ext)==".XLSX")
	{
		$objPHPExcel = PHPExcel_IOFactory::load($uploadfile);
	}
	else
	{
		$objPHPExcel = new PHPExcel();
		$objReader = PHPExcel_IOFactory::createReader("Excel5");
		$objPHPExcel = $objReader->load($uploadfile);
	}
	return $objPHPExcel;
}
function getImportExcelFields($data)
{
	$fields = array();
	foreach ($data->getWorksheetIterator() as $worksheet)
	{
		$highestRow = $worksheet->getHighestRow();
		$highestColumn = $worksheet->getHighestColumn();
		$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
		for ($col = 0; $col < $highestColumnIndex; ++ $col)
		{
			$cell = $worksheet->getCellByColumnAndRow($col, 1);
			$val = $cell->getValue();
			if($val)
			{
				$fields[] = $val;
			}
			else
				break;
		}
		break;
	}
	return $fields;
}
function getImportExcelData($data, $fields, &$error_message, &$goodlines, $keys, $keys_present, $strOriginalTableName, $pageObject, $cipherer, $autoinc, &$total_records)
{
	global $cCharset;
	foreach ($data->getWorksheetIterator() as $worksheet)
	{
		$highestRow = $worksheet->getHighestRow();
		for ($row = 2; $row <= $highestRow; ++ $row)
		{
			for ($col = 0; $col < count($fields); ++ $col)
			{
				$cell = $worksheet->getCellByColumnAndRow($col, $row);
				if (PHPExcel_Shared_Date::isDateTime($cell))
				{
					$date_format=$cell->getParent()->getParent()->getCellXfByIndex( $cell->getXfIndex() )->getNumberFormat()->getFormatCode();
					$value=PHPExcel_Style_NumberFormat::ToFormattedString( $cell->getValue(),$date_format);
					if(is_a($value, 'PHPExcel_RichText'))
						$value = $value->getPlainText();
					if($value)
					{
						$time=array();
						if(strtotime($value))
							$value=strtotime($value);
						else
						{
							$d_format="";
							for($i=0;$i<strlen($date_format);$i++)
							{
								$letter=substr(strtolower($date_format),$i,1);
								if($letter=="d" || $letter=="m" || $letter=="y")
								{
									if(strpos($d_format,$letter)===false)
										$d_format.=$letter;
								}
							}
							$value=strtotime(localdatetime2db($value,$d_format));
						}
//							$value = PHPExcel_Shared_Date::ExcelToPHP($value);
					
						$time=localtime($value,true);
						$val=($time["tm_year"]+1900)."-".($time["tm_mon"]+1)."-".$time["tm_mday"]." ".$time["tm_hour"].":".$time["tm_min"].":".$time["tm_sec"];
					}
					else
						$val=NULL;
				}
				else
				{
					$error_handler=set_error_handler("empty_error_handler");
					$val=PHPExcel_Shared_String::ConvertEncoding($cell->getValue(), $cCharset, 'UTF-8');
					if(is_a($val, 'PHPExcel_RichText'))
						$val = $val->getPlainText();
					if($error_handler)
						set_error_handler($error_handler);
				}
				preg_match('/^="=(.*|n*)"$/i', $val, $matches);
				if (array_key_exists(1, $matches)) {
					$val = '='.$matches[1];
				}
				$arr[$fields[$col]]= $val;
			}
			$ret = InsertRecord($arr, $row-2, $error_message, $goodlines, $keys, $keys_present, 
	    		$strOriginalTableName, $pageObject, $cipherer, $autoinc);
			$total_records++;
		}
		break;
	}
}

function getImportTableName($tname)
{
	return $_FILES[$tname]['tmp_name'];
}

// Do not touch $table and $isIdentityOffNeeded - they needed for ASP.Net MVC version 
function db_exec_import($sql, $conn, $table = "", $isIdentityOffNeeded = false)
{
	set_error_handler("import_error_handler");
	return db_exec($sql,$conn);
}

function getImportCVSFields($uploadfile)
{
	$fcontents = file($uploadfile); 
	$line2 = trim( $fcontents[0] );
	
	if( substr($line2, 0, 3) == "\xEF\xBB\xBF" ) 
		$line2 = substr($line2, 3);

	$fields = explode(",", $line2); 
	return $fields;
}
?>