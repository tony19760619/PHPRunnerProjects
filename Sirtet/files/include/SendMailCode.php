<?php

//*********  Get from email address  ************
global $conn;
$strSQLExists = "select email from users where username='".$_SESSION["UserID"]."'";
$rsExists = db_query($strSQLExists,$conn);
$dataEmail=db_fetch_array($rsExists);
$replyTo = 'system@sirtet.co.uk';
if($dataEmail)
{
	// if record exists do something
  if ($dataEmail['email'] !== ''){
    $replyTo = $dataEmail['email'];
  }
}

//**********  Check if there is anyone to send email to  ************
if($values['SendEmailTo'] === ''){
  return true;
}

$from = 'system@sirtet.co.uk';

$email = $values['SendEmailTo'];

//**********  Make up email  ************
$sorted = $values;
ksort($sorted);
$msg.='Hi,<br><br>Here is the updated values...<br><br><table><thead><tr style="background-color: lightgreen; font-size:+2;"><th>Field</th><th>Value</th></tr></thead><tbody>';
$toggle = -1;
foreach ($sorted as $key => $value) {  // another way to get keys and values.
  if ( (substr_count($key, 'file') > 0) || (substr_count($key, 'File') > 0)){
      continue;
  }
  if (substr_count($key, 'SendEmailTo') > 0){
      continue;
  }
  if($toggle == -1){
		$msg.= '<tr style="background-color:lightyellow;">';
  }
	else{
		$msg.= '<tr style="background-color:lightblue;">';
	}
	$toggle = $toggle * (-1);

  if($key == 'JobID'){
		$value = @$data["ProjectName/No"];
	}

  @$msg.= '<td>'.preg_replace('/(?!^)[A-Z]{2,}(?=[A-Z][a-z])|[A-Z][a-z]/', ' $0', $key).'</td><td><pre style="font-size: +2">' . $value. "</pre></td>";
  $$msg.='/tr>';
}
$msg.='</tbody></table>';

$msg.="<br><br>Regards<br>Automatic Email from sirtet system<br>";

$fileArray = my_json_decode($files);
$attachments = array();
foreach($fileArray as $f) {
  $attachments[1] = array("path" => getabspath($f["name"]), "name" => $f["usrName"]);
}

$ret=runner_mail(array('to' => $email, 'subject' => $subject, 'htmlbody' => $msg, 'from'=>$from, 'replyTo'=>$replyTo, "attachments" => $attachments));
if(!$ret["mailed"]){
  echo $ret["message"];
  return false;
}
return true;

?>