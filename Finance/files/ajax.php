<?php
  $vals = json_decode(stripslashes($_POST['ParamVals']));

if ($vals[0] == 'GetAccountBalance'){

  $WindowNameVal = $vals[1]; 
  $AccountNumber = $vals[2];
  
  if(($AccountNumber == 0) OR ($AccountNumber == "")){
    echo '<span id="readonly_value_Balance_1" style="width: 200px;">0</span>';
    echo '<input id="value_Balance_1" type="Hidden" name="value_Balance_1" value="0">';
	}
  else{
	$servername1 = "localhost";
	$username1 = "khmerban_finance";
	$password1 = "khmerban_finance!23";
	$dbname1 = "khmerban_finance";

	// Create connection
	$conn1 = new mysqli($servername1, $username1, $password1, $dbname1);
	// Check connection
	if ($conn1->connect_error) {
		 die("Connection failed: " . $conn1->connect_error);
	} 


	$sql1 = "select AccountBalance from accounts where AccountNumber = '$AccountNumber'";
	$result1 = $conn1->query($sql1);

	if($row1 = $result1->fetch_assoc()) {
		 $val = $row1['AccountBalance'];
	} else {
		 $val = '0';
	}
	$conn1->close();

  echo '<span id="readonly_value_Balance_1" style="width: 200px;">'.$val.'</span>';
  echo '<input id="value_Balance_1" type="Hidden" name="value_Balance_1" value="'.$val.'">';
  }
}

