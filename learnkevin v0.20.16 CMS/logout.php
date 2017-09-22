
<?php
# start the session
include('config/config.php');
session_start();

$sql  = "UPDATE user SET online_status = '0' WHERE user.id = '$_SESSION[id]' ";
mysqli_query($conn,$sql);

unset($_SESSION['username']); //unset the ussername key

# session_destroy(); //unset all the session keys
header('Location: login.php');
?>
