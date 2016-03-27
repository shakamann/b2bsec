<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alibaba Dexpose - An email security expose for users of B2b services. ...Security through awareness</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style/style.css"/>
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/favicon.png"/>

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
	<section style="padding-top:20px" class="header-area container">
		<div class="row">
			<div class="col-md-8">
				<header class="clearfix">
					<section id="branding">
					<a href=""><img src="images/dexpose-logo.png" alt="Security through awareness"></a>
					</section>
				</header>
			</div>
			<div class="col-md-4">
			<ul class="nav navbar-nav navbar-right">
				  <li role="presentation"><a href="/login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-sign-in"></i> Login</a></li>
				</ul>
			
			</div>
		</div>
		
    
    </section>    
	<div class="spacer"></div>

	
	

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
