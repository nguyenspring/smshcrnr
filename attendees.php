

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
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
                    <a  href="index.html"><img src="bootstrap/img/logo.png" /></a>
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
                            <li><a class="menu-top-active"  href="attendees.php">Attendees</a></li>
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
                        <h1 class="page-head-line">Attendees</h1>
                        <center>Check out the attendees of the upcoming 3 tournaments!</center>






   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Smash Corner #9
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">

       <?php
$lines = file('tournaments1.txt'); //here's the filename
?>

<table class="table">
<?php
foreach ($lines as $line) {
list($a,$b,$c,$d) = explode(',', $line);
print "<tr>
<td>$a</td>
<td>$b</td>
<td>$c</td>
<td>$d</td>

</tr>";
}
?>
</table>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Smash Corner #10
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <?php
$lines = file('tournaments2.txt'); //here's the filename
?>

<table class="table">
<?php
foreach ($lines as $line) {
list($a,$b,$c,$d) = explode(',', $line);
print "<tr>
<td>$a</td>
<td>$b</td>
<td>$c</td>
<td>$d</td>

</tr>";
}
?>
</table>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                   <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Smash Corner #11
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <?php
$lines = file('tournaments3.txt'); //here's the filename
?>

<table class="table">
<?php
foreach ($lines as $line) {
list($a,$b,$c,$d) = explode(',', $line);
print "<tr>
<td>$a</td>
<td>$b</td>
<td>$c</td>
<td>$d</td>

</tr>";
}
?>
</table>
      </div>
    </div>
  </div>





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
