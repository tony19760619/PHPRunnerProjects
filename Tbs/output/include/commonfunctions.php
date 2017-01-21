<?php 
/**
 * That function  copies all elements from associative array to object, as object properties with same names
 * Usefull when you need to copy many properties
 *
 * @param link $obj
 * @param link $argsArr
 * @intellisense
 */
function RunnerApply (&$obj, &$argsArr)
{	
	foreach ($argsArr as $key=>$var)
		setObjectProperty($obj,$key,$argsArr[$key]);
}


/**
 * @intellisense
 */
function GetImageFromDB($gQuery, $forPDF = false, $params = array())
{
	global $conn;
	if(!$forPDF)
	{
		$table = postvalue("table");
		$strTableName = GetTableByShort($table);
		$settings = new ProjectSettings($strTableName);
		
		if (!checkTableName($table))
		{
			return '';
		}
		
		//include("include/".$table."_variables.php");
		@ini_set("display_errors","1");
		@ini_set("display_startup_errors","1");
	
		if(!isLogged() || !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{ 
			HeaderRedirect("login"); 
			return;
		}
	
		$field = postvalue("field");
		if(!$settings->checkFieldPermissions($field))
			return DisplayNoImage();
	
		//	construct sql
		$keysArr = $settings->getTableKeys();
		$keys = array();
		foreach ($keysArr as $ind=>$k)
		{
			$keys[$k]=postvalue("key".($ind+1));
		}
	}
	else
	{
		$table = @$params["table"];
	
		$strTableName = GetTableByShort($table);
		
		if (!checkTableName($table))
		{
			exit(0);
		}
		$settings = new ProjectSettings($strTableName);
		$field = @$params["field"];
		//	construct sql
		$keysArr = $settings->getTableKeys();
		$keys = array();
		foreach ($keysArr as $ind=>$k)
		{
			$keys[$k]=@$params["key".($ind+1)];
		}
	}
	if(!$gQuery->HasGroupBy())
	{
		// Do not select any fields except current (image) field.
		// If query has 'group by' clause then other fields are used in it and we may not simply cut 'em off.
		// Just don't do anything in that case.
		$gQuery->RemoveAllFieldsExcept($settings->getFieldIndex($field));
	}
	
	$where=KeyWhere($keys);
	
	$secOpt = $settings->getAdvancedSecurityType();
	if ($secOpt == ADVSECURITY_VIEW_OWN)
	{
		$where=whereAdd($where,SecuritySQL("Search"));
	}
	
	$sql = $gQuery->gSQLWhere($where);
	
	$rs = db_query($sql,$conn);
	
	if($forPDF)
	{
		if($rs)
		{	
			$data = db_fetch_array($rs);
			return $data[$field];
		}
	}
	else
	{
		if(!$rs)
			return DisplayNoImage();
			
		if(postvalue('src') == 1)
		{
			$value = myfile_get_contents('images/icons/jpg.png');
		}
		else
			$value = db_stripslashesbinary($data[$field]);
		if(!$value)
		{
			if(postvalue("alt"))
			{
				$value=db_stripslashesbinary($data[postvalue("alt")]);
				if(!$value)
					return DisplayNoImage();
			}
			else
				return DisplayNoImage();
		}
		
		$itype=SupposeImageType($value);
		
		if(!$itype)
		{
			return DisplayFile();
		}
		if(!isset($pdf))
		{
			header("Content-Type: ".$itype);
			header("Cache-Control: private");
			SendContentLength(strlen_bin($value));
		}
		echoBinary($value);
		return '';
	}
}

/**
 * @intellisense
 */
function redirectToLogin()
{
	$referer = $_SERVER['HTTP_REFERER'];
	$host = mysprintf("%s://%s/", array(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http', $_SERVER['HTTP_HOST']));
	$expired = (isset($referer) && (substr($referer, 0, strlen($host)) == $host) && $referer != $host.'index.htm') ? "message=expired" : "";
	HeaderRedirect("login", "", $expired);
	exit();
}

/**
 * @intellisense
 */
function getLangFileName($langName)
{
	$langArr = array();
	$langArr["English"] = "English";
	return $langArr[$langName];
}

/**
 * @intellisense
 */
function GetGlobalData($name, $defValue)
{
	global $globalSettings;
	if(!array_key_exists($name, $globalSettings))
		return $defValue;
	return $globalSettings[$name];
}

/**
 * @intellisense
 */
function DisplayMap($params) 
{
	global $pageObject;
	
	$pageObject->googleMapCfg['mapsData'][$params['id']]['addressField'] = $params['addressField'] ? $params['addressField'] : "";
	$pageObject->googleMapCfg['mapsData'][$params['id']]['latField'] = $params['latField'] ? $params['latField'] : '';
	$pageObject->googleMapCfg['mapsData'][$params['id']]['lngField'] = $params['lngField'] ? $params['lngField'] : '';
	$pageObject->googleMapCfg['mapsData'][$params['id']]['width'] = $params['width'] ? $params['width'] : 0;
	$pageObject->googleMapCfg['mapsData'][$params['id']]['height'] = $params['height'] ? $params['height'] : 0;
	$pageObject->googleMapCfg['mapsData'][$params['id']]['type'] = 'BIG_MAP';
	$pageObject->googleMapCfg['mapsData'][$params['id']]['showCenterLink'] = $params['showCenterLink'] ? $params['showCenterLink'] : 0;
	$pageObject->googleMapCfg['mapsData'][$params['id']]['descField'] = $params['descField'] ? $params['descField'] : $pageObject->googleMapCfg['mapsData'][$params['id']]['addressField'];
	$pageObject->googleMapCfg['mapsData'][$params['id']]['descField'] = $params['description'] ? $params['description'] : $pageObject->googleMapCfg['mapsData'][$params['id']]['addressField'];
	$pageObject->googleMapCfg['mapsData'][$params['id']]['markerAsEditLink'] = $params['markerAsEditLink'];
	
	if (isset($params['zoom']))
		$pageObject->googleMapCfg['mapsData'][$params['id']]['zoom'] = $params['zoom'];
	
	//$pageObject->googleMapCfg['bigMapDefZoom'] = $pageObject->googleMapCfg['mapsData'][$params['id']]['zoom'];
	
	if ($pageObject->googleMapCfg['mapsData'][$params['id']]['showCenterLink'])
		$pageObject->googleMapCfg['mapsData'][$params['id']]['centerLinkText'] = $params['centerLinkText'] ? $params['centerLinkText'] : '';
	
	$pageObject->googleMapCfg['mainMapIds'][] = $params['id'];
	
	if (isset($params['APIkey']))
		$pageObject->googleMapCfg['APIcode'] = $params['APIkey'];
}

/**
 * @intellisense
 */
function DisplayCAPTCHA() 
{
	global $pageObject;
	$pageObject->xt->assign_event($pageObject->captchaId, $pageObject, 'createCaptcha', array());
}

/**
 * @intellisense
 */
function checkTableName($shortTName, $type=false)
{
	if (!$shortTName)
		return false;
	
	if ("customer" == $shortTName && ($type===false || ($type!==false && $type == 0)))
		return true;
	if ("customerwaste" == $shortTName && ($type===false || ($type!==false && $type == 0)))
		return true;
	if ("customerwastebyday" == $shortTName && ($type===false || ($type!==false && $type == 0)))
		return true;
	if ("customerwastebymonth" == $shortTName && ($type===false || ($type!==false && $type == 0)))
		return true;
	if ("customerwastebyweek" == $shortTName && ($type===false || ($type!==false && $type == 0)))
		return true;
	if ("customerwastebyyear" == $shortTName && ($type===false || ($type!==false && $type == 0)))
		return true;
	if ("waste" == $shortTName && ($type===false || ($type!==false && $type == 0)))
		return true;
	if ("user" == $shortTName && ($type===false || ($type!==false && $type == 0)))
		return true;
	if ("admin_rights" == $shortTName && ($type===false || ($type!==false && $type == 1)))
		return true;
	if ("admin_members" == $shortTName && ($type===false || ($type!==false && $type == 1)))
		return true;
	if ("admin_users" == $shortTName && ($type===false || ($type!==false && $type == 1)))
		return true;
	if ("RegisterPage_customer" == $shortTName && ($type===false || ($type!==false && $type == 1)))
		return true;
	return false;
}

/**
 * Get password field on register page
 * @intellisense
 */
function GetPasswordField($table = "")
{
	global $cPasswordField;
	return $cPasswordField;
}

/**
 * Get user name field on register page
 * @intellisense
 */
function GetUserNameField($table = "")
{
	global $cUserNameField;
	return $cUserNameField;
}

/**
 * Get user name field on register page
 * @intellisense
 */
function GetDisplayNameField($table = "")
{
	global $cDisplayNameField;
	return $cDisplayNameField;
}

/**
 * Get user name field on register page
 * @intellisense
 */
function GetEmailField($table = "")
{
	global $cEmailField;
	return $cEmailField;
}

/**
 * @intellisense
 */
function GetTablesList($pdfMode = false)
{
	$arr = array();
	$strPerm = GetUserPermissions("customer");
	if(strpos($strPerm, "P")!==false || ($pdfMode && strpos($strPerm, "S")!==false))
	{
		$arr[]="customer";
	}
	$strPerm = GetUserPermissions("customerwaste");
	if(strpos($strPerm, "P")!==false || ($pdfMode && strpos($strPerm, "S")!==false))
	{
		$arr[]="customerwaste";
	}
	$strPerm = GetUserPermissions("customerwastebyday");
	if(strpos($strPerm, "P")!==false || ($pdfMode && strpos($strPerm, "S")!==false))
	{
		$arr[]="customerwastebyday";
	}
	$strPerm = GetUserPermissions("customerwastebymonth");
	if(strpos($strPerm, "P")!==false || ($pdfMode && strpos($strPerm, "S")!==false))
	{
		$arr[]="customerwastebymonth";
	}
	$strPerm = GetUserPermissions("customerwastebyweek");
	if(strpos($strPerm, "P")!==false || ($pdfMode && strpos($strPerm, "S")!==false))
	{
		$arr[]="customerwastebyweek";
	}
	$strPerm = GetUserPermissions("customerwastebyyear");
	if(strpos($strPerm, "P")!==false || ($pdfMode && strpos($strPerm, "S")!==false))
	{
		$arr[]="customerwastebyyear";
	}
	$strPerm = GetUserPermissions("waste");
	if(strpos($strPerm, "P")!==false || ($pdfMode && strpos($strPerm, "S")!==false))
	{
		$arr[]="waste";
	}
	$strPerm = GetUserPermissions("user");
	if(strpos($strPerm, "P")!==false || ($pdfMode && strpos($strPerm, "S")!==false))
	{
		$arr[]="user";
	}
	$strPerm = GetUserPermissions("admin_rights");
	if(strpos($strPerm, "P")!==false || ($pdfMode && strpos($strPerm, "S")!==false))
	{
		$arr[]="admin_rights";
	}
	$strPerm = GetUserPermissions("admin_members");
	if(strpos($strPerm, "P")!==false || ($pdfMode && strpos($strPerm, "S")!==false))
	{
		$arr[]="admin_members";
	}
	$strPerm = GetUserPermissions("admin_users");
	if(strpos($strPerm, "P")!==false || ($pdfMode && strpos($strPerm, "S")!==false))
	{
		$arr[]="admin_users";
	}
	$strPerm = GetUserPermissions("RegisterPage_customer");
	if(strpos($strPerm, "P")!==false || ($pdfMode && strpos($strPerm, "S")!==false))
	{
		$arr[]="RegisterPage_customer";
	}
	return $arr;
}

/**
 * return the full database field original name
 * @intellisense
 */
function GetFullFieldName($field, $table = "", $addAs = true)
{
	if($table == "")
	{
		global $strTableName;
		$table = $strTableName;
	}
	$pSet = new ProjectSettings($table);
	$fname = $pSet->getFullNameField($field);
	if($pSet->hasEncryptedFields() && !isEncryptionByPHPEnabled())
	{
		$cipherer = new RunnerCipherer($table);
		return $cipherer->GetFieldName($fname, $field)
			.($cipherer->isFieldEncrypted($field) && $addAs ? " as ".AddFieldWrappers($field) : "");
	}
	return $fname;
}

/**
 * return the full database field original name
 * @intellisense
 */
function GetFullFieldNameForInsert($pSet, $field)
{
	return $pSet->getFullNameField($field);
}

/**
 * returns Chart type
 * @intellisense
 */
function GetChartType($shorttable)
{
	return "";
}

////////////////////////////////////////////////////////////////////////////////
// data output functions
////////////////////////////////////////////////////////////////////////////////

/**
 * @intellisense
 */
function GetShorteningForLargeText($strValue, $cNumberOfChars)
{
	$ret = runner_substr($strValue, 0, $cNumberOfChars );
		
	return runner_htmlspecialchars($ret);
}

/**
 * add prefix to the URL
 * @intellisense
 */
function AddLinkPrefix($pSet, $field, $link)
{
	if(strpos($link,"://")===false && substr($link,0,7)!="mailto:")
		return $pSet->getLinkPrefix($field).$link;
	return $link;
}

/**
 * @intellisense
 */
function GetTotalsForTime($value)
{
	$time=parsenumbers($value);
	while(count($time)<3)
		$time[]=0;
	return $time;
}

/**
 * return Totals string
 * @intellisense
 */
function GetTotals($field, $value, $stype, $iNumberOfRows, $sFormat, $ptype)
{
	global $strTableName;
	$pSet = new ProjectSettings($strTableName, $ptype);
	$days = 0;
	if($stype == "AVERAGE")
	{
		if($iNumberOfRows)
		{	
			if($sFormat == FORMAT_TIME)
			{
				if($value)
				{
					$value = round($value/$iNumberOfRows,0);
					$s = $value % 60;
					$value -= $s;
					$value /= 60;
					$m = $value % 60;
					$value -= $m;
					$value /= 60;
					$h = $value % 24;
					$value -= $h;
					$value /= 24;
					$d = $value;
					
					$value = ($d!=0 ? $d.'d ' : ''). mysprintf("%02d:%02d:%02d",array($h,$m,$s));
				}
			}
			else $value = round($value/$iNumberOfRows,2);
		}
		else
			return "";
	}
	if($stype == "TOTAL")
	{
		if($sFormat == FORMAT_TIME)
		{
			if($value)
			{
				$s = $value % 60;
				$value -= $s;
				$value /= 60;
				$m = $value % 60;
				$value -= $m;
				$value /= 60;
				$h = $value % 24;
				$value -= $h;
				$value /= 24;
				$d = $value;
				$value = ($d!=0 ? $d.'d ' : ''). mysprintf("%02d:%02d:%02d",array($h,$m,$s));
			}
		}
	}
	$sValue = "";
	$data = array($field => $value);
	if($sFormat == FORMAT_CURRENCY)
	 	$sValue = str_format_currency($value);
	else if($sFormat == FORMAT_PERCENT)
		$sValue = str_format_number($value*100)."%"; 
	else if($sFormat == FORMAT_NUMBER)
 		$sValue = str_format_number($value, $pSet->isDecimalDigits($field));
	else if($sFormat == FORMAT_CUSTOM && $stype!="COUNT")
	{
		include_once getabspath('classes/controls/ViewControlsContainer.php');
		$viewControls = new ViewControlsContainer($pSet, $ptype);			
		$sValue = $viewControls->showDBValue($field, $data);
	}
	else 
 		$sValue = $value;
	
	if($stype == "COUNT") 
		return $value;
	if($stype == "TOTAL") 
		return $sValue;
	if($stype == "AVERAGE") 
		return $sValue;
	return "";
}


/**
 * @intellisense
 */
function DisplayNoImage()
{
	$path = getabspath("images/no_image.gif");
	header("Content-Type: image/gif");
	printfile($path);
}

/**
 * @intellisense
 */
function DisplayFile()
{
	$path = getabspath("images/file.gif");
	header("Content-Type: image/gif");
	printfile($path);
}

////////////////////////////////////////////////////////////////////////////////
// miscellaneous functions
////////////////////////////////////////////////////////////////////////////////

/**
 * analog of strrpos function
 * @intellisense
 */
function my_strrpos($haystack, $needle)
{
	$index = strpos(strrev($haystack), strrev($needle));
	if($index === false)
		return false;
	$index = strlen($haystack) - strlen($needle) - $index;
	return $index;
}

/**
 * prepare string for JavaScript. Replace ' with \' and linebreaks with \r\n
 * @intellisense
 */
function jsreplace($str)
{
	$ret= str_replace(array("\\","'","\r","\n"),array("\\\\","\\'","\\r","\\n"),$str);
	return my_str_ireplace("</script>","</scr'+'ipt>",$ret);
}

/**
 * @intellisense
 */
function LogInfo($SQL)
{/*
	global $dSQL,$dDebug;
	$dSQL=$SQL;
	if($dDebug)
	{
		echo $dSQL;
		echo "<br>";
	}*/
}

/**
 * check if file extension is image extension
 * @intellisense
 */
function CheckImageExtension($filename)
{
	if(strlen($filename)<4)
		return false;
	$ext=strtoupper(substr($filename,strlen($filename)-4));
	if($ext==".GIF" || $ext==".JPG" || $ext=="JPEG" || $ext==".PNG" || $ext==".BMP")
		return $ext;
	return false;
} 

/**
 * @intellisense
 */
function html_special_decode($str)
{
	$ret=$str;
	$ret=str_replace("&gt;",">",$ret);
	$ret=str_replace("&lt;","<",$ret);
	$ret=str_replace("&quot;","\"",$ret);
	$ret=str_replace("&#039;","'",$ret);
	$ret=str_replace("&#39;","'",$ret);
	$ret=str_replace("&amp;","&",$ret);
	return $ret;
}

////////////////////////////////////////////////////////////////////////////////
// database and SQL related functions
////////////////////////////////////////////////////////////////////////////////

/**
 * add clause to WHERE or HAVING expression
 * @intellisense
 */
function whereAdd($where,$clause)
{
	if(!strlen($clause))
		return $where;
	if(!strlen($where))
		return $clause;
	return "(".$where.") and (".$clause.")";
}

/**
 * combine SQL logincal clauses from array using AND (default) or OR
 * @intellisense
 */
function combineSQLCriteria($arrElements, $and = true)
{
	$ret="";
	$union = $and ? " AND " : " OR ";
	foreach($arrElements as $e)
	{
		if(strlen($e))
		{
			if(!strlen($ret))
			{
				$ret = "(".$e.")";
			}
			else
			{
				$ret .= $union."(".$e.")";
			}
		}
	}
	return $ret;
}

/**
 * add WHERE clause to SQL string
 * @intellisense
 */
function AddWhere($sql,$where)
{
	if(!strlen($where))
		return $sql;
	$sql=str_replace(array("\r\n","\n","\t")," ",$sql);
	$tsql = strtolower($sql);
	$n = my_strrpos($tsql," where ");
	$n1 = my_strrpos($tsql," group by ");
	$n2 = my_strrpos($tsql," order by ");
	if($n1===false)
		$n1=strlen($tsql);
	if($n2===false)
		$n2=strlen($tsql);
	if ($n1>$n2)
		$n1=$n2;
	if($n===false)
		return substr($sql,0,$n1)." where ".$where.substr($sql,$n1);
	else
		return substr($sql,0,$n+strlen(" where "))."(".substr($sql,$n+strlen(" where "),$n1-$n-strlen(" where ")).") and (".$where.")".substr($sql,$n1);
}

/**
 * construct WHERE clause with key values
 * @intellisense
 */
function KeyWhere(&$keys, $table="")
{
	global $strTableName;
	if(!$table)
		$table = $strTableName;
	$strWhere="";
	
	$pSet = new ProjectSettings($table);
	$cipherer = new RunnerCipherer($table);
	$keyFields = $pSet->getTableKeys();
	foreach($keyFields as $kf)
	{
		if(strlen($strWhere))
			$strWhere.=" and ";
		$value = $cipherer->MakeDBValue($kf, $keys[$kf], "", "", true);
		$valueisnull = ($value==="null");
		if($valueisnull)
			$strWhere.= GetFullFieldNameForInsert($pSet, $kf)." is null";
		else
			$strWhere.= GetFullFieldName($kf, $table, false)."=".$cipherer->MakeDBValue($kf, $keys[$kf], "", "", true);
	}
	return $strWhere;
}

/**
 * consctruct SQL WHERE clause for simple search
 * @intellisense
 */
function StrWhereExpression($strField, $SearchFor, $strSearchOption, $SearchFor2, $p_cipherer)
{
	global $strTableName;
	$pSet = new ProjectSettings($strTableName, PAGE_SEARCH);
	$cipherer = new RunnerCipherer($strTableName);
	$type = $pSet->getFieldType($strField);
	// Filed name for encryption functions
	$encFieldName = $strField;
	
	$ismssql=false;
	
	$isdb2=false;

	$isMysql = true;

	$btexttype=IsTextType($type);
	$btexttype=false;

	if($strSearchOption=='Empty')
	{
		if(IsCharType($type) && (!$ismssql || !$btexttype))
			return "(".GetFullFieldNameForInsert($pSet, $strField)." is null or ".GetFullFieldNameForInsert($pSet, $strField)."='')";			
		elseif ($ismssql && $btexttype)	
			return "(".GetFullFieldNameForInsert($pSet, $strField)." is null or ".GetFullFieldNameForInsert($pSet, $strField)." LIKE '')";
		else
			return GetFullFieldNameForInsert($pSet, $strField)." is null";
	}
	$strQuote="";
	if(NeedQuotes($type))
		$strQuote = "'";
	//	return none if trying to compare numeric field and string value
	$sSearchFor=$SearchFor;
	$sSearchFor2=$SearchFor2;
	if(IsBinaryType($type))
		return "";
	

	
	if(IsDateFieldType($type) && $strSearchOption!="Contains" && $strSearchOption!="Starts with" )
	{
		$time=localdatetime2db($SearchFor);
		if($time=="null")
			return "";
		$sSearchFor=db_datequotes($time);
		if($strSearchOption=="Between")
		{
			$time=localdatetime2db($SearchFor2);
			if($time=="null")
				$sSearchFor2="";
			else
				$sSearchFor2=db_datequotes($time);
		}
	}
	
	if(!$strQuote && !is_numeric($sSearchFor))
		return "";
	
	if($cipherer->isFieldPHPEncrypted($encFieldName))
		$sSearchFor = $cipherer->MakeDBValue($encFieldName, $sSearchFor);
	else
	{
		if(!$strQuote && $strSearchOption!="Contains" && $strSearchOption!="Starts with")
		{
			$sSearchFor = 0+$sSearchFor;
			$sSearchFor2 = 0+$sSearchFor2;
		}
		else if(!IsDateFieldType($type) && $strSearchOption!="Contains" && $strSearchOption!="Starts with")
		{
			if($btexttype)
			{
				$sSearchFor=db_prepare_string($sSearchFor);
				if($strSearchOption=="Between" && $sSearchFor2)
					$sSearchFor2=db_prepare_string($sSearchFor2);
			}
			else
			{
				$sSearchFor = $pSet->isEnableUpper(db_prepare_string($sSearchFor));
				if($strSearchOption=="Between" && $sSearchFor2)
					$sSearchFor2 = $pSet->isEnableUpper(db_prepare_string($sSearchFor2));
			}
		}
	}

	if(IsCharType($type) && !$btexttype)
	{
		if(!$cipherer->isFieldPHPEncrypted($encFieldName))
			$strField = $pSet->isEnableUpper(GetFullFieldName($strField, "", false));
		else 
			$strField=GetFullFieldName($strField);
	}
	elseif($strSearchOption=="Contains" || $strSearchOption=="Starts with")
	{
		$strField = db_field2char(GetFullFieldName($strField),$type);
	}
	elseif($pSet->getViewFormat($strField)==FORMAT_TIME)
	{
		$strField = db_field2time(GetFullFieldName($strField),$type);
	}
	else 
	{
		$strField=GetFullFieldName($strField);
	}

	$ret="";
	$like="like";
	
	if ($isMysql)
	{
		$sSearchForMysql = str_replace('\\\\', '\\\\\\\\', $sSearchFor); 
	}
	if($strSearchOption=="Contains")
	{
		if ($isMysql)
		{
			$sSearchFor = $sSearchForMysql;
		}
		if($cipherer->isFieldPHPEncrypted($encFieldName))
			return $strField."=".$sSearchFor;
		
		if(IsCharType($type) && !$btexttype)
			return $strField." ".$like." ".$pSet->isEnableUpper(db_prepare_string("%".$sSearchFor."%"));
		else
			return $strField." ".$like." ".db_prepare_string("%".$sSearchFor."%");
	}
	else if($strSearchOption=="Equals") 
		return $strField."=".$sSearchFor;
	else if($strSearchOption=="Starts with")
	{
		if ($isMysql)
		{
			$sSearchFor = $sSearchForMysql;
		}
		if(IsCharType($type) && !$btexttype)
			return $strField." ".$like." ".$pSet->isEnableUpper(db_prepare_string($sSearchFor."%"));
		else
			return $strField." ".$like." ".db_prepare_string($sSearchFor."%");
	}
	else if($strSearchOption=="More than") return $strField.">".$sSearchFor;
	else if($strSearchOption=="Less than") return $strField."<".$sSearchFor;
	else if($strSearchOption=="Between")
	{
		$ret=$strField.">=".$sSearchFor;
		if($sSearchFor2) $ret.=" and ".$strField."<=".$sSearchFor2;
			return $ret;
	}
	return "";
}

///////////////////////////////////////////////
//    This function is DEPRECATED!			 //
//    Use SQLWhere from EditControl instead  //
///////////////////////////////////////////////
/** 
 * 	construct SQL WHERE clause for Advanced search
 * @intellisense
 */
function StrWhereAdv($strField, $SearchFor, $strSearchOption, $SearchFor2, $etype, $isSuggest)
{
	global $strTableName;
	
	$pSet = new ProjectSettings($strTableName, PAGE_SEARCH);
	$cipherer = new RunnerCipherer($strTableName);
	
	$type = $pSet->getFieldType($strField);
	$isOracle = false;

	$ismssql=false;

	$isdb2=false;
	
	$btexttype=IsTextType($type);
	$btexttype=false;

	$isMysql = true;

	if(IsBinaryType($type))
		return "";
	if($strSearchOption=='Empty')
	{
		if(IsCharType($type) && (!$ismssql || !$btexttype) && !$isOracle)
		{
			return "(".GetFullFieldNameForInsert($pSet, $strField)." is null or ".GetFullFieldNameForInsert($pSet, $strField)."='')";
		}
		elseif ($ismssql && $btexttype)
		{
			return "(".GetFullFieldNameForInsert($pSet, $strField)." is null or ".GetFullFieldNameForInsert($pSet, $strField)." LIKE '')";
		}
		else
		{
			return GetFullFieldNameForInsert($pSet, $strField)." is null";
		}
	}
	$like="like";
	
	
	if($pSet->getEditFormat($strField) == EDIT_FORMAT_LOOKUP_WIZARD)
	{
		if($pSet->multiSelect($strField))
			$SearchFor=splitvalues($SearchFor);
		else
			$SearchFor=array($SearchFor);
		$ret="";
		foreach($SearchFor as $searchValue)
		{
			$value = $searchValue;
			if(!($value=="null" || $value=="Null" || $value==""))
			{
				if(strlen($ret))
					$ret.=" or ";
				if($strSearchOption=="Equals")
				{
					$value=make_db_value($strField,$value);
					if(!($value=="null" || $value=="Null"))
						$ret.=GetFullFieldName($strField, "", false).'='.$value;
				}
				elseif($isSuggest)
				{
					$ret.=" ".GetFullFieldName($strField, "", false)." ".$like." ".db_prepare_string('%'.$value.'%');	
				}
				else
				{
					if(strpos($value,",")!==false || strpos($value,'"')!==false)
						$value = '"'.str_replace('"','""',$value).'"';
					
					if ($isMysql)
					{
						$value = str_replace('\\\\', '\\\\\\\\', $value); 
					}
					//for search by multiply Lookup wizard field
					$ret.=GetFullFieldName($strField, "", false)." = ".db_prepare_string($value);
					$ret.=" or ".GetFullFieldName($strField, "", false)." ".$like." ".db_prepare_string("%,".$value.",%");
					$ret.=" or ".GetFullFieldName($strField, "", false)." ".$like." ".db_prepare_string("%,".$value);
					$ret.=" or ".GetFullFieldName($strField, "", false)." ".$like." ".db_prepare_string($value.",%");
				}
			}
		}
		if(strlen($ret))
			$ret="(".$ret.")";
		return $ret;
	}
	if($pSet->getEditFormat($strField) == EDIT_FORMAT_CHECKBOX)
	{
		if($SearchFor=="none")
			return "";
			
		if(NeedQuotes($type))
		{
				$isOracle = false;
			
			if($SearchFor=="on")
			{
				$whereStr = "(".GetFullFieldName($strField)."<>'0' ";
				if (!$isOracle)
				{
					$whereStr .= " and ".GetFullFieldName($strField)."<>'' ";
				} 
				$whereStr .= " and ".GetFullFieldName($strField)." is not null)";
				return $whereStr;
			}
			elseif($SearchFor=="off")
			{
				$whereStr = "(".GetFullFieldName($strField)."='0' ";
				if (!$isOracle)
				{
					$whereStr .= " or ".GetFullFieldName($strField)."='' "; 
				}
				$whereStr .= " or ".GetFullFieldName($strField)." is null)";
			}
		}
		else
		{
			if($SearchFor=="on")
			{
				return "(".GetFullFieldName($strField)."<>0 and ".GetFullFieldName($strField)." is not null)";
			}
			elseif($SearchFor=="off")
			{
				return "(".GetFullFieldName($strField)."=0 or ".GetFullFieldName($strField)." is null)";
			}
		}
	}
	$value1 = $cipherer->MakeDBValue($strField, $SearchFor, $etype, "", true);
	$value2 = false;
	$cleanvalue2 = false;
	if($strSearchOption == "Between")
	{
		$cleanvalue2 = prepare_for_db($strField,$SearchFor2,$etype);
		$value2 = make_db_value($strField,$SearchFor2,$etype);
	}
		
	if($strSearchOption!="Contains" && $strSearchOption!="Starts with" && ($value1==="null" || $value2==="null" )
		&& !$cipherer->isFieldPHPEncrypted($strField))
		return "";
	
	if(IsCharType($type) && !$btexttype)
	{
		if(!$cipherer->isFieldPHPEncrypted($strField))
		{
			$value1 = $pSet->isEnableUpper($value1);
			$value2 = $pSet->isEnableUpper($value2);
			$gstrField = $pSet->isEnableUpper(GetFullFieldName($strField, "", false));
		}
		else
			$gstrField = GetFullFieldName($strField, "", false);
	}
	elseif($strSearchOption=="Contains" || $strSearchOption=="Starts with")
	{
		$gstrField = db_field2char(GetFullFieldName($strField, "", false),$type);
	}
	elseif($pSet->getViewFormat($strField)==FORMAT_TIME)
	{
		$gstrField = db_field2time(GetFullFieldName($strField, "", false),$type);
	}
	else 
	{
		$gstrField = GetFullFieldName($strField, "", false);
	}

	$ret="";
	
	if($strSearchOption=="Contains")
	{
		if ($isMysql)
		{
			$SearchFor = str_replace('\\\\', '\\\\\\\\', $SearchFor);
		}
		if($cipherer->isFieldPHPEncrypted($strField))
			return $gstrField."=".$cipherer->MakeDBValue($strField, $SearchFor);
		
		if(IsCharType($type) && !$btexttype)
			return $gstrField." ".$like." ".$pSet->isEnableUpper(db_prepare_string("%".$SearchFor."%"));
		else
			return $gstrField." ".$like." ".db_prepare_string("%".$SearchFor."%");
	}
	else if($strSearchOption=="Equals") 
	{
		return $gstrField."=".$value1;
	}
	else if($strSearchOption=="Starts with")
	{
		if ($isMysql)
		{
			$SearchFor = str_replace('\\\\', '\\\\\\\\', $SearchFor);
		}
		if(IsCharType($type) && !$btexttype)
			return $gstrField." ".$like." ".$pSet->isEnableUpper(db_prepare_string($SearchFor."%"));
		else
			return $gstrField." ".$like." ".db_prepare_string($SearchFor."%");
	}
	else if($strSearchOption=="More than") return $gstrField.">".$value1;
	else if($strSearchOption=="Less than") return $gstrField."<".$value1;
	else if($strSearchOption=="Equal or more than") return $gstrField.">=".$value1;
	else if($strSearchOption=="Equal or less than") return $gstrField."<=".$value1;
	else if($strSearchOption=="Between")
	{
		$ret=$gstrField.">=".$value1." and ";
		if (IsDateFieldType($type))
		{
			$timeArr = db2time($cleanvalue2);
			// for dates without time, add one day
			if ($timeArr[3]==0 && $timeArr[4]==0 && $timeArr[5]==0)
			{
				$timeArr = adddays($timeArr, 1);
				$value2 = $timeArr[0]."-".$timeArr[1]."-".$timeArr[2];
				$value2 = add_db_quotes($strField, $value2, $strTableName);
				$ret .= $gstrField."<".$value2;
			}
			else
			{
				$ret.=$gstrField."<=".$value2;
			}
		}
		else 
		{
			$ret.=$gstrField."<=".$value2;
		}
		return $ret;
	}
	return "";
}

/**
 * 	get count of rows from the query
 * @intellisense
 */
function GetRowCount($strSQL)
{
	global $conn;
	$strSQL=str_replace(array("\r\n","\n","\t")," ",$strSQL);
	$tstr = strtoupper($strSQL);
	$ind1 = strpos($tstr,"SELECT ");
	$ind2 = my_strrpos($tstr," FROM ");
	$ind3 = my_strrpos($tstr," GROUP BY ");
	if($ind3===false)
	{
		$ind3 = strpos($tstr," ORDER BY ");
		if($ind3===false)
			$ind3=strlen($strSQL);
	}
	$countstr=substr($strSQL,0,$ind1+6)." count(*) ".substr($strSQL,$ind2+1,$ind3-$ind2);
	$countrs = db_query($countstr,$conn);
	$countdata = db_fetch_numarray($countrs);
	return $countdata[0];
}

/**
 * 	add MSSQL Server TOP clause
 * @intellisense
 */
function AddTop($strSQL, $n)
{
	$tstr = strtoupper($strSQL);
	$ind1 = strpos($tstr,"SELECT");
	return substr($strSQL,0,$ind1+6)." top ".$n." ".substr($strSQL,$ind1+6);
}
/**
 * 	add DB2 Server TOP clause
 * @intellisense
 */
function AddTopDB2($strSQL, $n)
{
	
	return $strSQL." fetch first ".$n." rows only";
}
/**
 * @intellisense
 */
function AddTopIfx($strSQL,$n)
{
	return substr($strSQL,0,7)."limit ".$n." ".substr($strSQL,7);
}
/**
 * 	add Oracle ROWNUMBER checking
 * @intellisense
 */
function AddRowNumber($strSQL, $n)
{
	return "select * from (".$strSQL.") where rownum<".($n+1);
}

/**
 * Apply recornd limit to an SQL-query
 * @param String sql
 * @param Number N
 * @return String
 */
function db_applyrecordLimit($sql, $N) 
{
	return $sql." LIMIT ".$N;
}

/**
 *  test database type if values need to be quoted
 * @intellisense
 */
function NeedQuotesNumeric($type)
{
    if($type == 203 || $type == 8 || $type == 129 || $type == 130 || $type==6 || 
		$type == 7 || $type == 133 || $type == 134 || $type == 135 ||
		$type == 201 || $type == 205 || $type == 200 || $type == 202 || $type==72 || $type==13)
		return true;
	else
		return false;
}

//	using ADO DataTypeEnum constants
//	the full list available at:
//	http://msdn.microsoft.com/library/default.asp?url=/library/en-us/ado270/htm/mdcstdatatypeenum.asp

/**
 * @intellisense
 */
function IsNumberType($type)
{
	if($type==20 || $type==14 || $type==5 || $type==10 
	|| $type==3 || $type==131 || $type==4 || $type==2 || $type==16
	|| $type==21 || $type==19 || $type==18 || $type==17 || $type==139
	|| $type==11)
		return true;
	return false;
}

/**
 * @intellisense
 */
function IsFloatType($type)
{
	if($type==14 || $type==5 || $type==131 || $type==4 || $type==6)
		return true;
	return false;
}


/**
 * @intellisense
 */
function NeedQuotes($type)
{
	return !IsNumberType($type);
}

/**
 * @intellisense
 */
function IsBinaryType($type)
{
	if($type==128 || $type==205 || $type==204)
		return true;
	return false;
}

/**
 * date and datetime
 * @intellisense
 */
function IsDateFieldType($type)
{
	if($type==7 || $type==133 || $type==135)
		return true;
	return false;
}

/**
 * only datetime
 * @intellisense
 */
function IsDateTimeFieldType($type)
{
	if($type==135)
		return true;
	return false;
}

/**
 * @intellisense
 */
function IsTimeType($type)
{
	if($type==134)
		return true;
	return false;
}

/**
 * @intellisense
 */
function IsCharType($type)	
{
	if(IsTextType($type) || $type==8 || $type==129 || $type==200 || $type==202 ||  $type==130)
		return true;
	return false;
}

/**
 * @intellisense
 */
function IsTextType($type)
{
	if($type==201 || $type==203)
		return true;
	return false;
}

/**
 * @intellisense
 */
function IsGuid($type)
{
	if($type==72)
		return true;
	return false;
}

function IsBigInt($type)
{
	if($type==20)
		return true;
	return false;
}

////////////////////////////////////////////////////////////////////////////////
// security functions
////////////////////////////////////////////////////////////////////////////////
/**
 * @intellisense
 */
function ReadUserPermissions($userID="")
{
	global $conn,$gPermissionsRead, $gPermissionsRefreshTime, $caseInsensitiveUsername, $PageObject;
	
	if (!strlen($userID))
		$userID=$_SESSION["UserID"];
	$needreload=false;
	if(!array_key_exists("UserRights",$_SESSION))
		$needreload=true;
	elseif(!array_key_exists($userID,$_SESSION["UserRights"]))
		$needreload=true;
	if(!$needreload && ($gPermissionsRead || time()-@$_SESSION["LastReadRights"]<=$gPermissionsRefreshTime))
		return;	
	$groups=array();
	$bIsAdmin=false;
	if($userID!="Guest")
	{
		if(!$caseInsensitiveUsername)
			$sql = "select `GroupID`, `UserName` from `tbs_ugmembers` where `UserName`=".db_prepare_string($userID);
		else
			$sql = "select `GroupID`, `UserName` from `tbs_ugmembers` where `UserName`=".strtoupper(db_prepare_string($userID));
		$rs = db_query($sql,$conn);
		while($data=db_fetch_numarray($rs))
		{
			if ($caseInsensitiveUsername || strcmp($data[1],$userID) == 0)
				$groups[] = $data[0];
		}
		
		if(!count($groups))
			$groups[]=-2;
	}
	else
		$groups[]=-3;
	
	$groupstr="";
	foreach($groups as $g)
	{
		if($groupstr!="")
			$groupstr.=",";
		$groupstr.=$g;
		if($g==-1)
			$bIsAdmin=true;
	}
	$rights=array();
	$sql = "select `TableName`,`AccessMask` from `tbs_ugrights` where `GroupID` in (".$groupstr.")";
	$rs = db_query($sql,$conn);
	while($data=db_fetch_numarray($rs))
	{
		if(!array_key_exists($data[0],$rights))
		{
			$rights[$data[0]]=$data[1];
			continue;
		}
		for($i=0;$i<strlen($data[1]);$i++)
		{
			if(strpos($rights[$data[0]],substr($data[1],$i,1))===false)
				$rights[$data[0]].=substr($data[1],$i,1);
		}
	} 
	if(!array_key_exists("UserRights",$_SESSION))
		$_SESSION["UserRights"]=array();
	if($bIsAdmin)
		$rights[".IsAdmin"]=true;
	$rights[".Groups"]=$groups;
	$_SESSION["UserRights"][$userID]=&$rights;
	$_SESSION["LastReadRights"]=time();
	
	$gPermissionsRead=true;
}

/**
 * @intellisense
 */
function guestHasPermissions() 
{	
	ReadUserPermissions("Guest");
	if(!count($_SESSION["UserRights"]["Guest"]))
		return false;
	if(array_key_exists("customer",$_SESSION["UserRights"]["Guest"]))
		return true;
	if(array_key_exists("customerwaste",$_SESSION["UserRights"]["Guest"]))
		return true;
	if(array_key_exists("customerwastebyday",$_SESSION["UserRights"]["Guest"]))
		return true;
	if(array_key_exists("customerwastebymonth",$_SESSION["UserRights"]["Guest"]))
		return true;
	if(array_key_exists("customerwastebyweek",$_SESSION["UserRights"]["Guest"]))
		return true;
	if(array_key_exists("customerwastebyyear",$_SESSION["UserRights"]["Guest"]))
		return true;
	if(array_key_exists("waste",$_SESSION["UserRights"]["Guest"]))
		return true;
	if(array_key_exists("user",$_SESSION["UserRights"]["Guest"]))
		return true;
	if(array_key_exists("admin_rights",$_SESSION["UserRights"]["Guest"]))
		return true;
	if(array_key_exists("admin_members",$_SESSION["UserRights"]["Guest"]))
		return true;
	if(array_key_exists("admin_users",$_SESSION["UserRights"]["Guest"]))
		return true;
	if(array_key_exists("RegisterPage_customer",$_SESSION["UserRights"]["Guest"]))
		return true;
	return false;
}

/**
 * @intellisense
 */
function GetUserPermissionsDynamic($table="")
{
	global $strTableName,$gPermissionsRefreshTime,$gPermissionsRead;
	if(!$table)
		$table=$strTableName;
		
	ReadUserPermissions();
	if(IsAdmin())
	{
		if($table=="admin_rights")
			return "ADESPIM";
		if($table=="admin_members")
			return "ADESPIM";
		if($table=="admin_users")
			return "ADESPIM";
	}

	return @$_SESSION["UserRights"][$_SESSION["UserID"]][$table];
}

// end of the bCreateLoginPage block


/**
 * Check if the current user is admin user
 * @return Boolean
 * @intellisense
 */
function IsAdmin()
{
	global $gPermissionsRefreshTime, $gPermissionsRead;
	ReadUserPermissions();
	return array_key_exists(".IsAdmin", @$_SESSION["UserRights"][ $_SESSION["UserID"] ]);		
}

/**
 * Returns user permissions for a particular table
 *	A - Add
 *	D - Delete
 *	E - Edit
 *	S - List/View/Search
 *	P - Print/Expor
 * @param String table
 * @return String
 * @intellisense
 */
function GetUserPermissions($table="")
{
	global $strTableName, $globalEvents;
	if(!$table)
		$table = $strTableName;
	$permissions = "";
	$permissions =  GetUserPermissionsDynamic($table);
	
	if($globalEvents->exists("GetTablePermissions", $table))
	{
		$permissions = $globalEvents->GetTablePermissions($permissions, $table);
	}
	return $permissions;
}

/**
 * @intellisense
 */
function isLogged()
{
	if (@$_SESSION["UserID"])
		return true;
	return false;
}


/**
 * Set session variables and permissions after login via Facebook
 * @intellisense
 */
function AfterFBLogIn($pUsername, $pPassword)
{
	global $conn, $cUserNameFieldType, $cPasswordFieldType, $cUserNameField, $cDisplayNameField, $globalEvents;
	$logged = false;
	$strUsername = (string)$pUsername;
	$sUsername = $strUsername;
		
	if(NeedQuotes($cUserNameFieldType))
		$strUsername = db_prepare_string($strUsername);
	else
		$strUsername = (0+$strUsername);
		
	$strSQL = "select * from ".AddTableWrappers("user")." where ".AddFieldWrappers($cUserNameField)."=".$strUsername."";
	$rs = db_query($strSQL,$conn);
 	$data = db_fetch_array($rs);
	if($data)
	{
		$logged=true;
		$pDisplayUsername = $data[$cDisplayNameField]!='' ? $data[$cDisplayNameField] : $sUsername;
		DoLogin(false, $pUsername, $pDisplayUsername, "", ACCESS_LEVEL_USER, $pPassword);
		SetAuthSessionData($pUsername, $data, true, $pPassword);
	}
}

/**
 * SetAuthSessionData
 * Add to session auth data and permissions
 * @param {string} user identifier
 * @param {string} user display name
 * @param {object} fetched row from DB with user data
 * @intellisense
 */

function SetAuthSessionData($pUsername, &$data, $fromFacebook, $password)
{
	global $globalEvents;
	$_SESSION["GroupID"] = $data["Username"];


		$_SESSION["OwnerID"] = $data["CustomerId"];
	$_SESSION["_customer_OwnerID"] = $data["CustomerId"];
		$_SESSION["_customerwaste_OwnerID"] = $data["CustomerId"];
		$_SESSION["_customerwastebyday_OwnerID"] = $data["CustomerId"];
		$_SESSION["_customerwastebymonth_OwnerID"] = $data["CustomerId"];
		$_SESSION["_customerwastebyweek_OwnerID"] = $data["CustomerId"];
		$_SESSION["_customerwastebyyear_OwnerID"] = $data["CustomerId"];
		$_SESSION["_waste_OwnerID"] = $data["Id"];
		$_SESSION["_user_OwnerID"] = $data["Id"];
		$_SESSION["_admin_members_OwnerID"] = $data["Id"];
		$_SESSION["_admin_users_OwnerID"] = $data["Id"];
	if($globalEvents->exists("AfterSuccessfulLogin"))
	{
		$globalEvents->AfterSuccessfulLogin($pUsername != "Guest" ? $pUsername : "", $password, $data);
	}	
}

/**
 * @intellisense
 */
function DoLogin($autoLogin = false, $userID = "Guest", $userName = "", $groupID = "<Guest>", $accessLevel = ACCESS_LEVEL_GUEST, $password = "")
{
	global $globalEvents;
	
	if($userID == "Guest" && $userName == "")
		$userName = "Guest";
	
	$_SESSION["UserID"] = $userID;
	$_SESSION["UserName"] = runner_htmlspecialchars( $userName );
	$_SESSION["GroupID"] = $groupID;
	$_SESSION["AccessLevel"] = $accessLevel;
	$auditObj = GetAuditObject();
	if($auditObj)
	{
		$auditObj->LogLogin($userID);
		$auditObj->LoginSuccessful();
	}
	if($autoLogin && $globalEvents->exists("AfterSuccessfulLogin"))
	{
		$dummy = array();
		$globalEvents->AfterSuccessfulLogin($userID != "Guest" ? $userID : "", $password, $dummy);
	}
}

/**
 * @intellisense
 */
function CheckSecurity($strValue, $strAction)
{

	global $cAdvSecurityMethod, $strTableName;
	$pSet = new ProjectSettings($strTableName);
	
	if($_SESSION["AccessLevel"]==ACCESS_LEVEL_ADMIN)
		return true;

	$strPerm = GetUserPermissions();
	if( strpos($strPerm, "M") === false )
	{
		if($strTableName=="customer")
		{
			
				if(!($pSet->getCaseSensitiveUsername((string)$_SESSION["_".$strTableName."_OwnerID"])===$pSet->getCaseSensitiveUsername((string)$strValue)))
				return false;
		}
		if($strTableName=="customerwaste")
		{
			
				if(!($pSet->getCaseSensitiveUsername((string)$_SESSION["_".$strTableName."_OwnerID"])===$pSet->getCaseSensitiveUsername((string)$strValue)))
				return false;
		}
		if($strTableName=="customerwastebyday")
		{
			
				if(!($pSet->getCaseSensitiveUsername((string)$_SESSION["_".$strTableName."_OwnerID"])===$pSet->getCaseSensitiveUsername((string)$strValue)))
				return false;
		}
		if($strTableName=="customerwastebymonth")
		{
			
				if(!($pSet->getCaseSensitiveUsername((string)$_SESSION["_".$strTableName."_OwnerID"])===$pSet->getCaseSensitiveUsername((string)$strValue)))
				return false;
		}
		if($strTableName=="customerwastebyweek")
		{
			
				if(!($pSet->getCaseSensitiveUsername((string)$_SESSION["_".$strTableName."_OwnerID"])===$pSet->getCaseSensitiveUsername((string)$strValue)))
				return false;
		}
		if($strTableName=="customerwastebyyear")
		{
			
				if(!($pSet->getCaseSensitiveUsername((string)$_SESSION["_".$strTableName."_OwnerID"])===$pSet->getCaseSensitiveUsername((string)$strValue)))
				return false;
		}
		if($strTableName=="user")
		{
			
				if(!($pSet->getCaseSensitiveUsername((string)$_SESSION["_".$strTableName."_OwnerID"])===$pSet->getCaseSensitiveUsername((string)$strValue)))
				return false;
		}
		if($strTableName=="admin_members")
		{
			
				if(!($pSet->getCaseSensitiveUsername((string)$_SESSION["_".$strTableName."_OwnerID"])===$pSet->getCaseSensitiveUsername((string)$strValue)))
				return false;
		}
		if($strTableName=="admin_users")
		{
			
				if(!($pSet->getCaseSensitiveUsername((string)$_SESSION["_".$strTableName."_OwnerID"])===$pSet->getCaseSensitiveUsername((string)$strValue)))
				return false;
		}
	}
	//	 check user group permissions
	$localAction = strtolower($strAction);
	if($localAction=="add" && !(strpos($strPerm, "A")===false) ||
	   $localAction=="edit" && !(strpos($strPerm, "E")===false) ||
	   $localAction=="delete" && !(strpos($strPerm, "D")===false) ||
	   $localAction=="search" && !(strpos($strPerm, "S")===false) ||
	   $localAction=="import" && !(strpos($strPerm, "I")===false) ||
	   $localAction=="export" && !(strpos($strPerm, "P")===false) )
		return true;
	else
		return false;
	return true;
}

/**
 * @intellisense
 */
function CheckTablePermissions($strTableName, $permission)
{
	if( strpos(GetUserPermissions($strTableName), $permission) === false )
		return false;
	
	return true;
}

function pagetypeToPermissions($pageType)
{
	global $_pagetypeToPermissions_dict;
	
	if(!$_pagetypeToPermissions_dict)
	{
		$_pagetypeToPermissions_dict = array();
		$_pagetypeToPermissions_dict["list"] = "S";
		$_pagetypeToPermissions_dict["search"] = "S";
		$_pagetypeToPermissions_dict["view"] = "S";
		$_pagetypeToPermissions_dict["add"] = "A";
		$_pagetypeToPermissions_dict["edit"] = "E";
		$_pagetypeToPermissions_dict["print"] = "P";
		$_pagetypeToPermissions_dict["export"] = "P";
		$_pagetypeToPermissions_dict["import"] = "I";
	}
	
	return $_pagetypeToPermissions_dict[$pageType];
}

/**
 * Add security WHERE clause to SELECT SQL command
 * @intellisense
 */
function SecuritySQL($strAction, $table="", $strPerm="")
{
	global $cAdvSecurityMethod,$strTableName;
	
	if (!strlen($table))	
		$table = $strTableName;
	
	$pSet = new ProjectSettings($table);
	
   	$ownerid=@$_SESSION["_".$table."_OwnerID"];
	$ret="";
	if(@$_SESSION["AccessLevel"]==ACCESS_LEVEL_ADMIN)
		return "";
		
	$ret="";
	if(!strlen($strPerm))
		$strPerm = GetUserPermissions($table);

	if(strpos($strPerm,"M")===false)
	{
		if($table=="customer")
		{
				$ret=GetFullFieldName($pSet->getTableOwnerID(), $table, false)."=".make_db_value($pSet->getTableOwnerID(),$ownerid, "", "", $table);
		}
		if($table=="customerwaste")
		{
				$ret=GetFullFieldName($pSet->getTableOwnerID(), $table, false)."=".make_db_value($pSet->getTableOwnerID(),$ownerid, "", "", $table);
		}
		if($table=="customerwastebyday")
		{
				$ret=GetFullFieldName($pSet->getTableOwnerID(), $table, false)."=".make_db_value($pSet->getTableOwnerID(),$ownerid, "", "", $table);
		}
		if($table=="customerwastebymonth")
		{
				$ret=GetFullFieldName($pSet->getTableOwnerID(), $table, false)."=".make_db_value($pSet->getTableOwnerID(),$ownerid, "", "", $table);
		}
		if($table=="customerwastebyweek")
		{
				$ret=GetFullFieldName($pSet->getTableOwnerID(), $table, false)."=".make_db_value($pSet->getTableOwnerID(),$ownerid, "", "", $table);
		}
		if($table=="customerwastebyyear")
		{
				$ret=GetFullFieldName($pSet->getTableOwnerID(), $table, false)."=".make_db_value($pSet->getTableOwnerID(),$ownerid, "", "", $table);
		}
		if($table=="user")
		{
				$ret=GetFullFieldName($pSet->getTableOwnerID(), $table, false)."=".make_db_value($pSet->getTableOwnerID(),$ownerid, "", "", $table);
		}
		if($table=="admin_members")
		{
				$ret=GetFullFieldName($pSet->getTableOwnerID(), $table, false)."=".make_db_value($pSet->getTableOwnerID(),$ownerid, "", "", $table);
		}
		if($table=="admin_users")
		{
				$ret=GetFullFieldName($pSet->getTableOwnerID(), $table, false)."=".make_db_value($pSet->getTableOwnerID(),$ownerid, "", "", $table);
		}
	}
	
	if($strAction=="Edit" && !(strpos($strPerm, "E")===false) ||
	   $strAction=="Delete" && !(strpos($strPerm, "D")===false) ||
	   $strAction=="Search" && !(strpos($strPerm, "S")===false) ||
	   $strAction=="Export" && !(strpos($strPerm, "P")===false) )
		return $ret;
	else
		return "1=0";
	return "";
}


////////////////////////////////////////////////////////////////////////////////
// editing functions
////////////////////////////////////////////////////////////////////////////////
/**
 * @intellisense
 */
function make_db_value($field,$value,$controltype="",$postfilename="",$table="")
{	
	$ret=prepare_for_db($field,$value,$controltype,$postfilename,$table);
	
	if($ret===false)
		return $ret;
	return add_db_quotes($field,$ret,$table);
}

/**
 * @intellisense
 */
function add_db_quotes($field, $value, $table = "", $type = null)
{
	global $strTableName, $locale_info;
	if($table=="")
		$table=$strTableName;
	$pSet = new ProjectSettings($table);
	
	if($type == null)
		$type = $pSet->getFieldType($field);
	if(IsBinaryType($type))
		return db_addslashesbinary($value);
	if(($value==="" || $value===FALSE || is_null($value)) && !IsCharType($type))
		return "null";
	if(NeedQuotes($type))
	{
		if(!IsDateFieldType($type))
			$value=db_prepare_string($value);
		else
		{
			$y = "(\d\d\d\d)";
			$m = "(0?[1-9]|1[0-2])";
			$d = "(0?[1-9]|[1-2][0-9]|3[0-1])";
			$delim = "(-|".preg_quote($locale_info["LOCALE_SDATE"], "/").")";
			$reg = "/".$d.$delim.$m.$delim.$y."|".$m.$delim.$d.$delim.$y."|".$y.$delim.$m.$delim.$d."/";
			if( !preg_match($reg, $value, $matches) )
				return "null";

			$value=db_datequotes($value);
		}
	}
	else
	{
		$strvalue = (string)$value;
		if(is_numeric($strvalue))
			$value = str_replace(",",".",$strvalue);
		else
			$value=0;
	}
	return $value;
}

/**
 * @intellisense
 */
function prepare_for_db($field, $value, $controltype = "", $postfilename = "", $table = "")
{
	global $strTableName;
	if($table == "")
		$table = $strTableName;
	$pSet = new ProjectSettings($table);
	$filename = "";
	$type = $pSet->getFieldType($field);
	if((!$controltype || $controltype == "multiselect") && !IsTimeType($type))
	{
		if(is_array($value))
			$value = combinevalues($value);
		if(($value === "" || $value === FALSE) && !IsCharType($type))
			return "";
		if(IsGuid($type))
		{
			if(!IsGuidString($value))
				return "";
		}
		
		if( IsFloatType($type) )
			return makeFloat($value);
		
		if( IsNumberType($type) && !is_int($value) )
		{
			$value = trim($value);
			if( !is_numeric( str_replace(",", ".", $value) ) )
				$value = "";
		}
		return $value;
	}	
	else if($controltype == "time" || IsTimeType($type))
	{
		if(!strlen($value))
			return "";
		$time = localtime2db($value);
		if(IsDateFieldType($pSet->getFieldType($field)))
		{
			$time = "2000-01-01 ".$time;
		}
		return $time;
	}
	else if(substr($controltype, 0, 4) == "date")
	{
		$dformat = substr($controltype, 4);
		if($dformat == EDIT_DATE_SIMPLE || $dformat == EDIT_DATE_SIMPLE_INLINE || $dformat == EDIT_DATE_SIMPLE_DP)
		{
			$time = localdatetime2db($value);
			if($time == "null")
				return "";
			return $time;
		}
		else if($dformat == EDIT_DATE_DD || $dformat == EDIT_DATE_DD_INLINE || $dformat == EDIT_DATE_DD_DP)
		{
			$a = explode("-",$value);
			if(count($a) < 3)
				return "";
			else
			{
				$y = $a[0];
				$m = $a[1];
				$d = $a[2];
			}
			if($y < 100)
			{
				if($y < 70)
					$y += 2000;
				else
					$y += 1900;
			}
			return mysprintf("%04d-%02d-%02d",array($y,$m,$d));
		}
		else
			return "";
	}
	else if(substr($controltype, 0, 8) == "checkbox")
	{
		if($value == "on")
			$ret = 1;
		else if($value == "none")
			return "";
		else 
			$ret = 0;
		return $ret;
	}
	else
		return false;
}

/**
 * 	delete uploaded files when deleting the record
 * @intellisense
 */
function DeleteUploadedFiles($pSet, $deleted_values)
{
	global $conn;
	foreach($deleted_values as $field => $value)
	{
		if(($pSet->getEditFormat($field) == EDIT_FORMAT_FILE || $pSet->getPageTypeByFieldEditFormat($field, EDIT_FORMAT_FILE) != "") 
			&& $pSet->isDeleteAssociatedFile($field))
		{
			if(!strlen($value))
				return;
				
			$filesArray = my_json_decode($value);
			if(!is_array($filesArray) || count($filesArray) == 0)
			{
				$filesArray = array(array("name" => $pSet->getUploadFolder($field).$value));
				if($pSet->getCreateThumbnail($field))
					$filesArray[0]["thumbnail"] = $pSet->getUploadFolder($field).$pSet->getStrThumbnail($field).$value;
			}
		
			foreach($filesArray as $delFile)
			{
				$filename = $delFile["name"];
				$isAbs = $pSet->isAbsolute($field) || isAbsolutePath($filename);
				if(!$isAbs)
					$filename = getabspath($filename);
				runner_delete_file($filename);
				if($delFile["thumbnail"] != "")
				{
					$filename = $delFile["thumbnail"];
					if(!$isAbs)
						$filename = getabspath($filename);
					runner_delete_file($filename);
				}
			}
		}
	}
}

/**
 * 	combine checked values from multi-select list box
 * @intellisense
 */
function combinevalues($arr)
{
	$ret="";
	foreach($arr as $item)
	{
		$val = $item;
		if(strlen($ret))
			$ret.=",";
		if(strpos($val,",")===false && strpos($val,'"')===false)
			$ret.=$val;
		else
		{
			$val=str_replace('"','""',$val);
			$ret.='"'.$val.'"';
		}
	}
	return $ret;
}

/**
 * 	split values for multi-select list box
 * @intellisense
 */
function splitvalues($str)
{
	$arr=array();
	if($str=="")
	{
		$arr[] = "";
		return $arr;
	}
	$start=0;
	$i=0;
	$inquot=false;
	while($i<=strlen($str))
	{
		if($i<strlen($str) && substr($str,$i,1)=='"')
			$inquot=!$inquot;
		else if($i==strlen($str) || !$inquot && substr($str,$i,1)==',')
		{
			$val=substr($str,$start,$i-$start);
			$start=$i+1;
			if(strlen($val) && substr($val,0,1)=='"')
			{
				$val=substr($val,1,strlen($val)-2);
				$val=str_replace('""','"',$val);
			}
			
			if( $val !== FALSE )
				$arr[] = $val;
		}
		$i++;
	}
	return $arr;
}

/**
 * 
 */
function GetLookupFieldsIndexes($pSet, $field)
{
	$lookupTable = $pSet->getLookupTable($field);
	$lookupType = $pSet->getLookupType($field);
	$displayFieldName = $pSet->getDisplayField($field);
	$linkFieldName = $pSet->getLinkField($field);
	$linkAndDisplaySame = $linkFieldName == $displayFieldName;
	if($lookupType == LT_QUERY)
	{
		$lookupPSet = new ProjectSettings($lookupTable);
		$linkFieldIndex = $lookupPSet->getFieldIndex($linkFieldName) - 1;
		if($linkAndDisplaySame)
			$displayFieldIndex = $linkFieldIndex;
		else
		{
			if($pSet->getCustomDisplay($field))
				$displayFieldIndex = $lookupPSet->getCustomExpressionIndex($pSet->_table, $field);
			else
				$displayFieldIndex = $lookupPSet->getFieldIndex($displayFieldName) - 1;
		}
	}
	else 
	{
		$linkFieldIndex = 0;
		$displayFieldIndex = $linkAndDisplaySame ? 0 : 1;
	}
	return array("linkFieldIndex" => $linkFieldIndex, "displayFieldIndex" => $displayFieldIndex);
}

//////////////////////////////////////////////////////////////////////////////
/**
 * Get locale, am, pm for field edit as time
 * @param integer $convention - 24 or 12 hours format for timePicker
 * @param boolean $useTimePicker -  use timePicker or not
 * @return array
 * @intellisense
 */
function getLacaleAmPmForTimePicker($convention, $useTimePicker = false)
{
	$am = '';
	$pm = '';
	global $locale_info;
	if($useTimePicker)
	{
		$locale_convention = $locale_info["LOCALE_ITIME"] ? 24 : 12;
		if($convention == $locale_convention)
		{
			$am = $locale_info["LOCALE_S1159"];
			$pm = $locale_info["LOCALE_S2359"];
			$locale = $locale_info["LOCALE_STIMEFORMAT"];
		}
		else
		{
			if($convention == 24)
			{
				$am = '';
				$pm = '';
				$locale = "H:mm:ss";
			}
			else
			{
				$am = 'am';
				$pm = 'pm';
				$locale = "h:mm:ss tt";
			}
		}
	}
	else
		$locale = $locale_info["LOCALE_STIMEFORMAT"];
		
	return array('am'=>$am,'pm'=>$pm,'locale'=>$locale);	
}

/**
 * Get value for field edit as time and get dpTime settings
 * @param integer $convention - 24 or 12 hours format for timePicker
 * @param string $type - type of field
 * @param string $value - value of field
 * @param boolean $useTimePicker -  use timePicker or not
 * @return array
 * @intellisense
 */
function getValForTimePicker($type,$value,$locale)
{
	$val = "";
	$dbtime = array();
	if(IsDateFieldType($type))
	{
		$dbtime = db2time($value);
		if(count($dbtime))
			$val = format_datetime_custom($dbtime, $locale);
	}
	else 
	{
		$arr = parsenumbers($value);
		if(count($arr))
		{
			while(count($arr)<3)
				$arr[] = 0;
			$dbtime = array(0, 0, 0, $arr[0], $arr[1], $arr[2]);
			$val = format_datetime_custom($dbtime, $locale);
		}
	}
	
	return array('val'=>$val,'dbTime'=>$dbtime);
}


/**
 * @intellisense
 */
function my_stripos($str,$needle, $offest)
{
	if (strlen($needle)==0 || strlen($str)==0)
		return false;
	return strpos(strtolower($str),strtolower($needle), $offest);
} 

/**
 * @intellisense
 */
function my_str_ireplace($search, $replace,$str)
{
	$pos=my_stripos($str,$search,0);
	if($pos===false)
		return $str;
	return substr($str,0,$pos).$replace.substr($str,$pos+strlen($search));
} 


/**
 * @intellisense
 */
function in_assoc_array($name, $arr)
{
	foreach ($arr as $key => $value) 
	{
		if ($key==$name)
			return true;
	}
	return false;
}

/**
 * @intellisense
 */
function xmlencode($str)
{
	$str = str_replace("&","&amp;",$str);
	$str = str_replace("<","&lt;",$str);
	$str = str_replace(">","&gt;",$str);
	$str = str_replace("'","&apos;",$str);
	return escapeEntities($str);
}

/**
 * @intellisense
 */
function print_inline_array(&$arr,$printkey=false)
{
	if(!$printkey)
	{
		foreach ( $arr as $key=>$val )
			echo str_replace(array("&","<","\\","\r","\n"),array("&amp;","&lt;","\\\\","\\r","\\n"),str_replace(array("\\","\r","\n"),array("\\\\","\\r","\\n"),$val))."\\n";
	}
	else
	{
		foreach( $arr as $key=>$val )
			echo str_replace(array("&","<","\\","\r","\n"),array("&amp;","&lt;","\\\\","\\r","\\n"),str_replace(array("\\","\r","\n"),array("\\\\","\\r","\\n"),$key))."\\n";
	}
		
}

/**
 * @intellisense
 */
function checkpassword($pwd)
{
	$len = strlen($pwd);
	if($len < 8)
		return false;
	$cUnique = array();
	$cLower = $cUpper = $cDigit = 0;
	for($i=0; $i<$len; $i++)
	{
		$c = substr($pwd, $i, 1);
		if($c >= 'a' && $c <= 'z')
			$cLower++;
		else if($c >= 'A' && $c<= 'Z')
			$cUpper++;
		else
			$cDigit++;
			
		$cUnique[$c] = 1;
	}
	if(count($cUnique)<4)
		return false;
	if($cDigit<2)
		return false;
	return true;
}

/**
 * @intellisense
 */
function GetChartXML($chartname)
{
	$strTableName = GetTableByShort($chartname);	
	$settings = new ProjectSettings($strTableName);
	return $settings->getChartXml();
}


/**
 * @intellisense
 */
function GetSiteUrl()
{
	$url = "http://".$_SERVER["SERVER_NAME"];
	if($_SERVER["SERVER_PORT"]!=80)
	{
		if ($_SERVER["SERVER_PORT"]==443)
		   $url = "https://".$_SERVER["SERVER_NAME"];
		else
		   $url.=":".$_SERVER["SERVER_PORT"];
	}
	return $url;
}

/**
 * @intellisense
 */
function GetAuditObject($table="")
{
	return NULL;
	
	$linkAudit = false;
	if(!$table)
	{
		$linkAudit = true;
	}
	else
	{
		$settings = new ProjectSettings($table);
		$linkAudit = $settings->auditEnabled();
	}
	if ($linkAudit)
	{	
		require_once(getabspath("include/audit.php"));
	}
	else
	{
		return NULL;
	}
}

/**
 * @intellisense
 */
function GetLockingObject($table="")
{

	if(!$table)
	{
		global $strTableName;
		$table = $strTableName;
	}
	$settings = new ProjectSettings($table);
	if ($settings->lockingEnabled())
	{	
		require_once(getabspath("include/locking.php"));
		return new oLocking();
	}
	else
	{
		return NULL;
	}
}

/**
 * @intellisense
 */
function isEnableSection508()
{
	return GetGlobalData("isSection508",false);
}

/**
 * @intellisense
 */
function isEncryptionEnabled()
{
	return GetGlobalData("isUseEncryption", ENCRYPTION_NONE) == ENCRYPTION_PHP 
		|| GetGlobalData("isUseEncryption", ENCRYPTION_NONE) == ENCRYPTION_DB;
}

/**
 * @intellisense
 */
function isEncryptionByPHPEnabled()
{
	return GetGlobalData("isUseEncryption", ENCRYPTION_NONE) == ENCRYPTION_PHP;
}

/**
 * Returns validation type which defined in js validation object.
 * Use this function, because runner constants has another names of validation functions
 *
 * @param string $name
 * @return string
  * @intellisense
 */
function getJsValidatorName($name) 
{	
	switch ($name) 
	{
		case "Number":
			return "IsNumeric";
			break;
		case "Password":
			return "IsPassword";
			break;
		case "Email":
			return "IsEmail";
			break;
		case "Currency":
			return "IsMoney";
			break;
		case "US ZIP Code":
			return "IsZipCode";
			break;
		case "US Phone Number":
			return "IsPhoneNumber";
			break;
		case "US State":
			return "IsState";
			break;
		case "US SSN":
			return "IsSSN";
			break;
		case "Credit Card":
			return "IsCC";
			break;
		case "Time":
			return "IsTime";
			break;
		case "Regular expression":
			return "RegExp";
			break;						
		default:
			return $name;
			break;
	}
}

/**
 * @intellisense
 */
function GetInputElementId($field, $id, $ptype)
{
	global $strTableName;
	$pSet = new ProjectSettings($strTableName, $ptype);
	$format = $pSet->getEditFormat($field);
	if($format == EDIT_FORMAT_DATE)
	{
		$type = $pSet->getDateEditType($field);
		if($type==EDIT_DATE_DD || $type==EDIT_DATE_DD_DP)
			return "dayvalue_".GoodFieldName($field)."_".$id;
		else
			return "value_".GoodFieldName($field)."_".$id;
	}
	else if($format==EDIT_FORMAT_RADIO)
		return "radio_".GoodFieldName($field)."_".$id."_0";
	else if($format==EDIT_FORMAT_LOOKUP_WIZARD)	
	{
		$lookuptype=$pSet->lookupControlType($field);
		if($lookuptype==LCT_AJAX || $lookuptype==LCT_LIST)
			return "display_value_".GoodFieldName($field)."_".$id;
		else
			return "value_".GoodFieldName($field)."_".$id;
	}	
	else
		return "value_".GoodFieldName($field)."_".$id;		
}

/**
 * @intellisense
 */
function SetLangVars($xt, $prefix, $pageName = "", $extraparams = "")
{
	$xt->assign("lang_label",true);
	if(@$_REQUEST["language"])
		$_SESSION["language"]=@$_REQUEST["language"];

	if( $extraparams )
		$extraparams = $extraparams."&";

	$var=GoodFieldName(mlang_getcurrentlang())."_langattrs";
	$xt->assign($var,"selected");
	$is508=isEnableSection508();
	if($is508)
		$xt->assign_section("lang_label","<label for=\"lang\">","</label>");
	if($prefix.$pageName == "login")
		$xt->assign("langselector_attrs","name=lang ".($is508==true ? "id=\"lang\" " : "")."onchange=\"javascript: document.forms[0].btnSubmit.value='';document.forms[0].action = '".GetTableLink($prefix, $pageName)."?".$extraparams."language='+this.options[this.selectedIndex].value;document.forms[0].submit();\"");
	else
		$xt->assign("langselector_attrs","name=lang ".($is508==true ? "id=\"lang\" " : "")."onchange=\"javascript: window.location='".GetTableLink($prefix, $pageName)."?".$extraparams."language='+this.options[this.selectedIndex].value\"");
}

/**
 * @intellisense
 */
function GetTableCaption($table)
{
	global $tableCaptions;
	return @$tableCaptions[mlang_getcurrentlang()][$table];
}

/**
 * @intellisense
 */
function GetFieldByLabel($table, $label) 
{
	global $field_labels, $strTableName;
	if (!$table)
	{
		$table = $strTableName;
	}
	
	if(!array_key_exists($table,$field_labels))
		return "";
	$currLang = mlang_getcurrentlang();
	if(!array_key_exists($currLang,$field_labels[$table]))
		return "";	
	$lables = $field_labels[$table][mlang_getcurrentlang()];
	foreach ($lables as $key=>$val)
	{
		if ($val == $label)
		{
			return $key;
		}
	}
	return '';
}

/**
 * @intellisense
 */
function GetFieldLabel($table,$field)
{
	global $field_labels;
	if(!array_key_exists($table,$field_labels))
		return "";
	return @$field_labels[$table][mlang_getcurrentlang()][$field];
}


/**
 * @intellisense
 */
function GetFieldToolTip($table, $field)
{
	global $fieldToolTips;
	if(!array_key_exists($table, $fieldToolTips))
		return "";
	return @$fieldToolTips[$table][mlang_getcurrentlang()][$field];
}

/**
 * @intellisense
 */
function GetCustomLabel($custom)
{
	global $custom_labels;
	return @$custom_labels[mlang_getcurrentlang()][$custom];
}

/**
 * @intellisense
 */
function mlang_getcurrentlang()
{
	global $_currentLanguage, $mlang_messages,$mlang_defaultlang;
	if(@$_REQUEST["language"])
		$_SESSION["language"]=@$_REQUEST["language"];
	if(@$_SESSION["language"])
		return $_SESSION["language"];
	return $mlang_defaultlang;
}

function isRTL()
{
	global $mlang_charsets;
	$cp = strtolower($mlang_charsets[mlang_getcurrentlang()]);
	return ($cp == 'windows-1256' || $cp == 'windows-1255');
}


/**
 * @intellisense
 */
function mlang_getlanglist()
{
	global $mlang_messages,$mlang_defaultlang;
	return array_keys($mlang_messages);
}

/**
 * @intellisense
 */
function displayDetailsOn($table,$page)
{
	global $detailsTablesData;
	if(!isset($detailsTablesData[$table]) || !is_array($detailsTablesData[$table]))
		return false;
	if($page == PAGE_EDIT)
		$key="previewOnEdit";
	elseif($page == PAGE_ADD)
		$key="previewOnAdd";
	elseif($page == PAGE_VIEW)
		$key="previewOnView";
	else
		$key="previewOnList";
	for($i=0;$i<count($detailsTablesData[$table]);$i++)
	{
		if($detailsTablesData[$table][$i][$key])
			return true;
	}
	return false;
}

/**
 * @intellisense
 */
function showDetailTable($params)
{
	global $strTableName;
	$oldTableName = $strTableName;
	$strTableName = $params["table"];
	// show page
	if($params["dpObject"]->isDispGrid())
		$params["dpObject"]->showPage();	
	$strTableName = $oldTableName;
}


/**
 * update record on Edit page
 * @intellisense
 */
function DoUpdateRecordSQL($table,&$evalues,&$blobfields,$strWhereClause, $pageid, &$pageObject, &$cipherer)
{
	global $error_happened,$conn,$inlineedit,$message;
	if(!count($evalues))
		return true;
	$strSQL = "update ".AddTableWrappers($table)." set ";
	$blobs = PrepareBlobs($evalues,$blobfields);
	//	construct SQL string
	foreach($evalues as $ekey=>$value)
	{
		if(in_array($ekey,$blobfields))			
			$strValues=$value;
		else
			if(is_null($cipherer))
				$strValues = add_db_quotes($ekey,$value);
			else 
				$strValues = $cipherer->AddDBQuotes($ekey,$value);
		$strSQL.=$pageObject->pSet->getTableField($ekey)."=".$strValues.", ";
	}
	if(substr($strSQL,-2)==", ")
		$strSQL=substr($strSQL,0,strlen($strSQL)-2);
	if($strWhereClause === "")
	{
		$strWhereClause = " (1=1) ";
	}
	$strSQL.=" where ".$strWhereClause;
	if(SecuritySQL("Edit"))
		$strSQL .= " and (".SecuritySQL("Edit").")";

	if(!ExecuteUpdate($pageObject,$strSQL,$blobs,false))
		return false;

	//	delete & move files
	$pageObject->ProcessFiles();
	if ( $inlineedit ) 
	{
		$status="UPDATED";
		$message=""."Record updated"."";
		$IsSaved = true;
	} 
	else 
		$message="<<< "."Record updated"." >>>";
	return true;
}

/**
 * insert record on Add & Register pages
 * @intellisense
 */
function DoInsertRecordSQL($table,&$avalues,&$blobfields, $pageid, &$pageObject, &$cipherer, &$keys)
{
	global $error_happened,$conn,$inlineadd,$message,$failed_inline_add,$strTableName;
	//	make SQL string
	$strSQL = "insert into ".AddTableWrappers($table)." ";
	$strFields="(";
	$strValues="(";
	$blobs = PrepareBlobs($avalues,$blobfields);
	foreach($avalues as $akey=>$value)
	{
		$strFields .= $pageObject->pSet->getTableField($akey).", ";
		if(in_array($akey, $blobfields))			
			$strValues.=$value.", ";
		else
			if(is_null($cipherer))
				$strValues .= add_db_quotes($akey,$value).", ";
			else 
				$strValues .= $cipherer->AddDBQuotes($akey,$value).", ";
	}
	if(substr($strFields,-2)==", ")
		$strFields=substr($strFields,0,strlen($strFields)-2);
	if(substr($strValues,-2)==", ")
		$strValues=substr($strValues,0,strlen($strValues)-2);
	$strSQL.=$strFields.") values ".$strValues.")";
	
	if(!ExecuteUpdate($pageObject,$strSQL,$blobs,true))
		return false;
	
	if($error_happened)
		return false;
	$pageObject->ProcessFiles();
	if ( $inlineadd==ADD_INLINE ) 
	{
		$status="ADDED";
		$message=""."Record was added"."";
		$IsSaved = true;
	} 
	else
		$message="<<< "."Record was added"." >>>";

		
	$auditObj = GetAuditObject($table);
	
	if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP || $inlineadd==ADD_MASTER || tableEventExists("AfterAdd",$strTableName) || $auditObj)
	{
		$keys = prepareTableKeysAfterInsert($table, $avalues, $pageObject, $keys);
	}
	return true;
}

function prepareTableKeysAfterInsert($table, &$avalues, &$pageObject, $keys)
{
	global $conn, $failed_inline_add;
	$failed_inline_add = false;
	$keyfields=$pageObject->pSet->getTableKeys();
	foreach($keyfields as $k)
	{
		if(array_key_exists($k,$avalues))
			$keys[$k]=$avalues[$k];
		elseif($pageObject->pSet->isAutoincField($k))
		{
			$keys[$k]=GetMySQLLastInsertID();
		}
		else
			$failed_inline_add = true;
	}
	return $keys;
}

function &getEventObject($table)
{
	global $tableEvents;
	$ret = null;
	if(!array_key_exists($table,$tableEvents))
		return $ret;
	return $tableEvents[$table];
}

/**
 * @intellisense
 */
function tableEventExists($event,$table)
{
	global $tableEvents;
	if(!array_key_exists($table,$tableEvents))
		return false;
	return $tableEvents[$table]->exists($event);
}

/**
 * @intellisense
 */
function add_nocache_headers()
{
	header("Cache-Control: no-cache, no-store, max-age=0, must-revalidate");
	header("Pragma: no-cache");
	header("Expires: Fri, 01 Jan 1990 00:00:00 GMT");
}

/**
 * @intellisense
 */
function IsGuidString(&$str)
{
//	{3F2504E0-4F89-11D3-9A0C-0305E82C3301} 
	if(strlen($str)==36 && substr($str,0,1)!="{" && substr($str,-1)!="}")
		$str="{".$str."}";
	elseif(strlen($str)==37 && substr($str,0,1)=="{" && substr($str,-1)!="}")
		$str=$str."}";
	elseif(strlen($str)==37 && substr($str,0,1)!="{" && substr($str,-1)=="}")
		$str="{".$str;
		
	if(strlen($str)!=38)
		return false;
	for($i=0;$i<38;$i++)
	{
		$c = substr($str,$i,1);
		if($i==0)
		{
			if($c!='{')
				return false;
		}
		elseif($i==37 )
		{
			if($c!='}')
				return false;
		}
		elseif($i==9 || $i==14 || $i==19 || $i==24)
		{
			if($c!='-')
				return false;
		}
		else
		{
			if(($c<'0' || $c>'9') && ($c<'a' || $c>'f') && ($c<'A' || $c>'F'))
				return false;
		}
	}
	return true;
}

/**
 * @intellisense
 */
function IsStoredProcedure($strSQL)
{
	if(strlen($strSQL)>6)
	{
		$c=strtolower(substr($strSQL,6,1));
		if(strtolower(substr($strSQL,0,6))=="select" && ($c<'0' || $c>'9') && ($c<'a' || $c>'z') && $c!='_')
			return false;
		else
			return true;
	}
	else
		return true;
}

/**
 * @intellisense
 */
function GetDatabaseType()
{
	global $nDBType;
	return $nDBType;
}

/**
 * Checks whether an browser for mobile devices
 * Returns false - Browser stationary or it was not possible to determine
 * 1-4 - the browser is running on your mobile device
 * @return Mixed
 * @intellisense
 */
function MobileDetected() 
{
	$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
	$accept = strtolower($_SERVER['HTTP_ACCEPT']);
 
	if( strpos($accept,'text/vnd.wap.wml')!==false || strpos($accept,'application/vnd.wap.xhtml+xml')!==false ) 
		return 1; // Mobile browser detected by HTTP-headers
 
	if( isset($_SERVER['HTTP_X_WAP_PROFILE']) || isset($_SERVER['HTTP_PROFILE']) ) 
		return 2; // Mobile browser detected by server settings


	if(preg_match('/(ipad|android|symbianos|opera mini|ipod|blackberry|'.
		'palm os|palm|hiptop|avantgo|plucker|xiino|blazer|elaine|iris|3g_t|'.
		'windows ce|opera mobi|windows ce; smartphone;|windows ce; iemobile|'.
		'mini 9.5|vx1000|lge |m800|e860|u940|ux840|compal|'.
		'wireless| mobi|ahong|lg380|lgku|lgu900|lg210|lg47|lg920|lg840|'.
		'lg370|sam-r|mg50|s55|g83|t66|vx400|mk99|d615|d763|el370|sl900|'.
		'mp500|samu3|samu4|vx10|xda_|samu5|samu6|samu7|samu9|a615|b832|'.
		'm881|s920|n210|s700|c-810|_h797|mob-x|sk16d|848b|mowser|s580|'.
		'r800|471x|v120|rim8|c500foma:|160x|x160|480x|x640|t503|w839|'.
		'i250|sprint|w398samr810|m5252|c7100|mt126|x225|s5330|s820|'.
		'htil-g1|fly v71|s302|-x113|novarra|k610i|-three|8325rc|8352rc|'.
		'sanyo|vx54|c888|nx250|n120|mtk |c5588|s710|t880|c5005|i;458x|'.
		'p404i|s210|c5100|teleca|s940|c500|s590|foma|samsu|vx8|vx9|a1000|'.
		'_mms|myx|a700|gu1100|bc831|e300|ems100|me701|me702m-three|sd588|'.
		's800|8325rc|ac831|mw200|brew |d88|htc\/|htc_touch|355x|m50|km100|'.
		'd736|p-9521|telco|sl74|ktouch|m4u\/|me702|8325rc|kddi|phone|lg |'.
		'sonyericsson|samsung|240x|x320vx10|nokia|sony cmd|motorola|'.
		'up.browser|up.link|mmp|symbian|smartphone|midp|wap|vodafone|o2|'.
		'pocket|kindle|silk|hpwos|mobile|psp|treo)/', $user_agent)) 
	{
		return 3; // Mobile browser detected by User Agent signature
	}

	if(in_array(substr($user_agent,0,4),
		Array("1207", "3gso", "4thp", "501i", "502i", "503i", "504i", "505i", "506i",
			  "6310", "6590", "770s", "802s", "a wa", "abac", "acer", "acoo", "acs-",
			  "aiko", "airn", "alav", "alca", "alco", "amoi", "anex", "anny", "anyw",
			  "aptu", "arch", "argo", "aste", "asus", "attw", "au-m", "audi", "aur ",
			  "aus ", "avan", "beck", "bell", "benq", "bilb", "bird", "blac", "blaz",
			  "brew", "brvw", "bumb", "bw-n", "bw-u", "c55/", "capi", "ccwa", "cdm-",
			  "cell", "chtm", "cldc", "cmd-", "cond", "craw", "dait", "dall", "dang",
			  "dbte", "dc-s", "devi", "dica", "dmob", "doco", "dopo", "ds-d", "ds12",
			  "el49", "elai", "eml2", "emul", "eric", "erk0", "esl8", "ez40", "ez60",
			  "ez70", "ezos", "ezwa", "ezze", "fake", "fetc", "fly-", "fly_", "g-mo",
			  "g1 u", "g560", "gene", "gf-5", "go.w", "good", "grad", "grun", "haie",
			  "hcit", "hd-m", "hd-p", "hd-t", "hei-", "hiba", "hipt", "hita", "hp i",
			  "hpip", "hs-c", "htc ", "htc-", "htc_", "htca", "htcg", "htcp", "htcs",
			  "htct", "http", "huaw", "hutc", "i-20", "i-go", "i-ma", "i230", "iac",
			  "iac-", "iac/", "ibro", "idea", "ig01", "ikom", "im1k", "inno", "ipaq",
			  "iris", "jata", "java", "jbro", "jemu", "jigs", "kddi", "keji", "kgt",
			  "kgt/", "klon", "kpt ", "kwc-", "kyoc", "kyok", "leno", "lexi", "lg g",
			  "lg-a", "lg-b", "lg-c", "lg-d", "lg-f", "lg-g", "lg-k", "lg-l", "lg-m",
			  "lg-o", "lg-p", "lg-s", "lg-t", "lg-u", "lg-w", "lg/k", "lg/l", "lg/u",
			  "lg50", "lg54", "lge-", "lge/", "libw", "lynx", "m-cr", "m1-w", "m3ga",
			  "m50/", "mate", "maui", "maxo", "mc01", "mc21", "mcca", "medi", "merc",
			  "meri", "midp", "mio8", "mioa", "mits", "mmef", "mo01", "mo02", "mobi",
			  "mode", "modo", "mot ", "mot-", "moto", "motv", "mozz", "mt50", "mtp1",
			  "mtv ", "mwbp", "mywa", "n100", "n101", "n102", "n202", "n203", "n300",
			  "n302", "n500", "n502", "n505", "n700", "n701", "n710", "nec-", "nem-",
			  "neon", "netf", "newg", "newt", "nok6", "noki", "nzph", "o2 x", "o2-x",
			  "o2im", "opti", "opwv", "oran", "owg1", "p800", "palm", "pana", "pand",
			  "pant", "pdxg", "pg-1", "pg-2", "pg-3", "pg-6", "pg-8", "pg-c", "pg13",
			  "phil", "pire", "play", "pluc", "pn-2", "pock", "port", "pose", "prox",
			  "psio", "pt-g", "qa-a", "qc-2", "qc-3", "qc-5", "qc-7", "qc07", "qc12",
			  "qc21", "qc32", "qc60", "qci-", "qtek", "qwap", "r380", "r600", "raks",
			  "rim9", "rove", "rozo", "s55/", "sage", "sama", "samm", "sams", "sany",
			  "sava", "sc01", "sch-", "scoo", "scp-", "sdk/", "se47", "sec-", "sec0",
			  "sec1", "semc", "send", "seri", "sgh-", "shar", "sie-", "siem", "sk-0",
			  "sl45", "slid", "smal", "smar", "smb3", "smit", "smt5", "soft", "sony",
			  "sp01", "sph-", "spv ", "spv-", "sy01", "symb", "t-mo", "t218", "t250",
			  "t600", "t610", "t618", "tagt", "talk", "tcl-", "tdg-", "teli", "telm",
			  "tim-", "topl", "tosh", "treo", "ts70", "tsm-", "tsm3", "tsm5", "tx-9",
			  "up.b", "upg1", "upsi", "utst", "v400", "v750", "veri", "virg", "vite",
			  "vk-v", "vk40", "vk50", "vk52", "vk53", "vm40", "voda", "vulc", "vx52",
			  "vx53", "vx60", "vx61", "vx70", "vx80", "vx81", "vx83", "vx85", "vx98",
			  "w3c ", "w3c-", "wap-", "wapa", "wapi", "wapj", "wapm", "wapp", "wapr",
			  "waps", "wapt", "wapu", "wapv", "wapy", "webc", "whit", "wig ", "winc",
			  "winw", "wmlb", "wonu", "x700", "xda-", "xda2", "xdag", "yas-", "your",
			  "zeto", "zte-"))) 
	{
		return 4; // Mobile browser detected by User Agent signature
	}

	return false; // Mobile browser not found
} 

/**
 * Check if user is using IE 8
 * @intellisense
 */
function isIE8()
{
	$matches = "";
	preg_match('/MSIE (.*?);/', $_SERVER['HTTP_USER_AGENT'], $matches);
	return (count($matches)>1 && $matches[1]<=8);
}

/**
 * Check if the client application's part is run on a mobile device
 * @intellisense
 */
function isMobile()
{
	return false;
}

/**
 * Check if the client application's part is run on a mobile device
 * @return Boolean
 */ 
function detectMobileDevice()
{
	return false;
}

/**
 * GetPageLayout
 * Return reference to layout object by table name, page type and section (or tab) name
 * @param {string} tableName				the short table name (may be empty)
 * @param {string} pageType					the page's type
 * @param {string} suffixName (optional) 	It could contain a section/tab name or a pages layout's suffix (eg 'success')
 * @return {reference} 						a reference to the layout object
 */
function & GetPageLayout($tableName, $pageType, $suffixName = '')
{
	global $page_layouts, $bUseMobileStyleOnly;
	$layoutName = ($tableName != '' ? $tableName.'_' : '').$pageType.($suffixName != '' ? '_'.$suffixName : '');
	$layout = $page_layouts[$layoutName]; 
	if($layout)
	{
		if($bUseMobileStyleOnly && isMobile())
		{
			$layout->style = $layout->styleMobile;
		}
		else if(postvalue("pdf"))
		{
			$layout->style = $layout->pdfStyle();
		}
	}
	return $layout;
}

/**
 * @intellisense
 */
function extractStyle($str)
{
	$pos = my_stripos($str,'style="',0);
	$quot = '"';
	if($pos === false)
	{
		$pos = my_stripos($str,'style=\'',0);
		$quot = '\'';
	}
	if($pos === false)
		return;
	$pos1 = strpos($str,$quot, $pos+7);
	if($pos1 === false)
		return "";
	return substr($str, $pos+7, $pos1-$pos-7);
}

/**
 * @intellisense
 */
function injectStyle($str, $style)
{
	$pos = my_stripos($str,'style="',0);
	$quot = '"';
	if($pos === false)
	{
		$pos = my_stripos($str,'style=\'',0);
		$quot = '\'';
	}
	if($pos === false)
		return $str.' style="'.$style.'"';
	return substr($str,0, $pos+7).$style.";".substr($str, $pos+7);
}

/**
 * @intellisense
 */
function isSingleSign()
{
	if( GetGlobalData("ADSingleSign",0) && $_SERVER["REMOTE_USER"] )
		return false;
		
	return true;
}

/**
 * @intellisense
 */
function generatePassword($length)
{
	$password="";
	for($i=0;$i<$length;$i++)
	{
		$j = rand(0,35);
		if($j<26)
			$password.= chr(ord('a')+$j);
		else
			$password.= chr(ord('0')-26+$j);
	}
	return $password;
}

/**
 * @intellisense
 */
function securityCheckFileName($fileName)
{
	$maliciousStrings = array("../", "..\\");
	for($i = 0; $i < count($maliciousStrings); $i++)
	{
		while(strpos($fileName, $maliciousStrings[$i]) !== FALSE)
		{
			$fileName = str_replace($maliciousStrings, "", $fileName);
		}
	}
	return $fileName;
}

/**
 * @intellisense
 */
function getOptionsForMultiUpload($pSet, $field)
{
	if($pSet->isAbsolute($field))
		$uploadDir = $pSet->getUploadFolder($field);
	else
		$uploadDir = getabspath($pSet->getUploadFolder($field));
	$options = array(
		"max_file_size" => $pSet->getMaxFileSize($field),
		"max_totalFile_size" => $pSet->getMaxTotalFilesSize($field),
		"max_number_of_files" => $pSet->getMaxNumberOfFiles($field),
		"max_width" => $pSet->getMaxImageWidth($field),
		"max_height" => $pSet->getMaxImageHeight($field));
	if($pSet->getResizeOnUpload($field))
	{
		$options["resizeOnUpload"] = true;
		$options["max_width"] = $pSet->getNewImageSize($field);
		$options["max_height"] = $options["max_width"];
	}
	if($pSet->getCreateThumbnail($field))
	{
		$options['image_versions'] = array(
                'thumbnail' => array(
                    'max_width' => $pSet->getThumbnailSize($field),
                    'max_height' => $pSet->getThumbnailSize($field),
					'thumbnailPrefix' => $pSet->getStrThumbnail($field)
                ));
	}
    return $options;
}

/**
 * @intellisense
 */
function getContentTypeByExtension($ext)
{
	if($ext==".asf")
		$ctype = "video/x-ms-asf";
	elseif($ext==".avi")
		$ctype = "video/avi";
	elseif($ext==".doc")
		$ctype = "application/msword";
	elseif($ext==".zip")
		$ctype = "application/zip";
	elseif($ext==".xls")
		$ctype = "application/vnd.ms-excel";
	elseif($ext==".png")
		$ctype = "image/png";
	elseif($ext==".gif")
		$ctype = "image/gif";
	elseif($ext==".jpg" || $ext=="jpeg")
		$ctype = "image/jpeg";
	elseif($ext==".wav")
		$ctype = "audio/wav";
	elseif($ext==".mp3")
		$ctype = "audio/mpeg";
	elseif($ext==".mpg" || $ext=="mpeg")
		$ctype = "video/mpeg";
	elseif($ext==".rtf")
		$ctype = "application/rtf";
	elseif($ext==".htm" || $ext=="html")
		$ctype = "text/html";
	elseif($ext==".asp")
		$ctype = "text/asp";
	elseif($ext == ".flv")
		$ctype = "video/flv";
	elseif($ext == ".mp4")
		$ctype = "video/mp4";
	elseif($ext == ".webm")
		$ctype = "video/webm";
	else
		$ctype = "application/octet-stream";	
		
	return $ctype;
}

/**
 * @intellisense
 */
function getLatLngByAddr($addr) 
{
	$url = 'http://maps.googleapis.com/maps/api/geocode/json?address='.rawurlencode($addr).'&sensor=false';
	$result = my_json_decode(myurl_get_contents($url));
	if($result['status'] == 'OK') 
	{
		$location = $result['results'][0]['geometry']['location'];
		return $location;
	}
	return false;	
} 

/**
 * @intellisense
 */
function isLoggedAsGuest()
{
	if($_SESSION["UserID"] == "Guest" && $_SESSION["AccessLevel"] == ACCESS_LEVEL_GUEST)
		return true;
		
	return false;
}

/**
 * Check if the "Login as Guest" option is turned on 
 * @return Boolean
 */
function isGuestLoginAvailable()
{
	// if guest have any permissions
	if(guestHasPermissions())
		return true;		
	return false;
}

/**
 * @intellisense
 */
function Override($page)
{
	global $globalSettings;
	if(!isset($globalSettings["override"][$page]))
		return otNone;
	return $globalSettings["override"][$page];
}

/**
 * printDispositionHeader
 * Print disposition header for mfhandler.php 
 * @param {string} file name
 * @intellisense
 */
function printDispositionHeader($fileName)
{
	if(postvalue("nodisp") != 1)
		header("Content-Disposition: attachment;Filename=\"".$fileName."\"");
}

/**
 * printHeaders
 * Print HTTP headers for mfhandler.php
 * @intellisense
 */
function printHeaders()
{
	header('Content-Disposition: inline; filename="files.json"');
	header('X-Content-Type-Options: nosniff');
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: OPTIONS, HEAD, GET, POST');
	header('Access-Control-Allow-Headers: X-File-Name, X-File-Type, X-File-Size');
}

/**
 * @intellisense
 */
function GetFieldType($field,$table="")
{
	global $pageObject;
	if($table != "" || !isset($pageObject))
	{
		if($table == "")
		{
			global $strTableName;
			$table = $strTableName;
		}
		$newSet = new ProjectSettings($table);
		return $newSet->getFieldType($field);
	}
	else
		return $pageObject->pSet->getFieldType($field);
}

/**
 * @intellisense
 */
function Label($field,$table="")
{
	global $pageObject;
	if($table != "" || !isset($pageObject))
	{
		if($table == "")
		{
			global $strTableName;
			$table = $strTableName;
		}
		$newSet = new ProjectSettings($table);
		$result = $newSet->label($field); 
	}
	else
		$result = $pageObject->pSet->label($field);
	return $result != "" ? $result : $field;
}

/**
 * @intellisense
 */
function getIconByFileType($fileType, $sourceFileName)
{
	switch($fileType)
	{
		case "text/html":
			$fileName = "html.png";
			break;
		case "text/asp":
			$fileName = "code.png";
			break;
		case "application/msword":
		case "application/vnd.openxmlformats-officedocument.wordprocessingml.document":
			$fileName = "doc.png";
			break;
		case "application/vnd.ms-excel":
		case "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet":
			$fileName = "xls.png";
			break;
		case "application/rtf":
			$fileName = "rtf.png";
			break;
		case "image/png":
		case "image/x-png":
			$fileName = "png.png";
			break;
		case "image/gif":
			$fileName = "gif.png";
			break;
		case "image/jpeg":
		case "image/pjpeg":
			$fileName = "jpg.png";
			break;
		case "audio/wav":
			$fileName = "wma.png";
			break;
		case "audio/mp3":
		case "audio/mpeg3":
		case "audio/mpeg":
			$fileName = "mp2.png";
			break;
		case "video/mpeg":
			$fileName = "mpeg.png";
			break;
		case "video/flv":
			$fileName = "flv.png";
			break;
		case "video/mp4":
			$fileName = "mp4.png";
			break;
		case "video/x-ms-asf":
			$fileName = "asf.png";
			break;
		case "video/webm":
		case "video/x-webm":
		case "video/avi":
			$fileName = "mpg.png";
			break;
		case "application/zip":
		case "application/x-zip-compressed":
			$fileName = "zip.png";
			break;
		default:
			$fileName = "text.png";
			$dotPosition = strrpos($sourceFileName, '.');
			if($dotPosition !== false && $dotPosition < strlen($sourceFileName) - 1)
			{
				$ext = substr($sourceFileName, $dotPosition + 1);
				$icons = array();
	           	$icons['7z'] = '7z';
	        		$icons['asf'] = 'asf';
	        		$icons['asp'] = 'code';
	        		$icons['avi'] = 'mpg';
	        		$icons['chm'] = 'chm';
	        		$icons['doc'] = 'doc';
	        		$icons['docx'] = 'doc';
	        		$icons['flv'] = 'flv';
	        		$icons['gz'] = 'gz';
	        		$icons['html'] = 'html';
	        		$icons['mdb'] = 'mdb';
	        		$icons['mdbx'] = 'mdb';
	        		$icons['mp3'] = 'mp2';
	        		$icons['mp4'] = 'mp4';
	        		$icons['mpeg'] = 'mpeg';
	        		$icons['mpg'] = 'mpg';
	        		$icons['mov'] = 'mov';
	        		$icons['pdf'] = 'pdf';
	        		$icons['php'] = 'code';
	        		$icons['pps'] = 'pps';
	        		$icons['ppt'] = 'powerpoint';
	        		$icons['psd'] = 'psd';
	        		$icons['rar'] = 'rar';
	        		$icons['rtf'] = 'rtf';
	        		$icons['swf'] = 'swf';
	        		$icons['tif'] = 'tif';
	        		$icons['ttf'] = 'ttf';
	        		$icons['txt'] = 'txt';
	        		$icons['wav'] = 'wav';
	        		$icons['webm'] = 'mpg';
	        		$icons['wma'] = 'wma';
	        		$icons['wmv'] = 'emv';
	        		$icons['xls'] = 'xls';
	        		$icons['xlsx'] = 'xls';
	        		$icons['zip'] = 'zip';
				if(isset($icons[$ext]))
					$fileName = $icons[$ext].".png";
			}
	}
	return $fileName;
}

function isImageType($type)
{
	switch($type)
	{
		case "image/png":
		case "image/x-png":
		case "image/gif":
		case "image/jpeg":
		case "image/pjpeg":
			return true;
	}
	return false;
}

function initArray(&$array, $key)
{
	if(!isset($array[$key]))
	{
		$array[$key] = array();
	}
}

/**
 * Inserts imported record to database
 * @param $arr
 * @param $recInd
 * @param $error_message
 * @param $goodlines
 * @param $keys
 * @param $keys_present
 * @param $strOriginalTableName
 * @param $pageObject
 * @param $cipherer
 * @param $autoinc
 */
function InsertRecord($arr, $recInd, &$error_message, &$goodlines, $keys, 
	$keys_present, $strOriginalTableName, $pageObject, $cipherer, $autoinc)
{
	global $conn, $strTableName, $gSettings, $locale_info, $eventObj, $auditObj;
		
	$ret = 1;
	$rawvalues = array();
	$newValues = array();
	foreach($arr as $key=>$val)
    {
        $rawvalues[$key] = $val;
		$type= $gSettings->getFieldType($key);
		if(!NeedQuotes($type))
        {
            $value = (string)$val;
            $value = str_replace(",",".",$value);
			if(strlen($value)>0)
			{
				$value=str_replace($locale_info["LOCALE_SCURRENCY"],"",$value);
				$newValues[$key]=0+$value;
			}
			else
				$newValues[$key]=NULL;
        }
    }
	
	foreach($newValues as $key=>$val)
	{
		$arr[$key] = $newValues[$key];
	}
	
    $retval=true;
    if ($eventObj->exists('BeforeInsert'))
        $retval=$eventObj->BeforeInsert($rawvalues,$arr, $pageObject);
    
    if($retval)
    {
        $fields = array_keys($arr);
        $fields_list = array();
        
        foreach($fields as $key=>$val)
        {
            $fields_list[$key] = GetFullFieldNameForInsert($gSettings, $val);
        }
        
        $values_list="";
        foreach($arr as $key=>$val)
        {
            if(!is_null($arr[$key]))
                $values_list .= $cipherer->AddDBQuotes($key, $val).", ";
            else
                $values_list .= "NULL, ";
        }
        if(strlen($values_list)>0)
            $values_list=substr($values_list,0,strlen($values_list)-2);

            $sql = "insert into ".AddTableWrappers($strOriginalTableName)." (".implode(",", $fields_list).") values (".$values_list.")"; 

        if (db_exec_import($sql, $conn, AddTableWrappers($strOriginalTableName), $autoinc))
        {
            $goodlines++;
            
            if($auditObj)
            {
            	$aKeys = GetKeysArray($arr, $pageObject, true);
            	$auditObj->LogAdd($strTableName, $arr, $aKeys);
            }
        }
        else    
        {
            $temp_error_message="<b>Error:</b> in the line: ".implode(",",$arr).'&nbsp;&nbsp;<a linkType="debugOpener" recId="'.$recInd.'" href="" onclick="importMore('.$recInd.');">More info</a><br>';
            $temp_error_message .= '<div id="importDebugInfoTable'.$recInd.'" cellpadding="3" cellspacing="1" align="center" style="display: none;"><p class="error">SQL query: '.$sql.'; </p><p class="error">DB error: '.db_error($conn).';</p></div>';
            
            
            $temp_error_message .= "<br><br>";
            // we'll try to update the record
            
            if ($keys_present)
            {
                $sql = "update ".AddTableWrappers($strOriginalTableName)." set ";
                $sqlset="";
                $where = "";
                foreach($fields as $k=>$val)
                {                	
                    if (!in_array(AddFieldWrappers($fields[$k]), $keys))
                    {
                        if(!is_null($arr[$val]))
							$sqlset .= $fields_list[$k] . "="
								.$cipherer->AddDBQuotes($val,$arr[$val]).", ";
						else
							$sqlset .= $fields_list[$k] . "=NULL, ";
                    }
					else 
                    {
						if( !$where )
							$where = " where ";
                        $where.= $fields_list[$k] . "=".$cipherer->AddDBQuotes($val,$arr[$val]). " and ";
                    }
                }                        
				
                if(strlen($sqlset)>0)
                    $sql.= substr($sqlset, 0, strlen($sqlset)-2);
				if( $where )
					$where = substr($where, 0, strlen ($where)-5);
				$sql.= " " . $where;
            
                $rstmp=db_query("select * from " .AddTableWrappers($strOriginalTableName). " " . $where,$conn);
                $data=db_fetch_array($rstmp);
                
                              
                if ($data)
                {           
                	if($auditObj)
                		foreach ($data as $key => $val)
                			$auditOldValues[$key] = $val;
                    if (db_exec_import($sql, $conn, AddTableWrappers($strOriginalTableName), $autoinc))
                    {
                        // update successfull
                        $goodlines++;
                        if($auditObj)
                        {
                        	$aKeys = GetKeysArray($arr, $pageObject);
                        	$auditObj->LogEdit($strTableName, $arr, $auditOldValues, $aKeys);
                        }
                    }
                    else
                    {
                        // update not successfull
                        $error_message .= $temp_error_message;
                        $ret = 0;            
                    }
                }
                else    //     nothing to update  
                {
                    $error_message .= $temp_error_message;
                    $ret = 0;            
                }
            }
            else
                $error_message .= $temp_error_message;
        }
        return $ret;
    }
}	
		
/**
 * GetKeysArray
 * Form aray of primary keys and their values for audit
 * @param {array} $arr array of inserting values
 * @param {bool} $searchId - find last inserted id or not
 * @return {array} array of keys and their values
 */
function GetKeysArray($arr, $pageObject, $searchId = false)
{
	global $conn;
	$keyfields = $pageObject->pSet->GetTableKeys();
	$aKeys = array();
    if(count($keyfields))
    {
    	foreach ($keyfields as $kfield)
    		if(array_key_exists($kfield, $arr))
    			$aKeys[$kfield] = $arr[$kfield];
	    if(count($aKeys) == 0 && $searchId)
	    {
	    	$lastId = db_insertid($conn);
	    	if($lastId > 0)
				$aKeys[$keyfields[0]] = $lastId;
	    }
    }
    return $aKeys;
}

function GetBaseScriptsForPage($isDisplayLoading, $additionalScripts = "")
{
	$result = "";
	$result .= "<script type=\"text/javascript\" src=\"".GetRootPathForResources("include/loadfirst.js")."\"></script>";
	$result .= $additionalScripts;
	$result .= "<script type=\"text/javascript\" src=\"".GetRootPathForResources("include/lang/".getLangFileName(mlang_getcurrentlang()).".js")."\"></script>";
	
	if($isDisplayLoading)
	{
		$result .= "<script type=\"text/javascript\">Runner.runLoading();</script>";
	}
	
	return $result;
}		

function printJSON($returnJSON)
{
	return runner_htmlspecialchars(my_json_encode($returnJSON));
}

/**
 * Get the value of an interval limit's custom PHP expression
 * @param String table
 * @param String field
 * @param Number idx
 * @param Boolean isLowerBound
 * @return Mixed
 */
function getIntervalLimitsExpressions($table, $field, $idx, $isLowerBound)
{
}
function PrepareForExcel($ret)
{
	//$ret = htmlspecialchars($str); commented for bug #6823
	if (substr($ret,0,1)== "=") 
		$ret = "&#61;".substr($ret,1);
	return $ret;

}

function countTotals(&$totals, $totalsFields, $data)
{
	for($i = 0; $i < count($totalsFields); $i ++) 
	{
		if($totalsFields[$i]['totalsType'] == 'COUNT') 
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]!= "");
		else if($totalsFields[$i]['viewFormat'] == "Time") 
		{
			$time = GetTotalsForTime($data[$totalsFields[$i]['fName']]);
			$totals[$totalsFields[$i]['fName']]["value"] += $time[2]+$time[1]*60 + $time[0]*3600;
		} 
		else 
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]+ 0);
		
		if($totalsFields[$i]['totalsType'] == 'AVERAGE')
		{
			if(!is_null($data[$totalsFields[$i]['fName']]) && $data[$totalsFields[$i]['fName']]!=="")
				$totals[$totalsFields[$i]['fName']]['numRows']++;
		}
	}
}

function XMLNameEncode($strValue)
{	
	$search=array(" ","#","'","/","\\","(",")",",","[");
	$ret=str_replace($search,"",$strValue);
	$search=array("]","+","\"","-","_","|","}","{","=");
	$ret=str_replace($search,"",$ret);
	return $ret;
}
?>