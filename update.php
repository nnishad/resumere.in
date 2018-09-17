<?php
include 'connectdb.php';
include_once 'gpConfig.php';
include_once 'User.php';

$uid=$_SESSION['u_id'];
//update.php
$connect = mysqli_connect("localhost", "nikhilnishad9", "Zxcvbnm#123", "resume9999");
$query = "
 UPDATE user_data SET ".$_POST["name"]." = '".$_POST["value"]."' 
 WHERE u_id = '$uid'";
mysqli_query($connect, $query);
?>