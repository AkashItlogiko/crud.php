<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'phptestDB';

// ay jayga phpmyadmin sate php connected kora hoyasa.
$conn = mysqli_connect($hostname,$username,$password,$dbname);  

if(!$conn){
echo die(mysqli_connect_error());
}

$sql = "DELETE FROM student WHERE id = 2";

if(mysqli_query($conn,$sql)){
  echo "Data Deleted!";
}else{
echo "Not Delete";
}

mysqli_close($conn);

?>