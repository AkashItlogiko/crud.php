<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'phptestDB';

// ay jayga phpmyadmin sate php connected kora hoyasa.
$conn = mysqli_connect($hostname,$username,$password,$dbname); 

// ay condition ta kora hoyasa data base ar sate php connection hoyasa ki na say ta test korbar jonna.

if(!$conn){
echo die(mysqli_connect_error());
}

// ay khani database table create kora hoyasa.

$sql="CREATE TABLE student
 (id int(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
 firstname VARCHAR(25) NOT NULL,
 lastname VARCHAR(20)  NOT NULL, 
 email VARCHAR(25))";

// ay khani condition ar dara dhaka hoyasa dhaka hoyasa data table create hoyasa ki na.
try {
  if(mysqli_query($conn,$sql)){
echo "Table create successfully.";
}
} catch (\Throwable $th) {
  echo "faill";
}
 


mysqli_close($conn); 
?>