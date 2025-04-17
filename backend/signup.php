<?php
  $username =  "root";
  $database = "cereal_db";
  $servername = "localhost";

  //User details
  $first_name = $_POST['f_name'];
  $last_name = $_POST['l_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $con = mysqli_connect($servername, $username, '', $database);

  if($con->connect_error){
    echo "connectiom problem: ".$conn->connect_error;
    exit();
  }

  $sql = "INSERT INTO users_info (first_name, last_name, email, pass)
          VALUES('$first_name', '$last_name', '$email', '$password')";

  $res = mysqli_query($con, $sql);
  if($res){
    echo "The data was submitted successfully";
  }
  else{
    echo "Data not submitted";
  }
?>