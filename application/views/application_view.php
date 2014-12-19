<!DOCTYPE html>
<html ng-app="brokenstuff">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>BrokenStuff</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular-route.js"></script>      
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="app.js"></script>
        <script src="js/service/geolocation.js"></script>
        <script src="js/service/report.js"></script>
        <script src="js/controller/reports.js"></script>
        <script src="js/controller/locations.js"></script>
        <script src="js/controller/status.js"></script>
        <script src="js/directive/picture.js"></script>


    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div data-ng-controller="statusController" class="status">
        <div ng-show="qStatus" >{{qStatus}}</div>
        <i ng-show="qStatus" class=" fa fa-5x fa-spinner fa-spin"></i>
    </div>
    <div id="view"></div> 
	
    <div ng-view></div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>
