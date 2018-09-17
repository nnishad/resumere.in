<?php
include 'connectdb.php';
include_once 'gpConfig.php';
include_once 'User.php';   
 if(isset($_REQUEST['edit_tech'])){
     
    $ts1= mysqli_real_escape_string($connect, strip_tags($_REQUEST['ts1']));
    $ts2= mysqli_real_escape_string($connect, strip_tags($_REQUEST['ts2']));
    $ts3= mysqli_real_escape_string($connect, strip_tags($_REQUEST['ts3']));
    $ts4= mysqli_real_escape_string($connect, strip_tags($_REQUEST['ts4']));
    $os1= mysqli_real_escape_string($connect, strip_tags($_REQUEST['os1']));
    $os2= mysqli_real_escape_string($connect, strip_tags($_REQUEST['os2']));
    $os3= mysqli_real_escape_string($connect, strip_tags($_REQUEST['os3']));
    $os4= mysqli_real_escape_string($connect, strip_tags($_REQUEST['os4']));
    $os5= mysqli_real_escape_string($connect, strip_tags($_REQUEST['os5']));
    $os6= mysqli_real_escape_string($connect, strip_tags($_REQUEST['os6']));
    $uid=$_SESSION['u_id'];
    $update_query="UPDATE user_skill SET ts1='$ts1',ts2='$ts2',ts3='$ts3',ts4='$ts4',os1='$os1',os2='$os2',os3='$os3',os4='$os4',os5='$os5',os6='$os6' where u_id='$uid'";
    $run_update= mysqli_query($connect, $update_query);
}


?>
