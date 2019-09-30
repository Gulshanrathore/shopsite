<?php include('header.php')?>   
<?php
$ab=mysqli_query($con,"select * from `aboutus`");
$about=mysqli_fetch_array($ab);
?>
    <!-- Intro Page Banner Start Here-->
    <section class="parallex-bg page_banner about_banner2">
      <div class="dark-overlay"></div>
      <div class="container div_zindex white-text">
        <h1>About Us</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">About Us</li>
        </ol>
      </div>
    </section>
    <!-- Intro Heading End Here--> 
    
    <!-- About Section Start Here-->
    <section class="section_padding About_Section About2">
      <div class="container">
        <div class="row about_row">
          <div class="col-lg-6">
            <figure class="figure"> <img src="admin/images/about/<?=$about['aimage'];?>" alt="image"> </figure>
          </div>
          <div class="col-lg-6">
            <div class="about_text">
              <h2><?=$about['atitle'];?></h2>
              <p><?=$about['adiscription'];?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section  End Here--> 
    
    <?php include('footer.php');?>