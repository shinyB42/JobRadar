<html>

<head>
    <meta http-equiv="Content-Language" content="en-ca">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./Plugins/style.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript"src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCg0Mb_ccWZ7BpyJxwuf388rZZcw2lIL1o"></script>
    <!--<script type="text/javascript" src="Plugins/JRadar.js"></script>-->
    <link rel="stylesheet" href="Plugins/JRadar.css"/>
    <title>Job Radar</title>
</head>

<body onload="javascript:initialiserCarte();">
<?php
require_once('Controlleur/ActionBuilder.php');
if(isset($_REQUEST["action"])){
    $vue = ActionBuilder::getAction($_REQUEST["action"])->execute();
} else{
    $vue = ActionBuilder::getAction("")->execute();
}
include_once ('vues/'.$vue.'.php');
?> 
    
</body>
</html>






