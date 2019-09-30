<?php include('header.php')?>  
    
    <!-- Intro Page Banner Start Here -->
    <section class="parallex-bg page_banner blog_banner">
      <div class="dark-overlay"></div>
      <div class="container div_zindex white-text">
        <h1>Blog Grid Style Right Sidebar</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Blog</li>
        </ol>
      </div>
    </section>
    <!-- Intro Heading End Here -->
     
    <!-- Blog Section Start Here -->
    <div class="section_padding blog_right_sidebar">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
<?php
$b=mysqli_query($con,"select * from  `blog`");

while($blog=mysqli_fetch_array($b))
{
?>

              <div class="col-lg-6">
                <article class="blog_wrap blog_grid_col">
                  <div class="blog_img"> <a href="">
                    <img src="admin/images/blog/<?=$blog['bimage'];?>" alt="image">
                  </a> </div>
                  <div class="blog_grid_info">
                    <div class="newsTime"> 
                      <span class="postName"> <span>By</span><?=$blog['bauthorname']?></span> 
                      <span class="postDate"> <a href="#"><?=$blog['bdate']?></a> </span> 
                    </div>
                    <div class="post_info">
                      <h5><a href="blog-detail.html"><?=$blog['btitle']?></a></h5>
                      <p class="text-justify"><?=$blog['bshortdiscription']?></p>
                      <a href="blog-detail.php?bn=<?=$blog['bid']?>" class="read-more">Read More<i class="fa fa-arrow-right" aria-hidden="true"></i></a> 
                    </div>
                  </div>
                </article>
              </div>
<?php } ?>

            </div>
            
          </div>
          <div class="col-lg-4">
            <!-- Aside Start Here -->
            <aside>
              <div class="module_widget aside_search">
                <div class="block_title2"> Search </div>
                <div class="module_widget_content">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Keyword">
                    <button type="button" class="btn">Submit</button>
                  </div>
                </div>
              </div>
              <div class="module_widget aside_recent_post">
                <div class="block_title2"> Recent Posts </div>
                <div class="module_widget_content">
                  <div class="recent_post">
                    <div class="thumb_img"> <a href="#"><img src="assets/images/blog-grid-pic1.jpg" alt="image"></a> </div>
                    <div class="recent_post_info">
                      <h6>Contrary to popular</h6>
                      <p>Oct 18, 2017 </p>
                    </div>
                  </div>
                  <div class="recent_post">
                    <div class="thumb_img"> <a href="#"><img src="assets/images/blog-grid-pic2.jpg" alt="image"></a> </div>
                    <div class="recent_post_info">
                      <h6>Sed ut perspiciatis</h6>
                      <p>Oct 25, 2017 </p>
                    </div>
                  </div>
                  <div class="recent_post">
                    <div class="thumb_img"> <a href="#"><img src="assets/images/blog-grid-pic3.jpg" alt="image"></a> </div>
                    <div class="recent_post_info">
                      <h6>Make your online store</h6>
                      <p>Oct 30, 2017 </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="module_widget aside_social">
                <div class="block_title2"> Follow me </div>
                <div class="module_widget_content">
                  <ul class="social_group_style">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a> </li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
                  </ul>
                </div>
              </div>
              <div class="module_widget instagrame">
                <div class="block_title2"> Instagram </div>
                <div class="module_widget_content">
                  <ul>
                    <li><a href="#"><img src="assets/images/insta_pic1.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="assets/images/insta_pic2.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="assets/images/insta_pic3.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="assets/images/insta_pic4.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="assets/images/insta_pic5.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="assets/images/insta_pic6.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="assets/images/insta_pic7.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="assets/images/insta_pic8.jpg" alt="image"></a></li>
                    <li><a href="#"><img src="assets/images/insta_pic9.jpg" alt="image"></a></li>
                  </ul>
                </div>
              </div>
            </aside>
            <!-- Aside End Here--> 
          </div>
        </div>
      </div>
    </div>
    <!-- Blog Section End Here --> 
    
    <?php include('footer.php'); ?>
    