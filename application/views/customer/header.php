<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="<?php echo base_url().'assets/img/fav-icon.png';?>" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Persuit</title>

        <!-- Icon css link -->
        <link href="<?php echo base_url().'assets/css/font-awesome.min.css';?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/vendors/line-icon/css/simple-line-icons.css';?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/vendors/elegant-icon/style.css';?>" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?php echo base_url().'assets/css/bootstrap.min.css';?>" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="<?php echo base_url().'assets/vendors/revolution/css/settings.css';?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/vendors/revolution/css/layers.css';?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/vendors/revolution/css/navigation.css';?>" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="<?php echo base_url().'assets/vendors/owl-carousel/owl.carousel.min.css';?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/vendors/bootstrap-selector/css/bootstrap-select.min.css';?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/vendors/jquery-ui/jquery-ui.css';?>" rel="stylesheet">
        
        <link href="<?php echo base_url().'assets/css/style.css';?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/css/responsive.css';?>" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Menu Area =================-->
        <header class="shop_header_area carousel_menu_area">
            <div class="carousel_top_header row m0">
                <div class="container">
                    <div class="carousel_top_h_inner">
                        <!-- <div class="float-md-left">
                            <div class="top_header_left">
                                <div class="selector">
                                    <select class="language_drop" name="countries" id="countries" style="width:300px;">
                                      <option value='yt' data-image="<?php echo base_url().'assets/img/icon/flag-1.png';?>" data-imagecss="flag yt" data-title="English">English</option>
                                      <option value='yu' data-image="<?php echo base_url().'assets/img/icon/flag-1.png';?>" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                      <option value='yt' data-image="<?php echo base_url().'assets/img/icon/flag-1.png';?>" data-imagecss="flag yt" data-title="English">English</option>
                                      <option value='yu' data-image="<?php echo base_url().'assets/img/icon/flag-1.png';?>" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                    </select>
                                </div>
                                <select class="selectpicker usd_select">
                                    <option>USD</option>
                                    <option>$</option>
                                    <option>$</option>
                                </select>
                            </div>
                        </div> -->
                        <div class="float-right">
                            <div class="top_header_middle">
                                <a href="#"><i class="fa fa-phone"></i> Call Us: <span>+84 987 654 321</span></a>
                                <a href="#"><i class="fa fa-envelope"></i> Email: <span>support@yourdomain.com</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel_menu_inner">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#"><img src="<?php echo base_url().'assets/img/logo.png';?>" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown submenu active">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Home <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="index.html">Home Simple</a></li>
                                        <li class="nav-item"><a class="nav-link" href="home-carousel.html">Home Carousel</a></li>
                                        <li class="nav-item"><a class="nav-link" href="home-fullwidth.html">Home Full Width</a></li>
                                        <li class="nav-item"><a class="nav-link" href="home-parallax.html">Home Parallax</a></li>
                                        <li class="nav-item"><a class="nav-link" href="home-sidebar.html">Home Boxed</a></li>
                                        <li class="nav-item"><a class="nav-link" href="home-fixed-menu.html">Home Fixed</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown submenu">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="compare.html">Compare</a></li>
                                        <li class="nav-item"><a class="nav-link" href="checkout.html">Checkout Method</a></li>
                                        <li class="nav-item"><a class="nav-link" href="register.html">Checkout Register</a></li>
                                        <li class="nav-item"><a class="nav-link" href="track.html">Track</a></li>
                                        <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                                        <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown submenu">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shop <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-2column.html">Prodcut No Sidebar</a></li>
                                        <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-3column.html">Prodcut Two Column</a></li>
                                        <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-4column.html">Product Grid</a></li>
                                        <li class="nav-item"><a class="nav-link" href="categories-left-sidebar.html">Categories Left Sidebar</a></li>
                                        <li class="nav-item"><a class="nav-link" href="categories-right-sidebar.html">Categories Right Sidebar</a></li>
                                        <li class="nav-item"><a class="nav-link" href="categories-grid-left-sidebar.html">Categories Grid Sidebar</a></li>
                                        <li class="nav-item"><a class="nav-link" href="product-details.html">Prodcut Details 01</a></li>
                                        <li class="nav-item"><a class="nav-link" href="product-details2.html">Prodcut Details 02</a></li>
                                        <li class="nav-item"><a class="nav-link" href="product-details3.html">Prodcut Details 03</a></li>
                                        <li class="nav-item"><a class="nav-link" href="shopping-cart.html">Shopping Cart 01</a></li>
                                        <li class="nav-item"><a class="nav-link" href="shopping-cart2.html">Shopping Cart 02</a></li>
                                        <li class="nav-item"><a class="nav-link" href="empty-cart.html">Empty Cart</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">lookbook</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                            </ul>
                            <ul class="navbar-nav justify-content-end">
                            <li class="search_icon"><a type="button" title="search" data-toggle="modal" data-target="#searchModal"><i class="fa fa-search" aria-hidden="true"></i></a></li>                  

                                <?php if(isset($_SESSION['logID'])){?>
                                    <li class="user_icon"><a title="Profile" href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                                    <li class="user_icon"><a title="log out" href="<?php echo base_url().'customer/logout';?>"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                                    <li class="cart_cart"><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                                <?php } else{?>
                                    <li class="user_icon"><a type="button" title="sign up" data-toggle="modal" data-target="#signupModal"><i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
                                    <li class="user_icon"><a type="button" title="log in" data-toggle="modal" data-target="#loginModal"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
								<?php }?>
                                
                                
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--================End Menu Area =================-->
   