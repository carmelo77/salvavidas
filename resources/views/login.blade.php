<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="{{ url('/') }}/admin/img/favicon.png">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('/') }}/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="{{ url('/') }}/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ url('/') }}/admin/css/style.css" rel="stylesheet">
    <link href="{{ url('/') }}/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="{{ url('/sign-in') }}" method="POST">
        {{ csrf_field() }}
        <h2 class="form-signin-heading">Iniciar Sesión</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" name="username" placeholder="Username" autofocus />
            <input type="password" class="form-control" name="password" placeholder="Password" />
            <button class="btn btn-lg btn-login btn-block" type="submit">Entrar</button>
        </div>
      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ url('/') }}/admin/js/jquery.js"></script>
    <script src="{{ url('/') }}/admin/js/bootstrap.min.js"></script>


  </body>
</html>
