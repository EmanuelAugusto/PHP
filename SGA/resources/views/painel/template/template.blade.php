
<!DOCTYPE html>
<html>
<head>
	<title>{{ $title ?? 'sga'}}</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	 <link rel="stylesheet" href="{{url('assets/sga/css/index.css')}}">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta charset="utf-8">

</head>
<body>

	<nav>
		<div class="nav-wrapper blue darken-1">
			<a href="" class="brand-logo"><img src="{{url('assets/sga/img/logo.svg')}}"></a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
      <li><a href="{{url('/logout')}}">Sair<i class="material-icons right">exit_to_app</i></a></li>   
      </ul>
		</div>
	</nav>
	<ul class="sidenav" id="mobile-demo">
		<li><a href="{{url('/logout')}}">Sair<i class="material-icons right">exit_to_app</i></a></li>
	</ul>
  <div class="container">



	@yield('body')


</div>
	<footer id="footer" class="page-footer blue darken-1">
    <script src="{{url('assets/sga/js/index.js')}}"></script>
    <script src="{{url('assets/painel/js/painel.js')}}"></script>
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Sistema Acadêmico</h5>
              </div>
              
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 UNU DIGITAL
            </div>
          </div>
        </footer>
</body>
</html>