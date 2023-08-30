<?php
include 'config.php';

if(isset($_GET["table"]))
{ 
  $table=$_GET['table'];
  echo $table;
  $id= $_GET['delete'];
  echo $id;
  
  $del = "DELETE FROM $table WHERE no = $id";
  echo $del;
  $query = mysqli_query($connection,$del);
  
  $location="get".$table.".php";
  header("location: $location");
}

?>