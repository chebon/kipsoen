

<!DOCTYPE html>
<html lang="en" ng-app="kipsoen">

<header>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/drunken-parrot.css" rel="stylesheet">
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <script src="js/jquery1.js"></script>
    <link href="css/bonche.css" rel="stylesheet">
    <script src="angular/angular.js"></script>
    <script src="angular/angular-route.js"></script>
    <script src="angular/angular-resource.js"></script>
    <script src="js/principle.js"></script>
    <script src="controllers/Examination.js"></script>

    <script src="controllers/announcements.js"></script>
    <script src="controllers/classes.js"></script>
    <script src="controllers/studentController.js"></script>
    <script src="services/StudentService.js"></script>
    <script src="controllers/teacherController.js"></script>
    <script src="services/TeacherService.js"></script>
    <script src="controllers/ParentController.js"></script>
    <script src="services/ParentService.js"></script>
    <script src="controllers/ResultController.js"></script>
    <script src="services/ResultService.js"></script>
    <script src="services/ExaminationService.js"></script>
    <script src="services/secretary.js"></script>
    <script src="services/classes.js"></script>
    <script src="services/AnnouncementService.js"></script>
    <script scr="js/route-styles.js"></script>






</header>

<div id="background">
    <div class="spicy">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">

                <div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="principles#/student-list">Students</a></li>
                        <li><a href="principles#/teacher-list">teachers</a></li>
                        <li><a href="principles#/announcement-list">Announcements</a></li>




                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> logout</a></li>
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

