<nav id="navbar" class="navbar navbar-light navbar-expand-md fixed-top">
    <div class="container">
        <a class="navbar-brand" href="home"><img src="resources/pictures/logo.png" alt="logo" id="logo"></a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon custom-toggler"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link <?php echo ($page == "about" ? "active" : "")?> " href="about">ABOUT</a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?php echo ($page == "projects" ? "active" : "")?>" href="projects" tabindex="-1" aria-disabled="true">Projects</a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?php echo ($page == "blog" ? "active" : "")?>" href="blog">Blog</a>
                </li>
            </ul>

            <span class="vertical-line d-none d-sm-inline-flex"></span>


            <ul class="navbar-nav mr-auto d-none d-sm-inline-flex">
                <li class="">
                <a class="" href="https://twitter.com/moom1"><img src="resources/pictures/Twitter.png" class="socialMedia" alt="Twitter"></a>
                </li>
                <li class="">
                    <a class="" href="linkedin.com/in/abdulrahman-ayash-yousef-170a96116"><img src="resources/pictures/LinkedIN.png"  class="socialMedia" alt="LinkedIN"></a>
                </li>
                <li class="">
                    <a class="" href="mailto:aayyash9@gmail.com"><img src="resources/pictures/E-mail.png"  class="socialMedia" alt="E-mail"></a>
                </li>
            </ul>

            <div class="container d-flex justify-content-center d-md-none d-md-none">
                    <a class="" href="https://twitter.com/moom1"><img src="resources/pictures/Twitter.png" class="socialMedia" alt="Twitter"></a>
                    <a class="" href="https://www.linkedin.com/in/abdulrahman-ayash-yousef-170a96116"><img src="resources/pictures/LinkedIN.png"  class="socialMedia" alt="LinkedIN"></a>
                    <a class="" href="mailto:aayyash9@gmail.com"><img src="resources/pictures/E-mail.png"  class="socialMedia" alt="E-mail"></a>
            </div>


        </div> 
    
    </div>
  </nav>
