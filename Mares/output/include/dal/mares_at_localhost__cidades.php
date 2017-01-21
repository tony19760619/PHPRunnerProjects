<?php
$dalTablecidades = array();
$dalTablecidades["id"] = array("type"=>3,"varname"=>"id");
$dalTablecidades["terra"] = array("type"=>200,"varname"=>"terra");
$dalTablecidades["regiao"] = array("type"=>200,"varname"=>"regiao");
$dalTablecidades["cidade"] = array("type"=>200,"varname"=>"cidade");
$dalTablecidades["locale"] = array("type"=>200,"varname"=>"locale");
$dalTablecidades["longitude"] = array("type"=>5,"varname"=>"longitude");
$dalTablecidades["latitude"] = array("type"=>5,"varname"=>"latitude");
$dalTablecidades["v1diascript"] = array("type"=>201,"varname"=>"v1diascript");
$dalTablecidades["v3diasscript"] = array("type"=>201,"varname"=>"v3diasscript");
	$dalTablecidades["id"]["key"]=true;

$dal_info["mares_at_localhost__cidades"] = &$dalTablecidades;
?>