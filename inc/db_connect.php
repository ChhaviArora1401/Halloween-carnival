<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_system";
$connect = mysqli_connect($servername, $username, $password, $dbname);
if ($connect->connect_error) {
    die("Connect failed: %s\n".$connect->connect_error); 
}
// if ($result = $connect -> query("SELECT * FROM members")) {
//   $res = $result -> fetch_all()[0];
//   foreach($res as $key => $value){
//       echo $key . $value;
//   }
//   // Free result set
//   $result -> free_result();
// }
?>