<?php

session_start();

?>
<!Doctype html>

<html lang="pl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>User </title>
  <meta name="description" content="Logowanie LibraryApp"/>

  <!-- Title -->
  <meta property="LibraryApp" content="" />
  <!-- OPTIONAL description. 2-4 sentences. -->
  <meta property="LibraryApp" content="" />
  <meta property="og:url" content="https://github.com/MaciejBoniaszczuk/LibraryApp" />
  <!-- full url to the image with http(s) ie. https://github.com/MaciejBoniaszczuk/LibraryApp/assets/img/fb.png. Facebook suggests at least 1200 x 630. -->
  <meta property="og:image" content="https://github.com/MaciejBoniaszczuk/LibraryApp/assets/img/cover.png" />

  <!-- to u góry to takie google analitycs troche mozna w wolnej chwili sie tym zająć -->

  <link rel="manifest" href="manifest.json" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <link rel="apple-touch-icon" sizes="192x192" href=".../assets/img/logo.jpg" />

  <link rel="Shortcut icon" href="../assets/img/logo.jpg"/>
  <!-- to potrzebne do PWA, później trzeba zrobic jakas ikonke i dodać-->
  <link rel="stylesheet" href="css/main.css" />
  <link href="https://fonts.googleapis.com/css?family=Anton|Josefin+Sans|Pathway+Gothic+One|Raleway" rel="stylesheet">	
 
</head>
<body>
  <?php
    echo "<p>Witaj ".$_SESSION['user'];



?>
</body>
</html>

