<?php
       if(isset($_SESSION['log'])){?>
       <div class="alert alert-primary" role="alert">
          <?php 
            echo $_SESSION['log'];
          ?>
          </div>
       <?php } else{?>
            <div></div>
       <?php }
       ?>

      <!--================Categories Banner Area =================-->
      <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>Contact</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area p_100">
            <div class="container">
                <div class="contact_title">
                    <h2>Get in Touch</h2>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui.</p>
                </div>
                <div class="row contact_details">
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <p>House # 402, Roboto Street,<br />New York, USA.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <a href="tel:+1109171234567">+110 - 917 - 123 - 4567</a>
                                <a href="tel:+1101911897654">+110 - 191 - 189 - 7654</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <a href="mailto:busines@persuit.com">busines@persuit.com</a>
                                <a href="mailto:support@persuit.com">support@persuit.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Contact Area =================-->
        

     <!--============Complaint Form Area =============-->
     <section class="register_area p_100">
            <div class="container">
                <div class="col-lg-12"> 
                    <div class="row">
                        
                            <div class="billing_details">
                                <h2 class="reg_title">Complaint Details</h2>
                                <form class="billing_inner row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="name">Customer Name <span>*</span></label>
                                            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="last">Customer ID<span>*</span></label>
                                            <input type="text" class="form-control" id="cust_id" name="cust_id" aria-describedby="last">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="cname">Order ID <span>*</span></label>
                                            <input type="text" class="form-control" id="order_id" name="order_id" aria-describedby="last">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="address">Item ID<span>*</span></label>
                                            <input type="text" class="form-control" id="item_id" name="item_id" aria-describedby="address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="ctown">Date<span>*</span></label>
                                            <input type="date" id="start" name="date" value="2018-07-22" min="2018-01-01" max="2020-12-31" />
                                        </div>
                                    </div>
                                    <button type="submit" value="submit" class="btn subs_btn form-control">Submit Complaint</button>
                                </form>
                           </div>
                        </div>
        
        <!--================Latest Product isotope Area =================-->
        <section class="fillter_latest_product">
            <div class="col-lg-12">
                <div class="container">
                    <div class="single_c_title">
                        <h2>Our Latest Product</h2>
                    </div>
                    <div class="fillter_l_p_inner">
                        <ul class="fillter_l_p">
                            <li class="active" data-filter="*"><a href="#">men's</a></li>
                            <li data-filter=".woman"><a href="#">Woman</a></li>
                            <li data-filter=".acc"><a href="#">Accessories</a></li>
                            <li data-filter=".shoes"><a href="#">Shoes</a></li>
                            <li data-filter=".bags"><a href="#">Bags</a></li>
                        </ul>
                        <div class="row isotope_l_p_inner">
                            <div class="col-lg-3 col-md-4 col-sm-6 woman bags">
                                <div class="l_product_item">
                                    <div class="l_p_img">
                                        <img class="img-fluid" src="<?php echo base_url().'assets/img/product/l-product-1.jpg';?>" alt="">
                                    </div>
                                    <div class="l_p_text">
                                        <ul>
                                            <li class="p_icon"><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i></a></li>
                                            <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                            <li class="p_icon"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <h4>Womens Libero</h4>
                                        <h5><del>$45.50</del>  $40</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 acc shoes">
                                <div class="l_product_item">
                                    <div class="l_p_img">
                                        <img class="img-fluid" src="<?php echo base_url().'assets/img/product/l-product-2.jpg';?>" alt="">
                                    </div>
                                    <div class="l_p_text">
                                        <ul>
                                            <li class="p_icon"><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i></a></li>
                                            <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                            <li class="p_icon"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <h4>Womens Libero</h4>
                                        <h5><del>$45.50</del>  $40</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 woman shoes">
                                <div class="l_product_item">
                                    <div class="l_p_img">
                                        <img class="img-fluid" src="<?php echo base_url().'assets/img/product/l-product-3.jpg';?>" alt="">
                                    </div>
                                    <div class="l_p_text">
                                        <ul>
                                            <li class="p_icon"><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i></a></li>
                                            <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                            <li class="p_icon"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <h4>Womens Libero</h4>
                                        <h5><del>$45.50</del>  $40</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 woman shoes">
                                <div class="l_product_item">
                                    <div class="l_p_img">
                                        <img class="img-fluid" src="<?php echo base_url().'assets/img/product/l-product-4.jpg';?>" alt="">
                                    </div>
                                    <div class="l_p_text">
                                        <ul>
                                            <li class="p_icon"><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i></a></li>
                                            <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                            <li class="p_icon"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <h4>Womens Libero</h4>
                                        <h5><del>$45.50</del>  $40</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 woman shoes">
                                <div class="l_product_item">
                                    <div class="l_p_img">
                                        <img class="img-fluid" src="<?php echo base_url().'assets/img/product/l-product-5.jpg';?>" alt="">
                                    </div>
                                    <div class="l_p_text">
                                        <ul>
                                            <li class="p_icon"><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i></a></li>
                                            <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                            <li class="p_icon"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <h4>Womens Libero</h4>
                                        <h5><del>$45.50</del>  $40</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 acc shoes bags">
                                <div class="l_product_item">
                                    <div class="l_p_img">
                                        <img class="img-fluid" src="<?php echo base_url().'assets/img/product/l-product-6.jpg';?>" alt="">
                                    </div>
                                    <div class="l_p_text">
                                        <ul>
                                            <li class="p_icon"><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i></a></li>
                                            <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                            <li class="p_icon"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <h4>Womens Libero</h4>
                                        <h5><del>$45.50</del>  $40</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 acc bags">
                                <div class="l_product_item">
                                    <div class="l_p_img">
                                        <img class="img-fluid" src="<?php echo base_url().'assets/img/product/l-product-7.jpg';?>" alt="">
                                    </div>
                                    <div class="l_p_text">
                                        <ul>
                                            <li class="p_icon"><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i></a></li>
                                            <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                            <li class="p_icon"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></i></a></li>
                                        </ul>
                                        <h4>Womens Libero</h4>
                                        <h5><del>$45.50</del>  $40</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 acc bags">
                                <div class="l_product_item">
                                    <div class="l_p_img">
                                        <img class="img-fluid" src="<?php echo base_url().'assets/img/product/l-product-8.jpg';?>" alt="">
                                    </div>
                                    <div class="l_p_text">
                                        <ul>
                                            <li class="p_icon"><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i></a></li>
                                            <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                            <li class="p_icon"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></i></a></li>
                                        </ul>
                                        <h4>Womens Libero</h4>
                                        <h5><del>$45.50</del>  $40</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              
            </div>
        </section>
        <!--================End Latest Product isotope Area =================-->
        
   
        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="container">
                <div class="footer_widgets">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-6">
                            <aside class="f_widget f_about_widget">
                                <img src="<?php echo base_url().'assets/img/logo4.png';?>" alt="">
                                <p>OakShine sells the best, You'll get the best</p>
                                <h6>Social:</h6>
                                <ul>
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_pinterest"></i></a></li>
                                    <li><a href="#"><i class="social_instagram"></i></a></li>
                                    <li><a href="#"><i class="social_youtube"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_info_widget">
                                <div class="f_w_title">
                                    <h3>Information</h3>
                                </div>
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Delivery information</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Returns & Refunds</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_service_widget">
                                <div class="f_w_title">
                                    <h3>Customer Service</h3>
                                </div>
                                <ul>
                                    <li><a href="#">My account</a></li>
                                    <li><a href="#">Ordr History</a></li>
                                    <li><a href="#">Wish List</a></li>
                                    <li><a href="#">Newsletter</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_extra_widget">
                                <div class="f_w_title">
                                    <h3>Extras</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Brands</a></li>
                                    <li><a href="#">Gift Vouchers</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Specials</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <aside class="f_widget link_widget f_account_widget">
                                <div class="f_w_title">
                                    <h3>My Account</h3>
                                </div>
                                <ul>
                                    <li><a href="#">My account</a></li>
                                    <li><a href="#">Ordr History</a></li>
                                    <li><a href="#">Wish List</a></li>
                                    <li><a href="#">Newsletter</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="footer_copyright">
                    <h5>© <script>document.write(new Date().getFullYear());</script> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</h5>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        