<?php
session_start();
?>

<?php include("database.php"); ?> 

<?php
   @$email=$_SESSION['em'];
   $usem=mysqli_query($con,"select * from `user` where `uemail`='$email'");
   $user=mysqli_fetch_array($usem);
   ?>
<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Shop Site</title>
    <!--FontAwesome Font Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google-Font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
    <!--Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
    <!--Animate Style -->
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css">
    <!--OWL Carousel slider-->
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <!--Flexslider-->
    <link rel="stylesheet" href="assets/css/flexslider.css" type="text/css">
    <!--Custome Style -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!--Responsive Media Style -->
    <link rel="stylesheet" href="assets/css/media-responsive.css" type="text/css">
    
    <!-- SWITCHER -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/light-red.css" title="light-red" media="all" data-default-color="true"/>
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all"  />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
    
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
    <link rel="shortcut icon" sizes="57x57" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" sizes="24x24" href="assets/images/favicon-icon/favicon.png">
  </head>
  <body>
    
    <!-- Start Switcher -->
    <div class="switcher-wrapper">
      <div class="demo_changer">
        <div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
        <div class="form_holder">
          <div class="row">
            <div class="col-lg-12">
              <div class="predefined_styles">
                <div class="skin-theme-switcher">
                  <h4>Color</h4>
                  <a href="#" data-switchcolor="light-red" class="styleswitch" style="background-color:#E9595E;"> </a> 
                  <a href="#" data-switchcolor="blue" class="styleswitch" style="background-color:#3f73d1;"> </a> 
                  <a href="#" data-switchcolor="pink" class="styleswitch" style="background-color:#FF2761;"> </a> 
                  <a href="#" data-switchcolor="orange" class="styleswitch" style="background-color:#dd6b1f;" data-default-color="true"> </a> 
                  <a href="#" data-switchcolor="green" class="styleswitch" style="background-color:#2dcc70;"> </a> 
                  <a href="#" data-switchcolor="red" class="styleswitch" style="background-color:#de302f;"> </a> 
                  <a href="#" data-switchcolor="purple" class="styleswitch" style="background-color:#6054c2;"> </a> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Switcher -->
     
    <!-- Header Start Here -->
    <header class="header header_style1">
      <div class="secondary_bg top_bar">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="top_left_menu">
                <ul>
                  <li><a href="contact-1.html">+91-8351947805</a></li>
                  <li class="divider_line">/</li>
                  <li><a href="#">Komal@gmail.com</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="top_right_menu pull-right">
                <ul class="login_register">
                  <?php
                if(@$_SESSION['ses']=="abc123")
                {
                  echo '<li><a href="logout.php" data-toggle="model" data-target="">Log-out</a></li>';
                 } else{?>
                  <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
                <?php } ?>
                  <li class="divider_line">/</li>

                  <li><a href="#" data-toggle="modal" data-target="#register"> Register</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="top_menu">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo"> <a class="navbar-brand" href="index.php">

                  
<?php
$ab=mysqli_query($con,"select * from `logo`");
$abc=mysqli_fetch_array($ab);
?>
<img src="admin/images/logo/<?=$abc['iimage'];?>" alt="image">
                </a> </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="active"><a class="dropdown-item" href="index.php">HOME</a></li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdownMenuPage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a> <span class="arrow"></span>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuPage">
                        <ul>
<?php
$ca=mysqli_query($con,"select * from `category`");
while($cat=mysqli_fetch_array($ca)){
?>
                          <li class="dropdown dropdown-sub_menu">
                            <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><?=$cat['cname']?></a> <span class="arrow"></span>
                            <div class="dropdown-menu dropdown-menu-right">
                              <ul>
                                <?php
                                
$caa=mysqli_query($con,"select * from `subcategory` where  `cid`='$cat[cid]'");
while($sub=mysqli_fetch_array($caa)){
  
?>

<li><a class="dropdown-item" href="product.php?cp=<?=$cat['cid'];?>&sp=<?=$sub['sid'];?>"><?=$sub['sname']?></a></li>


                              <?php } ?>

                              </ul>
                            </div>
                          </li>
<?php } ?>
                        </ul>
                      </div>
                    </li>

                    <li><a class="dropdown-item" href="about-us.php">ABOUT US</a></li>
                    <li><a class="dropdown-item" href="blog-grid-right.php">BLOG</a></li>
                    <li><a class="dropdown-item" href="contact.php">CONTACT US</a></li>

                  </ul>
                </div>
              </nav>
            </div>
            <div class="col-lg-4">
              <div class="top_search">
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <button type="submit" class="btn search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End Here -->
     