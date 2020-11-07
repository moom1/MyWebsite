<?php 
$page = "projects";
require_once('database/connect.php');
require_once('database/dbFunctions.php');
$tests = read('test');
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
            
            foreach($tests as $test){ ?>
              
              <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary h2">Coming soon</strong>
                  <div class="mb-1 text-muted">N/A</div>
              <p class="card-text mb-auto">I'll probably talk about the projects page when its launched</p>
                  
              
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