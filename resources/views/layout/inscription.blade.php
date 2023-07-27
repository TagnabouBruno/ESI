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
    <link rel="stylesheet" href="{{ asset('style/style.css')}}">
	<link rel="stylesheet" href="{{asset('style/getbootstrap.com_docs_5.3_assets_css_docs.css')}}">
	<script src="http://cdn.tutorialzine.com/misc/enhance/v3.js" async></script>
	<script src="{{ asset('script/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('script/bootstrap.bundle.js')}}"></script>
	<script src="{{asset('script/bootstrap.min.js')}}"></script>
	
</head>

<body>
	

<header class="header-fixed">

	<div class="header-limiter">

    <h1><a href="">Gestion<span> Scolaire</span>/ Carte<span> Etudiant</span></a></h1>

		<nav>
			<div class="btn-group">
				<button type="button" class="btn btn-secondary"><a href="{{route('gestion')}}" class="btn btn-secondary">Accueil</a></button>
			</div>
			<div class="btn-group">
  				<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    				Secretaire
  				</button>
  				<ul class="dropdown-menu dropdown-menu-end">
    				<a href="{{route('secretaire')}}"><li><button class="dropdown-item" type="button">Ajouter</button></li></a>
    				<a href="{{route('listesecretaire')}}"><li><button class="dropdown-item" type="button">Listes</button></li></a>
  				</ul>
			</div>
			<div class="btn-group">
  				<button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    				Etudiant
  				</button>
  				<ul class="dropdown-menu dropdown-menu-end">
    				<a href="{{route('inscriptionetudiant')}}"><li><button class="dropdown-item" type="button">Ajouter</button></li></a>
    				<a href="{{route('liste_etudiant')}}"><li><button class="dropdown-item" type="button">Listes</button></li></a>
  				</ul>
			</div>
			<div class="btn-group">
            	<button type="button" class="btn btn-secondary"><a href="">Cartes</a></button>
			</div>
        	<div class="btn-group">
            	<button type="button" class="btn btn-secondary"><a href="{{route('connectionadmi')}}" class="btn btn-secondary">Déconnexion</a></button>
			</div>
		</nav>

	</div>

</header>






@yield('page-content')


    <footer class="footer">
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
<script>

	$(document).ready(function(){

		var showHeaderAt = 150;

		var win = $(window),
				body = $('body');

		// Show the fixed header only on larger screen devices

		if(win.width() > 400){

			// When we scroll more than 150px down, we set the
			// "fixed" class on the body element.

			win.on('scroll', function(e){

				if(win.scrollTop() > showHeaderAt) {
					body.addClass('fixed');
				}
				else {
					body.removeClass('fixed');
				}
			});

		}

	});

</script>


<!-- Demo ads. Please ignore and remove. -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


</body>

</html>






