<?php

session_start();

require_once "connect.php";

$connection = @new mysqli($host, $db_user, $db_password, $db_name);

if ($connection->connect_errno!=0)
{
  echo "Error: ".$connection->connect_errno;
}
else {
  $login = $_POST['userName'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM clients WHERE login='$login' AND password='$password'"; //zapisanie w zmiennej szystkich wierszy z tabieli client 
                                                                                //o zgadzającym się loginie i haśle
  
  if ($result = @$connection->query($sql)) //jeżeli jest wynik
  {
    $how_many_users = $result->num_rows; //liczba zwróconych wierszy
    if ($how_many_users>0)
    {
      $row = $result->fetch_assoc();
      $_SESSION['user'] = $row['login'];
      $_SESSION['firstName'] = $row['firstName'];
      $_SESSION['lastName'] = $row['lastName'];
      $_SESSION['indexNumber'] = $row['indexNumber'];

      $result->free_result();
      header('Location: user.php');
    } else {
      
    }
  }
  $connection->close();
}

?>