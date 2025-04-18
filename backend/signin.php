<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $database = "cereal_db";

  //Accessing User details from the frontend
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);


  //connection testing
  $con = mysqli_connect($servername, $username, '', $database );
  if($con->connect_error){
    echo "connected successfully".$con->connect_error;
    exit();
  }

  //retrieving details that already exist from db
  $sql = "SELECT id, email, pass FROM users_info";

  $result = mysqli_query($con, $sql);

  if($result->num_rows > 0){
    
    while($row = $result->fetch_assoc()){
      $userId = $row['id'];
      $s_email = $row['email'];
      $s_password = $row['pass'];
    }

    //authentication process
    if($email == $s_email && $password == $s_password){
      $_SESSION['id'] = $userId;
      echo"Details matched";
    }
    else{
      echo"Try again";
    }
  }
  else{
    echo"User does not exist, please create new account";
  }
