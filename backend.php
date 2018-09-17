<?php
include 'connectdb.php';
include_once 'gpConfig.php';
include_once 'User.php';   
 if(isset($_REQUEST['edit_user'])){
     echo 'found';
    $loc= mysqli_real_escape_string($connect, strip_tags($_REQUEST['loc']));
    $coffee=mysqli_real_escape_string($connect, strip_tags($_REQUEST['coffee']));
    $projects=mysqli_real_escape_string($connect, strip_tags($_REQUEST['projects']));
    $uid=$_SESSION['u_id'];
    $update_query="UPDATE user_number_data SET loc='$loc',projects='$projects',coffee='$coffee' where u_id='$uid'";
    $run_update= mysqli_query($connect, $update_query);
}
 else {
    echo 'not done';
}
?>