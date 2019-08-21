
<!DOCTYPE html>
<html>
<head>
	<title>{{'login'}}</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <link rel="stylesheet" href="{{url('assets/sga/css/index.css')}}">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta charset="utf-8">

</head>
<body>

	<nav>
		<div class="nav-wrapper blue darken-1">
			<a href="" class="brand-logo"><img src="{{url('assets/sga/img/logo.svg')}}"></a>
		</div>
  </nav>



  @yield('body')



  <footer class="page-footer blue darken-1">
    <script src="{{url('assets/sga/js/index.js')}}"></script>
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