 <!DOCTYPE html>
    <html lang="en" ng-app="kipsoen">

    <header>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/background.css" rel="stylesheet">
        <script src="js/jquery1.js"></script>
        <link href="css/bonche.css" rel="stylesheet">
        <script src="angular/angular.js"></script>
        <script src="angular/angular-route.js"></script>
        <script src="angular/angular-resource.js"></script>

        <script src="controllers/studentResultController.js"></script>
        <script src="controllers/Examination.js"></script>
        <script src="services/StudentResultService.js"></script>
        <script src="services/ExaminationService.js"></script>

        <script src="js/student.js"></script>
        <script scr="js/route-styles.js"></script>



    </header>

    <div id="background">
        <div class="spicy">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">

                    <div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>


                            <li><a href="student#/results-list">Results</a></li>



                        </ul>
                        <ul class="nav navbar-nav navbar-right">

                            <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> llololo</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>


        <div class="container">

            <div class="row">
                <div class="view" ng-view></div>
            </div>


        </div>


    </div>
    </html>


