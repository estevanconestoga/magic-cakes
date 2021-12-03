<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Cakes | Home</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <!-- css link  -->
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="logo" src="Assets/logo_cake.png" alt="Website Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
          aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">ABOUT </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="contact.html">CONTACT US</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
    <!-- previous arrow button -->

    <div class="main">
      <button id="prev-btn" class="arrow">
        <i class="fas fa-arrow-circle-left"></i>
      </button>


      <!-- book -->
      <div id="book">
        <!-- paper1 -->
        <div id="p1" class="paper">
          <!-- front page -->
          <div class="front">
            <div id="f1" class="front-content">
              <img src="Assets/cookie.jpg" class="cookie-img" alt="" width="300px" height="300px">
              <a  id="start-btn" href="#p2">start here</a>
            </div>

          </div>
          <!-- back page -->
          <div class="back">
            <div id="b1" class="back-content">
              <a href="#"><img class="" src="Assets/bakery.png" width="350px" height="auto" alt=""></a>

            </div>

          </div>

        </div>



        <!-- paper2 -->
        <div id="p2" class="paper">
          <!-- front page -->
          <div class="front">
            <div id="f2" class="front-content">
              <h2 class="home-head">What would you like today?</h2>
              <img id="home-cookies" class="option-img" src="Assets/cookies.jpg" alt="" width="150px" height="120px">
              <img  id="home-cake"class="option-img" src="Assets/cakes.jpg" alt="" width="150px" height="120px">
              <a  id="cookie-btn" class="refer-btn" href="cookie.php">Cookies</a>
              <a  id="cake-btn" class="refer-btn"href="cake.php">Cakes</a>


            </div>

          </div>
          <!-- back page -->
          <div class="back">
            <div id="b2" class="back-content">
              <a href=""><img class="logo" src="logo_cake.svg" width="200px" height="200px" alt=""></a>

            </div>

          </div>

        </div>

      </div>

      <!-- next button -->
      <button id="next-btn" class="arrow">
        <i class="fas fa-arrow-circle-right"></i>

      </button>
    </div>
    <script src="menu.js"></script>

    <footer class="container">
      <div class="container-fluid text-center text-md-left">
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3">
            <h5 class="text-uppercase footer-content-h ft-nav-title">Subscribe and Save</h5>
            <p class="footer-content-b">Subscribe to our Newsletter and receive <br> offers difrectly to you inbox.</p>
            <form class="form-inline">
              <div class="form-group form-footer mx-sm-3 mb-2">
                <label for="inputPassword2" class="sr-only">Your Email</label>
                <?php
      

                ?>
                <input type="text" name="email"class="form-control form-footer" id="subscribe_email" placeholder="Your Email">
              </div>
              <button type="submit" name="subscribe" class="btn btn-primary mb-2">Subscribe</button>
            </form>
          </div>
          <hr class="clearfix w-100 d-md-none pb-3">

          <div class="col-md-6 mb-md-0 mb-3">

            <h5 class="text-uppercase ft-nav-title">Navigation</h5>

            <ul class="list-unstyled">
              <li>
                <a href="index.php" class="ft-nav-item">Home</a>
              </li>
              <li>
              <li class="nav-item">
              <a class="nav-link" href="contact.php">MENU</a>
            </li>
                <a href="about.php" class="ft-nav-item">About</a>
              </li>
              <li>
                <a href="contact.php" class="ft-nav-item">Contact Us</a>
              </li>
            </ul>

          </div>
        </div>
      </div>
    </footer>
  </body>

</html>