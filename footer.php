<footer class="container" id="container2">
      <div class="container-fluid text-center text-md-left">
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3">
            <h5 class="text-uppercase footer-content-h ft-nav-title">Subscribe and Save</h5>
            <p class="footer-content-b">Subscribe to our Newsletter and receive <br> offers difrectly to you inbox.</p>
            
            <form class="form-inline" method="post">              
              <div class="form-group form-footer mx-sm-3 mb-2">                
                <label for="inputPassword2" class="sr-only">Your Email</label>
                <input type="text" name="email" class="form-control form-footer" id="subscribe_email" placeholder="Your Email">
                <?php
                    require_once "connect.php";
                    
                    if(isset($_POST['subscribe']))
                    {
                        $error='';
                        if(!empty($_POST['email'])) {
                            $email = $_POST['email'];
                        
                            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $error =  "* Your email is incorrect '$email' ";
                                $email = NULL;        
                            }
                        }else{
                            $error =  "* Please enter your email ";
                            $email = NULL;        
                        }
                        if(!$error)
                        {
                            $email=prepare_string($sql_connection,$email);
                            $sql="INSERT INTO `subscribe` (`Email`) VALUES ('$email');";
                            $qr_result=mysqli_query($sql_connection,$sql);
                            if (!$qr_result)
                            {
                                $error_text=mysqli_error($sql_connection);
                                if (stristr($error_text,'Duplicate entry'))
                                {
                                    echo "<span class='subscripe-error'>You have already subscribed!</span>";
                                }else echo "<span class='subscripe-error'>Some error on Database</span>";
                            }
                            else echo "<span class='subscripe-ok'>You are subscribed :)</span>";
                        }
                        else echo "<span class='subscripe-error'>$error</span>";

                    }  
              ?>              
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