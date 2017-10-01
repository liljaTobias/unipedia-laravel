<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Unipedia</title>

    <!-- Bootstrap Core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::asset('css/frontpage.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <login>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <a class="btn btn-danger pull-right" href="admin/dashboard">Login</a>
                </div>
            </div>
        </div>
    </login>

	<header class="logo-header">
		<img class="img-center" src="{{URL::asset('img/logo-400x.png')}}" width="200px" height="200px">
	</header>
		
    <!-- Content Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="brand-text">Unipedia</h1>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-8 col-md-offset-2">
                	<form action="#">
                		<div class="form-group">
	                		<div class="input-group">
	                			<div class="input-group-addon">Sök efter kurs:</div>
	                			<input type="text" class="form-control" placeholder="Ex. EDA672">
	                		</div>
                		</div>
                		<button type="submit" class="btn btn-danger btn-block">Sök</button>
                	</form>
                </div>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

</body>

</html>