<?php
include 'connectdb.php';
include_once 'gpConfig.php';
include_once 'User.php';    
 if(isset($_REQUEST['edit_link'])){
     
    $fb= mysqli_real_escape_string($connect, strip_tags($_REQUEST['fb']));
    $tweet= mysqli_real_escape_string($connect, strip_tags($_REQUEST['tweet']));
    $github= mysqli_real_escape_string($connect, strip_tags($_REQUEST['github']));
    $linkedin= mysqli_real_escape_string($connect, strip_tags($_REQUEST['linkedin']));
    $gplus= mysqli_real_escape_string($connect, strip_tags($_REQUEST['gplus']));
    $pinterest= mysqli_real_escape_string($connect, strip_tags($_REQUEST['pinterest']));
    $id=$_SESSION['u_id'];
    $update_query="UPDATE user_links SET fb='$fb',tweet='$tweet',github='$github',linkedin='$linkedin',gplus='$gplus',pinterest='$pinterest' where u_id='$id'";
    $run_update= mysqli_query($connect, $update_query) or die($connect);
    echo $fb.$github.$linkedin.$gplus.$tweet.$pinterest;
}
 
?>
