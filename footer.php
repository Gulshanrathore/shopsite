<!-- Footer Start Here -->
    <footer class="footer footer_style2">
      <div class="footer_top secondary_bg section_padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="footer_logo"> <a href="index.html"><img src="assets/images/logo_white.png" alt="image"></a> </div>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.</p>
            </div>
            <div class="col-lg-3">
              <nav>
                <h6>My Account</h6>
                <ul>
                  <li><a href="acc-order.html">My orders</a></li>
                  <li><a href="#">Returns</a></li>
                  <li><a href="acc-order-detail.html">Order History</a></li>
                  <li><a href="acc-wishlist.html">Wishlist</a></li>
                  <li><a href="checkout.html">Checkout</a></li>
                  <li><a href="my-account.html">My Account</a></li>
                  <li><a href="#">Unsubscribe Notification</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-3">
              <nav>
                <h6>Customer Service</h6>
                <ul>
                  <li><a href="#">My orders</a></li>
                  <li><a href="#">Returns</a></li>
                  <li><a href="#">Order History</a></li>
                  <li><a href="#">Wishlist</a></li>
                  <li><a href="#">Checkout</a></li>
                  <li><a href="#">My Account</a></li>
                  <li><a href="#">Unsubscribe Notification</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-3">
              <div class="footer_newsletter">
                <h6>Newsletter</h6>
                <p>Sign up for our newsletter to get up-to-date from us</p>
                <form>
                  <div class="form-group">
                    <input type="text" placeholder="Name" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="text" placeholder="Email Address" class="form-control">
                  </div>
                  <button type="submit" class="btn w-100">Subscribe</button>
                </form>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="space-60"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="footer_gray_bg footer_social">
                <div class="content_center">
                  <ul class="social_group_style">
                    <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a> </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="pay_method footer_gray_bg">
                <div class="content_center">
                  <figure class="figure"> <img src="assets/images/payment_options.png" alt="image"> </figure>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="footer_gray_bg footer_web">
                <div class="content_center"> <span><a href="mailto:hello@webrul.com">hello@weburl.com</a></span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <p>&copy; BeamyShop 2017. All right reserved.</p>
            </div>
            <div class="col-lg-6">
              <ul class="footer_link pull-right">
                <li><a href="privacy-policy.html">Returns Policy</a></li>
                <li class="divider_line">/</li>
                <li><a href="terms-conditions.html">Terms of use</a></li>
                <li class="divider_line">/</li>
                <li><a href="privacy-policy.html">Privacy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer End Here --> 
    
    <!-- Login Register Overlay Start Here -->
    <div class="modal fade login_register" id="login">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
          <div class="modal-body">
            <div class="login_overlay_bg">&nbsp;</div>
            <div class="login_reg_content">
              <!-- Login Block Start Here -->
              <div class="login_overlay_content" id="login_overlay">
                <h2>Login</h2>
<?php 

if(isset($_POST['sub']))
            { 
                $em=$_POST['email'];
                $ps=$_POST['pass'];
                $data=mysqli_query($con,"select * from `user` where `uemail`='$em' and `upassword`='$ps'");
                if(mysqli_num_rows($data)==1) 
                {
                    $_SESSION['ses']="abc123";
          $_SESSION['em']=$em;
                    echo"<script>alert('You have sucessfull Login')</script>";
                }
                else
                {
                    $err="Wrong email or password";
                }

            }
            
        ?>

                <form method="post">
                  <div class="form-group">
                    <input type="email" name="email" required="" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" name="pass" class="form-control" placeholder="Password">
                  </div>
                  <input type="submit" name="sub" value="Login">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Login Register Overlay End Here -->
     <!-- Login Register Overlay Start Here -->
    <div class="modal fade login_register" id="register">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
          <div class="modal-body">
            <div class="login_overlay_bg">&nbsp;</div>
            <div class="login_reg_content">
              <!-- Login Block Start Here -->
              <div class="login_overlay_content" id="login_overlay">
                <h2>Register</h2>
<?php
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phoneno'];
  $password=$_POST['password'];

  $data=mysqli_query($con,"INSERT INTO `user`( `uname`, `uemail`, `uphoneno`, `upassword`) VALUES ('$name',' $email','$phone','$password')");
 if($data==true)
{
    echo"<script>alert('value inserted');location ='user.php'</script>";
}
else
{
    echo "<script>alert('value not inserted');</script>";
}
}

?>

                <form method="post">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Useremail">
                  </div>
                  <div class="form-group">
                    <input type="tel" name="phoneno" class="form-control" placeholder="Userphoneno">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password"class="form-control" placeholder="Password">
                  </div>
                  <input type="submit" name="submit" class="btn" value="Register Now">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Login Register Overlay End Here -->
    <!-- Back-to-top -->
    <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
    <!-- Back-to-top End Here --> 
    
    <!-- Scripts --> 
    <!-- Optional JavaScript --> 
    <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
    <script src="assets/js/jquery-3.2.1.slim.min.js"></script> 
    <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <script src="assets/js/popper.min.js"></script> 
    <script src="assets/js/bootstrap.min.js" ></script> 
    <!--Custom-JS--> 
    <script src="assets/js/interface.js"></script> 
    <!--Carousel-JS--> 
    <script src="assets/js/owl.carousel.min.js"></script> 
    <!--flexslider-JS--> 
    <script src="assets/js/jquery.flexslider.js"></script> 
    <!--Switcher--> 
    <script src="assets/switcher/js/switcher.js"></script>
  
  </body>
</html>