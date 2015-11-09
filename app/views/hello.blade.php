<!DOCTYPE html>
<html lang="en" ng-app="homepage">

<head>

<head>
    <meta charset="utf-8">
    <title>Bonche</title>
    <meta name="description" content="Drunken Parrot UI Kit is a Twitter Bootstrap Framework design and Theme."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Loading Font Awesome Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Loading Drunken Parrot UI -->
    <link href="css/drunken-parrot.css" rel="stylesheet">


    <!-- <link rel="shortcut icon" href="images/favicon.ico"> -->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="angular/angular.js"></script>
    <script src="services/AnnouncementService.js"></script>
    <script src="controllers/announcements.js"></script>
    <![endif]-->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>


    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>




    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="/">Home</a>
    </div>

    <ul class="nav navbar-nav navbar-right navbar-icons">

        <li>


                <a class="navbar-brand" href="/login">Login</a>


        </li>
    </ul>
    <p class="navbar-text navbar-right"> <a href="#" class="navbar-link"></a></p>

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
        <div class="col-md-4 well">
            <h2> Mission</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>

        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 well">
            <h2>Vision </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>

        </div>

        <div class="col-md-4 well">
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