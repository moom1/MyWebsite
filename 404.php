<!DOCTYPE html>
    <html lang="en">
    <head>
        <?php include "head.php"?>
        <title>About</title>
    </head>

    <style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background: url('https://source.unsplash.com/J3cXXMsNsjw');
  height: 130%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: #FFF;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
</style>

    <!-- Navigation -->
    
    <?php include "topNav.php"?>

    <body>

    <div class="bgimg">
    <div class="topleft">
    </div>
    <div class="middle">
        <h1>Page doesn't exist, contact me if you think it should be here!</h1>
        <a class="btn btn-secondary" href="home">Back to home page</a>
        <hr>
    </div>
    <div class="bottomleft">
    </div>
    </div>

</body>


        
</html>