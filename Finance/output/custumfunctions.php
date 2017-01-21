<?php
function GetRecordCounterID($Name){
	//**********  Check if specific record exists  ************
	global $conn;
  $rs = db_query("select * from recordidcounter where Name='$Name'",$conn);
	$data=db_fetch_array($rs);
	if($data['useflag'] == 1){
		if($data['flag'] == 0){
		 db_query("update recordidcounter set flag = 1 where Name='$Name'",$conn);
			return FormatResult($data['Prefix'],$data['Number'],$data['Sufix']);
		}else{
		  db_query("update recordidcounter set Number = Number + 1,flag = 0 where Name='$Name'",$conn);
			$rs = db_query("select * from recordidcounter where Name='$Name'",$conn);

			$data=db_fetch_array($rs);
			if($data)
			{
				return FormatResult($data['Prefix'],$data['Number'],$data['Sufix']);
			}
			else
			{
				return 'ERROR:: No Record ID Counter Found!';
			}
		}
  }else{
		  db_query("update recordidcounter set Number = Number + 1 where Name='$Name'",$conn);
			$rs = db_query("select * from recordidcounter where Name='$Name'",$conn);

			$data=db_fetch_array($rs);
			if($data)
			{
				return FormatResult($data['Prefix'],$data['Number'],$data['Sufix']);
			}
			else
			{
				return 'ERROR:: No Record ID Counter Found!';
			}
  }
}
function FormatResult($p,$no,$s){
	$StrNumber = sprintf('%06d', $no);
  return $p.$StrNumber.$s;
}	
?>