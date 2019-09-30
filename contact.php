<?php include('header.php')?>  
    <!-- Intro Page Banner Start Here -->
    <section class="parallex-bg page_banner contact_banner1">
      <div class="dark-overlay"></div>
      <div class="container div_zindex white-text">
        <h1>Contact Us</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Contact Us</li>
        </ol>
      </div>
    </section>
    <!-- Intro Heading End Here -->
     
    <!-- Contact Page 1 Start Here -->
    <section class="section_padding contact1">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
<?php 
$sql=mysqli_query($con,"select * from `contactus`");
$i=0;
while($rec=mysqli_fetch_array($sql))
{
$i++;
 ?>
              <div class="col-lg-6">
                <h4><?=$rec['cotitle'];?></h4>
                <ul class="contact_list">
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                    <?=$rec['coaddress'];?>
                  </li>
                  <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?=$rec['coemailid'];?>"><?=$rec['coemailid'];?></a></li>
                  <li><i class="fa fa-phone" aria-hidden="true"></i><?=$rec['comobilenumber'];?></li>
                </ul>
              </div>
<?php } ?>
            </div>
          </div>
          <div class="col-lg-4">
            <h2 class="block_title">Leave a Message</h2>
            <?php
       if(isset($_POST['sub'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $subject=$_POST['subject'];  
        $message=$_POST['message']; 


        $contact=mysqli_query($con,"INSERT INTO `enquiry`( `ename`, `email`, `ephoneno`, `esubject`, `emessage`) VALUES ('$name','$email','$phone','$subject','$message')"); 

        if($contact==true)
{
    echo "<script>alert ('insert');location ='index.php'</script>";
}
       }
            ?>

            <form method="post">
              <div class="form-group">
                <input type="text" name="name" class="form-control" required="" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="email" name="email"  class="form-control" required="" placeholder="Email Address">
              </div>
              <div class="form-group">
                <input type="text" name="phone"class="form-control" required="" placeholder="Phone Number">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" required="" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="message" class="form-control" required="" placeholder="Message"></textarea>
              </div>
              <input type="submit" name="sub" value="Send Message"class="btn w-100">
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Page 1 End Here -->
    <div class="contact_map">
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13907989.984408803!2d67.09748625000003!3d31.674749699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391b1f3561f6762f%3A0xacdccad21a5e7d2!2sDr+B+R+Ambedkar+Government+Polytechnic+College!5e0!3m2!1sen!2sin!4v1564121668966!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    
    <?php include('footer.php'); ?>
