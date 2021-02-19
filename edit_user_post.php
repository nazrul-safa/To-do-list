<?php
require_once 'includes/db_connect.php';
$id=$_GET['id'];
$status=$_GET['status'];

$update_edit="UPDATE users SET status=2 WHERE id='$id' ";
$a=mysqli_query($db_connect,$update_edit);
header('location:user_show_list.php');
?>