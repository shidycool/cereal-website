
<?php
session_start();
$exists = $_SESSION['id'] ?? 0;
if($exists == 0){
  ?>
  <meta http-equiv="refresh" content="5; url='../frontend/static/signin.html'"/>
  <?php
}
else{
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products page</title>
  </head>
  <body>
    <br>
    <br>
    These are the products
  </body>
  </html>
<?php
}
?>