<?php
$servername = "10.166.0.7"; $db = "linux_project_db"; $user = "gcloud_link"; $pwd = "secure123";

function getAllUsers(){
   global $servername, $db, $user, $pwd;     
   $conn = new mysqli($servername, $user, $pwd, $db);  // Create connection
   if ($conn->connect_error) { // Check connection
        die("Connection failed: " . $conn->connect_error);
   }
   // simple sql, as there are no params here
   $sql = "select * from test_table";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {  // get data from each row
     $res = [];
     while($row = $result->fetch_assoc()) {
	array_push($res, $row);
    }
    } else {
    	$res = [];
    }
    $conn->close();
    return $res;
}

$allUsers=getAllUsers();
echo '<pre>'; print_r($allUsers); echo '</pre>';
?>
