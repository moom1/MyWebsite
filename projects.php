<?php 
$page = "projects";
require_once('database/connect.php');
require_once('database/dbFunctions.php');
?>

<?php $page = "projects";?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <?php include "head.php"?>
        <title>Projects</title>
    </head>

    <!-- Navigation -->
    
    <?php include "topNav.php"?>
    <hr class="featurette-divider d-none d-sm-inline-flex">
    <hr class="featurette-divider-small d-md-none d-md-none">


    <div class="container">

        <div class="row">
          
            <?php 
            
            for($i = 0; $i < 1; $i++ ){ ?>
              
              <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary h2">QuizGo</strong>
                  <div class="mb-1 text-muted">N/A</div>
              <p class="card-text mb-auto">QuizGo is a platform built to facilitate MCQ testing in an educational environment. It is Built to serve lecturers, advisors, and most importantly, students</p>
                  
              <a href="project-details/quizgo/quizgo-intro" class="stretched-link">view project details</a>
              </div>
              <div class="col-auto d-none d-lg-block">         
                  <img src="resources/pictures/Logo3.png" alt="" width="200" height="250" >
              </div>
              </div>
             </div> 

            <?}

            ?>  
            
        </div>

            

    </div>


   

        
</html>