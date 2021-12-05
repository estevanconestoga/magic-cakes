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
    <link rel="stylesheet" href="style.css">
   
  </head>

  <style>

    
/* Contact */

.title-contact {
  color:#3E293D;
  margin-top: 3%;
  text-align: center;
  margin-bottom: 2%;}

.form-contact {
  background-color: #F7C9C9;
  border: 2px solid grey;
  box-shadow: 1px 1px 3px grey;
  border-radius: 25px;
  width: 40%; padding-top:40px;
  margin: 0 auto;
  margin-bottom: 5% ;}

.form-contact textarea {
  width: 70%; height:15vh;
  margin-left: 15%;
  border: none;
  box-shadow: 1px 1px 4px grey;}

.form-contact input {
  width: 70%; padding: 10px;
  background: white;
  margin-left: 15%;
  border: none;
  box-shadow: 1px 1px 4px grey;}

.btn-contact {
  width: 28%; padding: 10px;
  background-color: #3E293D;
  color:#F3C591;
  border:none; 
  border-radius: 5%;
  margin-top: 3%;
  margin-bottom: 5%;
  margin-left: 37%;
  box-shadow: 1px 1px 4px grey;}

.form-contact label {
  color:#3E293D;
  margin-left: 15%;
  margin-top:20px;}

.form-contact span {
  color: red;
  margin-left: 15%;
  width: 70%;  
  display: block;}

.title-result {
  text-align: center;
  }
  </style>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="logo" src="logo_cake.svg" width="110px" height=110px" alt=""></a>
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
  </body>

</html>