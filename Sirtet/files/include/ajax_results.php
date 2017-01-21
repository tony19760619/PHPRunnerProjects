<?php
  $vals = json_decode(stripslashes($_POST['ParamVals']));

  if ($vals[0] == 'Template'){

  $WindowNameVal = $vals[1]; 
  $TypeVal = $vals[2];

	$servername1 = "localhost";
	$username1 = "sirte_user";
	$password1 = "TiagO!23";
	$dbname1 = "sirtetco_sirtet";

	// Create connection
	$conn1 = new mysqli($servername1, $username1, $password1, $dbname1);
	// Check connection
	if ($conn1->connect_error) {
		 die("Connection failed: " . $conn1->connect_error);
	} 

	$sql1 = "SELECT File FROM documenttemplates where WindowName = '$WindowNameVal'  and Type = '$TypeVal'";
	$result1 = $conn1->query($sql1);

	if($row1 = $result1->fetch_assoc()) {
		 $file = $row1['File'];
     if ($file == ''){        
				$val = "Template file not stored yet";
     } else {
				$val = "Template for $TypeVal download";
     }
	} else {
		 $file = '#';
     $val = 'Template not found';
	}
	$conn1->close();

  echo "<a id='TypeFileDownload' target='blank' href='filestemplates/$file'>$val</a>";
}

if ($vals[0] == 'SubTemplate'){

  //$maintemplateval = $vals[1]; 
  $WindowNameVal = $vals[1];
  $TypeVal = $vals[2]; 
  $SubTypeVal = $vals[3];

	$servername1 = "localhost";
	$username1 = "sirte_user";
	$password1 = "TiagO!23";
	$dbname1 = "sirtetco_sirtet";

	// Create connection
	$conn1 = new mysqli($servername1, $username1, $password1, $dbname1);
	// Check connection
	if ($conn1->connect_error) {
		 die("Connection failed: " . $conn1->connect_error);
	} 

	$sql1 = "SELECT File FROM documenttemplates where WindowName = '$WindowNameVal' and Type = '$TypeVal' and SubType = '$SubTypeVal'";
	$result1 = $conn1->query($sql1);

	if($row1 = $result1->fetch_assoc()) {
		 $file = $row1['File'];
     if ($file == ''){        
				$val = "Template file not stored yet";
     } else {
				$val = "Template for '$TypeVal->$SubTypeVal' download";
     }
	} else {
		 $file = '#';
     $val = 'Template not found';
	}
	$conn1->close();

  echo "<a id='TypeFileDownload' target='blank' href='filestemplates/$file'>$val</a>";
}


?>