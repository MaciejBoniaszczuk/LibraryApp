<?php

require_once "connect.php";

$connection = @new mysqli($host, $db_user, $db_password, $db_name);

if ($connection->connect_errno!=0)
{
  echo "Error: ".$connection->connect_errno;
}
else {
  $login = $_POST['userName'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM clients WHERE login='$login' AND password='$password'";


  if ($result = @$connection->query($sql))
  {
    $how_many_users = $result->num_rows;
    if ($how_many_users>0)
    {
      $row = $result->fetch_assoc();
      $user = $row['login'];

      $result->free_result();
    } else {
      
    }
  }
  $connection->close();
}

?>