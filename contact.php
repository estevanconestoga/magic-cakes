<<<<<<< HEAD
<?php include 'includes/header.php'; ?>
       <!-- /* Alternative: isset($_POST['name']) 
        if(count($_POST) > 0) {
          if(!filter_input(INPUT_POST,"name")){
            echo 'Full Name is mandatory', '<br>';
          }
          if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            echo 'Wrong email format entered', '<br>';          
          }
        } 
      -->            
    <main>
      <h2 class="title-contact">Contact Us</h2>
      <form action="#" method="post" class="form-contact">
        <div class="form-row">
          <div class="form-grup contact-us col-md-10">
            <label class="form-label" for="name">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="John Doe">
          </div>
          <div class="form-grup contact-us col-md-10">
            <label class="form-label" for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="johndoe@jd.com">
          </div>
          <div class="form-grup contact-us col-md-10">
            <label class="form-label" for="message">Your Question</label>
            <textarea class="form-control" id="message" name="message" placeholder="Do you guys do cakes for corporate parties?">  
          </textarea>
        </div>
        <button class="btn btn-primary btn-contact">Submit</button>
      </form>
</main>
    <?php include 'includes/footer.php'; ?>
=======
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <!-- css link  -->
    <link rel="stylesheet" href="style_c.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="logo" src="logo_cake.svg" width="150px" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
          aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="menu.html">ABOUT </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="contact.html">CONTACT US</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
    <main>
      <h2 class="title-contact"><strong>CONTACT US</strong></h2>
      <div class="contact-grid">
      <div class="form-contact">
      <?php 
        require "result_contact.php";
      ?>
      </div>
    </main>

      <?php
        require "footer.php";
      ?>
      
  </body>

</html>
>>>>>>> 32faac0b6f8d157804c6670b63d8eda5cbe3e1e3
