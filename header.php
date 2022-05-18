<?php 
	require_once "db.inc.php" ;	
	session_start();
?>

<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php print $title; ?></title>
    
    <link rel="icon" 
      type="image/png" 
      href="../assets/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your page description here">
    <meta name="author" content="">
    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
   
       <!-- javascript -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body style="min-height:100%">
<div id="loginbg" style="width: 100%; height: 100%; position: fixed; backdrop-filter:blur(6px);z-index:1074;display:none"></div>
<?php 
	include 'loginhelper.php';
	include 'loginform.php' ;
?>
  <section id="header" class="header">
    <div class="container-fluid" style="padding:0px;margin-bottom:3%">
      <nav class="navbar navbar-expand-xl navbar-dark align-items-end shadow-sm" style="background-color:#1f4d79;width:100%;padding-left:3%;padding-right:3%">
            <a class="navbar-brand" href="../">
              <img src="../assets/elasticlogo.png" width="400px" style="max-width:100%" alt="Elastic Maths">
            </a>

        <button class="navbar-toggler justify-content-end collapsed" type="button" data-toggle="collapse" data-target="#navbarToggler1" aria-controls="navbarToggler1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse justify-content-end collapse" id="navbarToggler1" style="">

          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="../">Activities</a>
            </li>
			<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbar-Dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Classroom
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Join a class</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../teacher/">Resources for Teachers</a>
              </div>
            </li>
            <li class="nav-item">
              <?php if(isset($_SESSION['loggedin'])){ 
			  			echo('<a class="nav-link" href="../logout.php">Log out</a>'); 
			  		} else {
						echo('<a class="nav-link showLogin" href="#">Sign in</a>'); 
					}
				?>
            </li>
          </ul>
        </div>
      </nav>
  
      </div>
      <script>
	  	$(function() {
			$(".showLogin").click(function() {
				$("#loginoverlay").show();
				$("#loginbg").show();
			})
		});
			
	  </script>
      
      
  </section>