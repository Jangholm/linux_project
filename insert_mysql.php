<?php

$servername = "10.166.0.7"; $db = "linux_project_db"; $user = "gcloud_link"; $pwd = "secure123";

$conn = new mysqli($servername, $user, $pwd, $db);

if($conn === false){
	die("ERROR: Could not connect. " .
		mysqli_connect_error());
}
$first_int = mysqli_real_escape_string($conn,$_REQUEST['first_int']);
$second_int = mysqli_real_escape_string($conn,$_REQUEST['second_int']);
$operation = mysqli_real_escape_string($conn,$_REQUEST['operation']);
$answer = mysqli_real_escape_string($conn,$_REQUEST['my_result']);



$sql ="INSERT INTO test_table (first_int, second_int, operand, result) VALUES ('$first_int', '$second_int', '$operation', '$answer')";

if(mysqli_query($conn, $sql)){
echo "Records updated, Bra jobbat!!";
}else{
	echo "ERROR $sql"  .
		mysqli_error($conn);
}

mysqli_close($conn);
?>
