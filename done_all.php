<?php
require_once 'includes/db_connect.php';
$id=$_GET['id'];
$status=$_GET['status'];

$done_all="UPDATE users SET status=2  ";
mysqli_query($db_connect, $done_all);
header('location:user_show_list.php');
