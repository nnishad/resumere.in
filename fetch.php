<?php
include 'connectdb.php';
include_once 'gpConfig.php';
include_once 'User.php';
//fetch.php
$uid=$_SESSION['u_id'];
$connect = mysqli_connect("localhost", "nikhilnishad9", "Zxcvbnm#123", "resume9999");
$query = "SELECT * FROM user_data where u_id='$uid'";
$result = mysqli_query($connect, $query);
$output = array();
while($row = mysqli_fetch_assoc($result))
{
 $output[] = $row;
}
echo json_encode($output);
?>