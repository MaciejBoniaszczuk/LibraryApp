<!DOCTYPE html>

<html lang="pl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Strona główna Biblioteka </title>
  <meta name="description" content="Strona Biblioteki"/>

  <!-- Title -->
  <meta property="LibraryApp" content="" />
  <!-- OPTIONAL description. 2-4 sentences. -->
  <meta property="LibraryApp" content="" />
  <meta property="og:url" content="https://github.com/MaciejBoniaszczuk/LibraryApp" />
  <!-- full url to the image with http(s) ie. https://github.com/MaciejBoniaszczuk/LibraryApp/assets/img/fb.png. Facebook suggests at least 1200 x 630. -->
  <meta property="og:image" content="https://github.com/MaciejBoniaszczuk/LibraryApp/assets/img/cover.png" />

  <!-- to u góry to takie google analitycs troche mozna w wolnej chwili sie tym zająć-->

  <link rel="manifest" href="manifest.json" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <link rel="apple-touch-icon" sizes="192x192" href="images/logo.jpg" />

  <link rel="Shortcut icon" href="images/logo.jpg"/>
  <!-- to potrzebne do PWA, później trzeba zrobic jakas ikonke i dodać-->
  <link rel="stylesheet" href="css/main.css" />
   
  <link href="https://fonts.googleapis.com/css?family=Anton|Josefin+Sans|Pathway+Gothic+One|Raleway" rel="stylesheet">	
 
</head>

<body>
  <div class="container">
		<div class="gorna_belka">
		<div class="logo">
			<div class="obraz_logo">
				<a href="https://maciejboniaszczuk.github.io/LibraryApp/" target="blank">
				<img src="images/logo.jpg" width="70" height="70">
				</a>
			</div>
			<div class="text_logo">
				<span style="color:black"><font size="6">Biblioteka</font></span>
				<br>LibraryApp
			</div>			
		</div>
		
		<div class="menu">	
			<ul>
				<li><a class="active" href="index.html">Strona główna</a></li>
				<li class="dropdown"><a href="spis.html" class="dropbtn">Spis książek</a>
						<div class="dropdown-content">
							<a href="szukaj.html" target="blank">Szukaj</a>
							<a href="popularne.html" target="blank">Popularne</a>
							<a href="rekomendacje.html" target="blank">Nasze rekomendacje</a>
						</div>
				</li>
				
				<li><a href="rejestracja.html">Rejestracja</a></li>
				<li><a href="login.html">Login</a></li>
			</ul>
		</div>
		</div>
		
		<div style="clear:both"></div>
		<div class="spacer"></div>
		
		<div class="content">
			
			<div class="text_content">
			
				<h1>Witaj na stronie głównej Biblioteki</h1>

				<p>Strona, którą przeglądasz jest storzona w ramach przedmiotu "Projekt grupowy II".</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.h</p>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
			</div>
		</div>

		
</div>
<div class="stopka">
			2019 &copy; Boniaszczuk Kuderewski Ulenberg 
		</div>

  
  
  <script src="js/main.js"></script>
</body>

</html>