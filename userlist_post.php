<?php
require_once 'includes/db_connect.php';


  $what_to_do = $_POST['what_to_do'];
  $when_to_do = $_POST['when_to_do'];
  
  $insert_query= "INSERT INTO users(what_to_do, when_to_do) VALUES('$what_to_do','$when_to_do')";
  mysqli_query($db_connect,$insert_query);
  header('location:user_show_list.php');
?>