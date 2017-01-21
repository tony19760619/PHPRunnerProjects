<?php
//echo json_encode(array("response" => "all ok"));

define('UPLOAD_DIR', "files\/");
$img = $_POST['file'];

//--------------------------------------
//-- Saving an undecoded file.disabled
//--------------------------------------
//$file = UPLOAD_DIR.$_POST['filename'].'_'. uniqid() . '.nodecode.'.$ext;
//$success = file_put_contents($file, $img);

$ext = 'png';
if(strpos ($img,'data:image/jpeg;base64,')>0)$ext = 'jpeg';
if(strpos ($img,'data:image/jpg;base64,')>0)$ext = 'jpg';
if(strpos ($img,'data:image/bmp;base64,')>0)$ext = 'bmp';
if(strpos ($img,'data:image/png;base64,')>0)$ext = 'png';
if(strpos ($img,'data:image/gif;base64,')>0)$ext = 'gif';

$img = str_replace('data:image/jpeg;base64,', '', $img);
$img = str_replace('data:image/jpg;base64,', '', $img);
$img = str_replace('data:image/bmp;base64,', '', $img);
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace('data:image/gif;base64,', '', $img);

$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = UPLOAD_DIR.$_POST['filename'].'_'. uniqid() .'.'.$ext;
$file_tmp = str_replace ("\\","",$file); 
$success = file_put_contents($file_tmp, $data);

$size = filesize($file_tmp);

echo $file_tmp.','.$size;

//delete previous snapshot form server
$delfile = @$_POST['pleasedeletefile'];
$delfile_tmp = str_replace ("\\","",$delfile); 

if($delfile_tmp != ''){
   //$delfile = str_replace ("\\","",$delfile); 
    unlink($delfile_tmp);
}

?>