<?php
require_once 'includes/db_connect.php';
$id = $_GET['id'];
$status = $_GET['status'];

$delete_all_edit = "DELETE FROM users ";
mysqli_query($db_connect, $delete_all_edit);
header('location:user_show_list.php');
