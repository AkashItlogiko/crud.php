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

$sql = "SELECT id, firstname,lastname FROM student WHERE lastname='Roy' ORDER BY id   LIMIT 2 ";

// Ay khani thaki query kora hoyasa.

$result = mysqli_query($conn,$sql);

 if(mysqli_num_rows ($result) > 0){

  while ($data = mysqli_fetch_assoc($result)){
      echo $data['id'] .' '. $data['firstname'] .' '. $data['lastname'].'<br>';
  }

 }else{
  echo "No Data Found";
 }

mysqli_close($conn);
?>