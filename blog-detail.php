<?php include('header.php')?>  
<?php
$bg=$_REQUEST['bn'];
$b=mysqli_query($con,"select * from `blog` where `bid`='$bg'");
$blog=mysqli_fetch_array($b);
?>
    
    <!-- Intro Page Banner Start Here -->
    <section class="parallex-bg page_banner blog_banner">
      <div class="dark-overlay"></div>
      <div class="container div_zindex white-text">
        <h1>Blog Detail</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Blog Detail</li>
        </ol>
      </div>
    </section>
    <!-- Intro Heading End Here -->
     
    <!-- Blog Section Start Here -->
    <div class="section_padding blog_detail_section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-12">
                <article class="post_listing">
                  <h2><?=$blog['btitle']?></h2>
                  <div class="post_full_img"> 
                    <img src="admin/images/blog/<?=$blog['bimage'];?>" alt="image">
                     </div>
                  <div class="post_content blog_post_detal">
                    <div class="blog_left_col">
                      <div class="author_name">
                        <figure><img src="assets/images/insta_pic3.jpg" alt="image"></figure>
                        <span>Posted by: <strong><?=$blog['bauthorname']?></strong></span> 
                      </div>
                      <div class="share_post">
                        <h5>Share:</h5>
                        <ul class="list-style-none">
                          <li><a href="#" class="facebook"><i class="fa fa-facebook-f"></i></a></li>
                          <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                          <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#" class="g_plus"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="post_elements">
                      <ul>
                        <li><a href="#"><i class="fa fa-calendar-check-o" aria-hidden="true"></i><?=$blog['bdate']?></a> </li>
                        <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>20 Comments</a> </li>
                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 520 Likes</a> </li>
                      </ul>
                    </div>
                    <p><?=$blog['blongdiscription']?></p>
                  </div>
                </article>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="post_tags"> <span>Tags:-</span> <a href="#">Shop</a> <a href="#">Fashion</a> <a href="#">E-commerce</a> <a href="#">Clothes</a></div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="articale_comments">
                  <div id="comments">
                    <h2 class="font_36_normal">2 Comments</h2>
                    <ul class="commentlist">
                      <li class="comment">
                        <div class="comment-body">
                          <div class="comment-author"> <img class="avatar" src="assets/images/happy-client-01.jpg" alt="image"> <span class="fn">Maria Smith</span> </div>
                          <div class="comment-meta commentmetadata"> <a href="#">Oct 23, 2017 at 12:52 pm</a> </div>
                          <div class="comment-content">
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                              sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                              Ut enim ad minima veniam, quis nostrum exercitationem
                            </p>
                          </div>
                          <div class="reply"> <a href="#" class="btn-link btn-link2"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a> </div>
                        </div>
                        <ul class="children">
                          <li class="comment">
                            <div class="comment-body">
                              <div class="comment-author"> <img class="avatar" src="assets/images/happy-client-02.jpg" alt="image"> <span class="fn">John Deo</span> </div>
                              <div class="comment-meta commentmetadata"> <a href="#">Oct 23, 2017 at 2:00 pm</a> </div>
                              <div class="comment-content">
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                                  sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                                  Ut enim ad minima veniam, quis nostrum exercitationem
                                </p>
                              </div>
                              <div class="reply"> <a href="#" class="btn-link btn-link2"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a> </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="comments-area">
                  <h3 class="font_36_normal">Leave a Reply </h3>
                  <form>
                    <p class="comment-notes"> <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label>Name <span class="required">*</span></label>
                          <input type="text" value="" required="">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label>Email <span class="required">*</span></label>
                          <input type="email" value="" required="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label>Website</label>
                          <input type="url" value="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label>Comment </label>
                          <textarea required=""></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <input type="submit" value="Post Comment">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <nav class="pager-nav">
                  <ul class="pager">
                    <li class="previous float-left"><a href="#"><span aria-hidden="true">←</span> Older</a></li>
                    <li class="next float-right"><a href="#">Newer <span aria-hidden="true">→</span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
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
          </div>
        </div>
      </div>
    </div>
    <!-- Blog Section End Here -->
     
    <?php include('footer.php'); ?>
    