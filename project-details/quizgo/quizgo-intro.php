<?php

$page = "projects";
$dir = dirname(__FILE__);
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <?php include "/home2/abdulrb0/public_html/portfolio/head.php"?>
        <title>Projects - QuizGo</title>
    </head>

    <!-- Navigation -->
    
    <?php include "/home2/abdulrb0/public_html/portfolio/topNav.php"?>

    <div class="container p-3 text-center" style="background-image: url('/portfolio/resources/pictures/blog-bg.png'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div  class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal text-white">QuizGo</h1>
        <p class="lead font-weight-normal text-white">QuizGo is a platform built to facilitate MCQ testing in an educational environment. It is Built to serve lecturers, advisors, and most importantly, students. <a href="/portfolio/resources/documents/QuizGo-report.pdf">Techical report and Documentation </a></p>
        </div>

    </div>



    <div class="container">
  <div class="card-deck mb-3 text-center">

    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Technologies</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Back End</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>PHP</li>
          <li>MySQL</li>
        </ul>

        <h1 class="card-title pricing-card-title">Front End</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Bootstrap</li>
          <li>Custom html</li>
          <li>Custom css</li>
          <li>Custom js</li>
        </ul>
      </div>
    </div>

    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Development phases</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">phase 1</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Requested as a web development final project</li>
          <li>Built in 5 days with no long term considerations</li>
        </ul>

        <h1 class="card-title pricing-card-title">phase 2</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>started to consider the project as a long term product for my portfolio</li>
          <li>Used my base code to build an improved, yet still offline version</li>
        </ul>

        <h1 class="card-title pricing-card-title">phase 3</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Want to make it live</li>
          <li>currently working on the demo</li>
        </ul>
      </div>
    </div>
    
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Demo details</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">TBA</h1>
        <ul class="list-unstyled mt-3 mb-4">
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary disabled" href="http://abdulrahman-yousef.com/quizgo/html/general/login.php">Try the demo! (SOON)</button>
      </div>
    </div>
  </div>
        
</html>