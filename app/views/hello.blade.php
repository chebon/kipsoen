<!DOCTYPE html>
<html lang="en" ng-app="homepage">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Homepage</title>

    <script src="angular/angular.js"></script>
    <script src="angular/angular-resource.js"></script>
    <script src="js/homepage.js" ></script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/small-business.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>


    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>




    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="http://placehold.it/150x50&text=Logo" alt="">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/login">login</a>
                </li>
                <li>
                    <a href="/contact">contact</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    <!-- Heading Row -->
    <div class="row">
        <div class="col-md-8">


            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="/first" alt="...">
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img src="second" alt="...">
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img src="third" alt="...">
                        <div class="carousel-caption">

                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div> <!-- Carousel -->






        </div>
        <!-- /.col-md-8 -->
        <div class="col-md-4" ng-controller="AnnouncementController">
            <h2>Announcements</h2>
            <div ng-repeat="ann in try">
            <h3>@{{ ann.name }}  </h3>
                <h3>@{{ ann.date }}</h3>
            <p>@{{ ann.info }}</p>

            </div>
        </div>
        <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Well -->
    <div class="row">
        <div class="col-lg-12">
            <div class="well text-center">
               Mottto::: "What the individual creates is an expression of the individual, just as the individual is an expression of the genes."
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">

        <!-- /.col-md-4 -->
        <div class="col-md-4">
            <h2> Mission</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>

        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4">
            <h2>Vision </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>

        </div>

        <div class="col-md-4">
            <h2>About</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
            <a class="btn btn-default" href="/about">More Info</a>
        </div>

        <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Footer -->


</div>
<!-- /.container -->

<!-- jQuery -->


<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>