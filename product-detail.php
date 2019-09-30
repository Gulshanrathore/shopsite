<?php include("header.php");?>

<?php
  $cat=$_REQUEST['pn'];

$about=mysqli_query($con,"select * from `product` where `pid`='$cat'");
$pro=mysqli_fetch_array($about);

?>
     
    <!-- Productes Detail Sections Start Here -->
    <section class="section_padding_small product_detail product_detail_1">
      <div class="container">
        <!-- Productes Detail Row -->
        <div class="row">
          <div class="col-lg-6">
            <!-- Productes Detail Slider 1 Start -->
            <div class="product_detail_slider1">
              <div id="detail_slider2" class="flexslider">
                <ul class="slides">
                  <?php
    $img=explode("*",$pro['pmultiimage']);
    for($i=0;$i<count($img);$i++)
    {
        echo '<li><img src="admin/images/product/'.$img[$i].'" alt="image not found"></li>';
    }
    ?>

                 
                </ul>
              </div>
              <!-- Productes Detail Thumb Start -->
              <div id="detail_carousel2" class="flexslider">
                <ul class="slides">
                  <?php
    $img=explode("*",$pro['pmultiimage']);
    for($i=0;$i<count($img);$i++)
    {
        echo '<li><img id="img_01" src="admin/images/product/'.$img[$i].'" alt="image not found"></li>';
    }
    ?>

                 
                </ul>
              </div>
              <!-- Productes Detail Thumb End --> 
            </div>
            <!-- Productes Detail Slider 2 End --> 
          </div>
          <div class="col-lg-6">
            <div class="product-description">
              <ol class="breadcrumb breadcrumb_border">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
              </ol>
              <h1 class="font_30_normal"><?=$pro['productname'];?></h1>

              
              <div class="product-price"> <del><?=$pro['productoldprice'];?></del> <span class="price"><?=$pro['productnewprice'];?></span> </div>

              
              <div class="product-select">
                <div class="quantity">
                  <form>
                    <label>Quantity</label>
                    <div class="product-quantity">
                     
                      <input type="text" name="quantity" value="1" class="qty form-control">

                    </div>
                  </form>
                </div>
                <div class="select-color">
                  <label>Colors</label>
                  <div class="custom-radios">
                    <div class="custom_radio_block">
                      <input type="radio" id="color-1" name="color" value="color-1" checked>
                      <label for="color-1"> <span style="background-color:<?=$pro['productcolor'];?>"> <i class="fa fa-check" aria-hidden="true"></i> </span> </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clear"></div>
              <div class="product-buttons-group"><a href="cart.php?npp=<?=$pro['pid'];?>" class="btn buy_now">Buy Now <i class="fa fa-location-arrow" aria-hidden="true"> </i></a> </div>
            </div>
          </div>
        </div>
        <!-- Space Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="space-60"></div>
          </div>
        </div>
        <!-- Productes Description Row -->
        <div class="row">
          <div class="col-lg-12">
            <!-- Productes Description Start Here -->
            <div class="product_detail_tab">
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="#product_discription" data-toggle="tab" class="nav-link active" aria-expanded="false">Description</a></li>
                <li class="nav-item"><a href="#review" data-toggle="tab" class="nav-link" aria-expanded="true">Review (2)</a></li>
                
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade active show" id="product_discription" >
                  <p><h6><?=$pro['pdisc'];?></h6></p>
                </div>
                <div class="tab-pane" id="review">
                  <div class="articale_comments">
                    <div id="comments">
                      <h4 class="block-head">2 Review</h4>
                      <ul class="commentlist">
                        <li class="comment">
                          <div class="comment-body">
                            <div class="star-rating"> <span style="width:100%"></span> </div>
                            <div class="comment-author"> <img class="avatar" src="assets/images/happy-client-01.jpg" alt="image"> <span class="fn">John Smith</span> </div>
                            <div class="comment-meta commentmetadata"> <a href="#">Feb 23, 2016 at 12:52 pm</a> </div>
                            <div class="comment-content">
                              <p>Wow Amazing!</p>
                            </div>
                            <div class="reply"> <a href="#" class="btn-link btn-link2"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a> </div>
                          </div>
                          <ul class="children">
                            <li class="comment">
                              <div class="comment-body">
                                <div class="comment-author"> <img class="avatar" src="assets/images/happy-client-02.jpg" alt="image"> <span class="fn">John kerry</span> </div>
                                <div class="comment-meta commentmetadata"> <a href="#">Feb 23, 2016 at 12:52 pm</a> </div>
                                <div class="comment-content">
                                  <p>Thanks</p>
                                </div>
                                <div class="reply"> <a href="#" class="btn-link btn-link2"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a> </div>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <li class="comment">
                          <div class="comment-body">
                            <div class="star-rating"> <span style="width:60%"></span> </div>
                            <div class="comment-author"> <img class="avatar" src="assets/images/happy-client-01.jpg" alt="image"> <span class="fn">John Smith</span> </div>
                            <div class="comment-meta commentmetadata"> <a href="#">Feb 23, 2016 at 12:52 pm</a> </div>
                            <div class="comment-content">
                              <p>Wow Special!</p>
                            </div>
                            <div class="reply"> <a href="#" class="btn-link btn-link2"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a> </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="comments-area">

                    <h3>Leave a Reply </h3>
                    <form>
                      <p class="comment-notes"> <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                      <div class="clear"></div>
                      <p> <span class="rating">
                        <input type="radio" id="star5" name="rating" value="5" />
                        <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4half" name="rating" value="4 and a half" />
                        <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4" />
                        <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3half" name="rating" value="3 and a half" />
                        <label class="half" for="star3half" title="Average - 3.5 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3" />
                        <label class = "full" for="star3" title="Average - 3 stars"></label>
                        <input type="radio" id="star2half" name="rating" value="2 and a half" />
                        <label class="half" for="star2half" title="bad - 2.5 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2" />
                        <label class = "full" for="star2" title="bad - 2 stars"></label>
                        <input type="radio" id="star1half" name="rating" value="1 and a half" />
                        <label class="half" for="star1half" title="bad - 1.5 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1" />
                        <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input type="radio" id="starhalf" name="rating" value="half" />
                        <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </span> 
                      </p>
                      <div class="clear"></div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Your Review <span class="required">*</span></label>
                            <textarea required></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Name <span class="required">*</span></label>
                            <input type="text" value="" required>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Email <span class="required">*</span></label>
                            <input type="email" value="" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <input type="submit" value="Submit">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Productes Detail Sections End Here --> 
    
    <!-- Similar Product Start Her e-->
    <section class="section_padding pt-0 similar_products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section_header text-center">
              <h4><span>Similar Products</span></h4>
            </div>
            <!-- Product Owl Slider -->
            <div id="similar_products_slider" class="next_prev_style2">
              <div class="owl-carousel owl-theme">
  <?php 

$sql=mysqli_query($con,"select * from `product`");

while($rec=mysqli_fetch_array($sql))
{

?>

                <div class="item">
                  <div class="product-column">
                    <div class="product-column-pic">
                      <a href="#" class="product_thumb">

                        <?php
    $img=explode("*",$rec['pmultiimage']);
    
        echo '<img src="admin/images/product/'.$img[$i].'" alt="image not found">';

    ?>

                      </a>
                      <div class="product-buttons">
                        <ul>
                          
                          <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                         
                        </ul>
                      </div>
                      <div class="list_quick_view"> <a href=""><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a> </div>
                    </div>
                    <div class="product-column-info">
                      <h6><a href="#"><?=$rec['productname'];?></a></h6>
                      <div class="rating_center">
                        <div class="star-rating"> <span style="width:60%"></span> </div>
                      </div>
                      <p class="price"> $75.00</p>
                    </div>
                  </div>
                </div>
<?php } ?>

              </div>
            </div>
            <!-- Product Owl Slider End --> 
          </div>
        </div>
      </div>
    </section>
    <!-- Similar Product End Here --> 
   <?php include("footer.php"); ?>