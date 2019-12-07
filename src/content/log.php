<?php

require_once "connect.php";

$connection = @new mysqli($host, $db_user, $db_password, $db_name);

if ($connection->connect_errno!=0)
{
  echo "Error: ".$connection->connect_errno . "Opis: ".$connection->connect_error;
}
else
{
  $login = $_POST['userName'];
  $password = $_POST['password'];

  echo "Działa";

  $connection->close();
}



// echo $login."<br />";
// echo $password;





?>