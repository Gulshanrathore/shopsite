<?php include('header.php')?>  
<?php
$cid=$_REQUEST['cp'];
$sid=$_REQUEST['sp'];
?>    
    <!-- Intro Banner Start Here -->
    <div class="section_padding_small product_banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <figure class="mb-0"><img src="assets/images/product_banner.jpg" alt="image"></figure>
          </div>
        </div>
      </div>
    </div>
    <!-- Intro Banner End Here --> 
    
    <!-- Productes Sections Start Here -->
    <div class="section_padding_small pt-0 product_sections">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <!-- Aside Left -->
            <aside>
              <div class="module_widget module_cat">
                <h4>Filter By Categories</h4>
                <div class="module_widget_content">
                  <ul>
                    <li><a href="#">Accessories</a><span>(200)</span></li>
                    <li><a href="#">Bags</a> <span>(150)</span></li>
                    <li><a href="#">Beauty</a> <span>(50)</span></li>
                    <li><a href="#">Clothing</a> <span>(45)</span></li>
                    <li><a href="#">Fashion </a><span>(35)</span></li>
                    <li><a href="#">Furniture</a><span>(20)</span></li>
                    <li><a href="#">Gifl Specail</a><span>(125)</span></li>
                  </ul>
                </div>
              </div>
              <div class="module_widget module_filter">
                <h4>Filter By Price</h4>
                <div class="module_widget_content">
                  <div class="price_range_slider">
                    <figure class="mb-0"><img src="assets/images/price_range.jpg" alt="image"></figure>
                  </div>
                </div>
              </div>
              <div class="module_widget module_products">
                <h4>Recent Products</h4>
                <div class="module_widget_content">
                  <ul class="product_list">
                    <li>
                      <a href="#" class="thumb">
                        <figure><img src="assets/images/cart_img3.jpg" alt="image"></figure>
                      </a>
                      <h6><a href="#">Laptop Bag</a></h6>
                      <p class="price"><del>$75.00</del> $65.00</p>
                    </li>
                    <li>
                      <a href="#" class="thumb">
                        <figure><img src="assets/images/cart_img2.jpg" alt="image"></figure>
                      </a>
                      <h6><a href="#">Wrist Watchest</a></h6>
                      <p class="price"><del>$95.00</del> $85.00</p>
                    </li>
                    <li>
                      <a href="#" class="thumb">
                        <figure><img src="assets/images/cart_img1.jpg" alt="image"></figure>
                      </a>
                      <h6><a href="#">Halter Jumpsuit</a></h6>
                      <p class="price"><del>$82.00</del> $75.00</p>
                    </li>
                  </ul>
                </div>
              </div>
            </aside>
          </div>
          <div class="col-lg-9">
            <div class="product_panel">
              <div class="product_heading">
                <div class="row">
                  <div class="col-lg-9">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Shop</a></li>
                      
                    </ol>
                  </div>
                  <div class="col-lg-3">
                    <div class="list_grid_btns"> <a href="#" id="grid" class="active"> <i class="fa fa-th" aria-hidden="true"></i></a> <a href="#" id="list"> <i class="fa fa-bars" aria-hidden="true"></i></a> </div>
                  </div>
                </div>
              </div>
              <div id="products" class="row list-view">

             <?php
                $pro=mysqli_query($con,"select * from `product` where `pcategory`='$cid' and `psubcategory`='$sid' ");

               while($product=mysqli_fetch_array($pro)){

                $img=explode("*",$product['pmultiimage']);
                
                ?>

                <div class="item col-lg-4 col-md-4 col-sm-4 grid-group-view">
                  <div class="product-column">
                    <div class="product-column-pic">
                      <a href="#" class="product_thumb"><img src="admin/images/product/<?=$img[0];?>" alt="image"></a>
                      <div class="product-buttons">
                        <ul>
                          
                          <li><a href="product-detail.php?pn=<?=$product['pid'];?>"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                          
                        </ul>
                      </div>
                      <div class="list_quick_view"> <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>Quick View</a> </div>
                    </div>
                    <div class="product-column-info">
                      <h6><a href="#"><?=$product['productname'];?></a></h6>
                      <div class="rating_center">
                        <div class="star-rating"> <span style="width:60%"></span> </div>
                      </div>
                      <p class="price"> $<?=$product['productnewprice'];?></p>
                      

                    </div>
                  </div>
                  <div class="divider"></div>
                </div>
<?php } ?>

              </div>
              <div class="row">
                <div class="col-lg-12">
                  <nav>
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled"> <a class="page-link" href="#" aria-label="Previous"> <i class="fa fa-angle-double-left" aria-hidden="true"></i> </a> </li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a> </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Productes Sections End Here --> 
    
    <!-- Clients Start Here -->
    <div class="section_padding our_clients">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div id="clients_slider" class="next_prev_style2">
              <div class="owl-carousel owl-theme">
                <div class="item">
                  <figure> <img src="assets/images/client_logo1.png" alt="image"> </figure>
                </div>
                <div class="item">
                  <figure> <img src="assets/images/client_logo2.png" alt="image"> </figure>
                </div>
                <div class="item">
                  <figure> <img src="assets/images/client_logo3.png" alt="image"> </figure>
                </div>
                <div class="item">
                  <figure> <img src="assets/images/client_logo4.png" alt="image"> </figure>
                </div>
                <div class="item">
                  <figure> <img src="assets/images/client_logo1.png" alt="image"> </figure>
                </div>
                <div class="item">
                  <figure> <img src="assets/images/client_logo2.png" alt="image"> </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Clients End Here --> 
    
    <?php include('footer.php'); ?>