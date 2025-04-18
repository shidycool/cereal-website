<?php
  $username =  "root";
  $database = "cereal_db";
  $servername = "localhost";

  //Accesing User details from the frontend
  $first_name = htmlspecialchars($_POST['f_name']);
  $last_name = htmlspecialchars($_POST['l_name']);
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);

  $con = mysqli_connect($servername, $username, '', $database);
   // check connection 
  if($con->connect_error){
    echo "connection problem: ".$conn->connect_error;
    exit();
  }
        // insert into the table details from the user
  $sql = "INSERT INTO users_info (first_name, last_name, email, pass)
          VALUES('$first_name', '$last_name', '$email', '$password')";

        //check whether fields are filled as required
          if(empty($first_name || $email || $password)){
            echo "please fill in all fields";
            exit();
          }

  $res = mysqli_query($con, $sql);
  if($res){
    echo "Sign up succesfull, Please sign in";
    ?>
    <meta http-equiv="refresh" content="1; url='../frontend/static/signin.html'"/>
    <?php
  }
  else{
    echo "Data not submitted";
  }
  $con -> close();
?>