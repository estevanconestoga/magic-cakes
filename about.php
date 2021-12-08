<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Cakes | About Us</title>
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
              <a class="nav-link" href="about.php">ABOUT </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="contact.php">CONTACT US</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>

    <main>
        <h1 class="page-title">About Us</h1>
        <div class="about-div">
          <H2 class="about-title">Toronto's coolest Bakery</H2>
          <p class="about-text">Magic cakes has established its reputation as one of Toronto's best patisseries by maintaining the highest standards in the production of cakes and cookies.<br>We pride ourselves on producing products that are not only beautiful to the eye but made with quality and the freshest ingredients.<br>Don't forget to add Magic Cakes into your next gift basket or celebration!<br><br>Connect with us on Instagram and see our latest creations.
          </p>
        </div>

    </main>
   
     <?php
        require "footer.php";
      ?>
    
    </body>
  
  </html>
