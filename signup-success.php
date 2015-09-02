<?php
if (isset($_POST['gamertag'])) {

$userName = $_POST['gamertag'];
$userData  = $userName;
  foreach ($_POST as $key => $value){
    if($key != 'gamertag'){
      $userData = $userData.",".$value;
    }
  }
  file_put_contents("tournaments1.txt", $userData.PHP_EOL, FILE_APPEND);
}



?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta HTTP-EQUIV="refresh" content="3"; url="http://snoopy.rlc.manhattan.edu/~snguyen01/source/SmashCorner-2/attendees.php">

    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Smash Corner</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="bootstrap/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="bootstrap/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>



    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
                <a href="index.html"><img class="image" src="bootstrap/img/logo.png"></a>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="tournaments.html">Tournaments</a></li>
                            <li><a href="pastresults.html">Past Results</a></li>
                            <li><a href="attendees.php">Attendees</a></li>
                            <li><a href="twitch.html">Twitch</a></li>




                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">SIGN UP SUCCESS!</h4>
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                    <br/>If you are not redirected automatically, follow the <a href="attendees.php">link</a>.
                    

                                    
</div>
 </div>
 </div>
 </div>

    <!-- CONTENT-WRAPPER SECTION END-->
<div class="navbar-sm  navbar-fixed-bottom navbar-inverse">
  <div class="container">
    <span class="navbar-text">

      <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
      SmashCorner@gmail.com

    </span>
  </div>
</div>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="bootstrap/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>