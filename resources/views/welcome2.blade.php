<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bukar - Um sistema de estudo independente</title>

    <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{URL::asset('css/landing-page.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand topnav" href="#">Bukar</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#about">Acerca</a>
                </li>
                <li>
                    <a href="#services">Serviços</a>
                </li>
                <li>
                    <a href="#contact">Contacto</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<!-- Header -->
<a name="about"></a>
<div class="intro-header">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h1>Bukar</h1>
                    <h3>Uma aplicação para o estudo indepente dos alunos do ensino primário e secundário geral</h3>
                    <hr class="intro-divider">

                    <h3>Registe-se</h3>
                    <ul class="list-inline intro-social-buttons">
                        <button type="button" class="btn btn-lg btn-default" data-toggle="modal" data-target="#reg-aluno">Aluno</button>
                        <button type="button" class="btn btn-lg btn-default" data-toggle="modal" data-target="#reg-professor">Professor</button>
                        <button type="button" class="btn btn-lg btn-default" data-toggle="modal" data-target="#reg-director">Director</button>
                        <button type="button" class="btn btn-lg btn-default" data-toggle="modal" data-target="#reg-gestor">Gestor de Conteúdo</button>
                        <button type="button" class="btn btn-lg btn-default" data-toggle="modal" data-target="#reg-administrador">Administrador</button>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.intro-header -->

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-inline">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
                <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>

@include('registo')

<script src="{{URL::asset('js/jquery.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.js')}}"></script>

</body>
</html>
