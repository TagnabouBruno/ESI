<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>accueil</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/header-fixed.css">
	<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./Footer.css">
	<link rel="stylesheet" href="{{ asset('style/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/bootstrap.bundle.min.js')}}">
    <link rel="stylesheet" href="{{ asset('style/style.css')}}">
</head>

<body>
	

<header class="header-fixed">

	<div class="header-limiter">

		<h1><a href="">Gestion<span> Scolaire</span>/ Carte<span> Etudiant</span></a></h1>

		<nav>
            <div class="btn-group">
                <button type="button" class="btn btn-secondary"><a href="{{route('accueil')}}">Accueil</a></button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-secondary"><a href="{{route('inscriptionadmi')}}">Inscription</a></button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-secondary"><a href="{{route('connectionadmi')}}">Connexion</a></button>
            </div>
		</nav>

	</div>

</header>
		@yield('page-content')
    <footer class="footer mt-5">
        <div class="icons">
           <a href="#"><i class="fab fa-facebook"></i></a>
           <a href="#"><i class="fab fa-linkedin"></i></a>
           <a href="#"><i class="fab fa-instagram"></i></a>
           <a href="#"><i class="fab fa-twitter"></i></a>
            <p class="company-name">
                ABC &copy; 2021, ALL Rights Reserved
            </p>
        </div>
    </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Demo ads. Please ignore and remove. -->
<script src="http://cdn.tutorialzine.com/misc/enhance/v3.js" async></script>
<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>






