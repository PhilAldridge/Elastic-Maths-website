<?php 
	$title = 'Elastic Maths';
	include "header.php"; 

 if(!isset($_SESSION['loggedin'])){ include 'welcomemessage.php'; }
 ?>
      
        <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow shadow hover-opacity">
               	<a href="./smplfy/">
                	<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Smplfy" style="display: block;" src="./assets/smplfylogo.png" data-holder-rendered="true">
                </a>
                	<div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
               
                <div class="card-body">
                  <p class="card-text">Smplfy</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">Practice simplifying algebraic expressions including collecting like terms, expanding and factorising brackets and algebraic fractions.</small>
                  </div>
                </div>
                
              </div>
            </div>
            
        </div>
      </div>
      </div>
<?php 
	include "footer.php"; 
?>