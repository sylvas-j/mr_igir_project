<?php 

  //this insert data in my data base
// $dsn1='localhost';
// $user= 'root';
// $password='';  
// $dbname  = 'mr_igiri_project';

$dsn1='sql4.freemysqlhosting.net';
$user= 'sql4418491';
$password='3CC3R9gJ1E';  
$dbname  = 'sql4418491';


$conn = new mysqli($dsn1, $user, $password, $dbname);



  // $conn = new mysqli("localhost", "root", "comment");
  if($conn->connect_error){
    echo 'Connection Failed----'.$conn->connect_error;
  }else{
    // echo "posting this is also working";
  };


 ?>