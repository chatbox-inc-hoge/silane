<?php
require __DIR__."/../vendor/autoload.php";

?>

<!doctype html>
<html lang="en" ng-app="albumSample">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
	<link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/bower_components/angular/angular-csp.css"/>

	<script src="/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="/bower_components/angular/angular.min.js"></script>

	<script src="/common.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">UploadTest</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="row">
	    <div class="col-sm-12" data-ng-controller="imageListController">

<!--            <div class="alert alert-danger">-->
<!--                <strong>hogehoge</strong>-->
<!--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet aperiam architecto autem delectus deleniti et exercitationem fuga ipsam magni molestiae nesciunt nostrum perferendis provident quidem quo, similique vel voluptate.</p>-->
<!--            </div>-->
            <div id="SimpleUploadTab" data-ng-include="'/partial/simpleUpload.html'"></div>
            <div id="ImageListTab" data-ng-include="'/partial/imageList.html'"
                ></div>
        </div>
    </div>


</div>



</body>
</html>