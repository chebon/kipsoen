<!DOCTYPE html>
<html lang="en"  ng-app="kipsoen">

<head>


    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
   <!-- <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
   <!-- <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="js/jquery1.js"></script>

    <script src="angular/angular.js"></script>
    <script src="angular/angular-route.js"></script>
    <script src="angular/angular-resource.js"></script>
    <script src="js/app.js"></script>
    <script src="controllers/studentController.js"></script>
    <script src="services/StudentService.js"></script>
    <script src="controllers/teacherController.js"></script>
    <script src="services/TeacherService.js"></script>
    <script src="controllers/ParentController.js"></script>
    <script src="services/ParentService.js"></script>
    <script src="controllers/ResultController.js"></script>
    <script src="services/ResultService.js"></script>
</head>

<!--<body id="page-top" class="index" >
<div class="container-fluid">-->
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top"> BONCHE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>

                <li>
                    <a class="page-scroll" href="#student-list">Students</a>
                </li>

                <li>
                    <a class="page-scroll" href="#parent-list">parents</a>
                </li>
                <li>
                    <a class="page-scroll" href="#teacher-list">teachers</a>
                </li>
                <li>
                    <a class="page-scroll" href="#result-list">results</a>
                </li>

                <li>
                    <a class="page-scroll" href="#undermaitainacne">mails</a>
                </li>


                <!--<li>
                    <a class="page-scroll" href="#team">Team</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>-->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid-fluid -->
</nav>





<!-- Header -->
<header>



    <div class="container-fluid">
     <div class="intro-text">


         <div class="container-fluid"ng-view>
         </div>
</header>




<!-- Services Section -->


<!-- Portfolio Grid Section -->


<!-- About Section -->

<!-- Team Section -->

<!-- Clients Aside -->


<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-0>
                <span class="copyright">Copyright &copy; bonche  2015</span>
            </div>
<!--            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
-->            <!--<div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="#">Privacy Policy</a>
                    </li>
                    <li><a href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>
-->        </div>
    </div>
</footer>

<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->

<!-- Portfolio Modal 2 -->

<!-- Portfolio Modal 3 -->

<!-- Portfolio Modal 4 -->

<!-- Portfolio Modal 5 -->

<!-- Portfolio Modal 6 -->



<!-- jQuery -->


<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>-->
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/agency.js"></script>

</body>

</html>