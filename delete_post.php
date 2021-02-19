<?php
require_once 'includes/db_connect.php';
$id=$_GET['id'];
$status=$_GET['status'];

$delete_edit="DELETE FROM users  WHERE id='$id' ";
mysqli_query($db_connect,$delete_edit);
header('location:user_show_list.php');
