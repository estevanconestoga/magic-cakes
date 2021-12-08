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
