<!DOCTYPE html>
<html lang="en"><head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Fancy premium HTML5 &amp; CSS3 template</title>
<meta name="description" content="best template, template free, responsive theme, fashion store, responsive theme, responsive html theme, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
<meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"/>

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!-- CSS Style -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{mix('css/app.css')}}">

</head>

<body class="cms-index-index cms-home-page">

<!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]--> 

<!-- mobile menu -->
<div id="mobile-menu">
  <div id="mobile-search">
    <form>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
      </div>
    </form>
  </div>
  <ul>
    <li><a href="index.html" class="home1">Home</a>
      <ul>
        <li><a href="index.html"><span>Home Version 1</span></a></li>
        <li><a href="version2/index.html"><span>Home Version 2</span></a></li>
        <li><a href="version3/index.html"><span>Home Version 3</span></a></li>
      </ul>
    </li>
    <li><a href="shop_grid.html">Pages</a>
      <ul>
        <li><a href="#" class="">Shop Pages </a>
          <ul>
            <li> <a href="shop_grid.html"> Shop grid </a> </li>
            <li> <a href="shop_grid_right_sidebar.html"> Shop grid right sidebar</a> </li>
            <li> <a href="shop_list.html"> Shop list </a> </li>
            <li> <a href="shop_list_right_sidebar.html"> Shop list right sidebar</a> </li>
            <li> <a href="shop_grid_full_width.html"> Shop Full width </a> </li>
          </ul>
        </li>
        <li><a href="#">Ecommerce Pages </a>
          <ul>
            <li> <a href="wishlist.html"> Wishlists </a> </li>
            <li> <a href="checkout.html"> Checkout </a> </li>
            <li> <a href="compare.html"> Compare </a> </li>
            <li> <a href="shopping_cart.html"> Shopping cart </a> </li>
            <li> <a href="quick_view.html"> Quick View </a> </li>
          </ul>
        </li>
        <li> <a href="#">Static Pages </a>
          <ul>
            <li> <a href="account_page.html"> Create Account Page </a> </li>
            <li> <a href="about_us.html"> About Us </a> </li>
            <li> <a href="contact_us.html"> Contact us </a> </li>
            <li> <a href="404error.html"> Error 404 </a> </li>
            <li> <a href="faq.html"> FAQ </a> </li>
          </ul>
        </li>
        <li> <a href="#">Product Categories </a>
          <ul>
            <li> <a href="cat-3-col.html"> 3 Column Sidebar </a> </li>
            <li> <a href="cat-4-col.html"> 4 Column Sidebar</a> </li>
            <li> <a href="cat-4-col-full.html"> 4 Column Full width </a> </li>
            <li> <a href="cat-6-col.html"> 6 Columns Full width</a> </li>
          </ul>
        </li>
        <li> <a href="#">Single Product Pages </a>
          <ul>
            <li><a href="single_product.html"> single product </a> </li>
            <li> <a href="single_product_left_sidebar.html"> single product left sidebar</a> </li>
            <li> <a href="single_product_right_sidebar.html"> single product right sidebar</a> </li>
            <li> <a href="single_product_magnific_popup.html"> single product magnific popup</a> </li>
          </ul>
        </li>
        <li> <a href="#"> Blog Pages </a>
          <ul>
            <li><a href="blog_right_sidebar.html">Blog – Right sidebar </a></li>
            <li><a href="blog_left_sidebar.html">Blog – Left sidebar </a></li>
            <li><a href="blog_full_width.html">Blog_ - Full width</a></li>
            <li><a href="single_post.html">Single post </a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="contact_us.html">Contact us</a></li>
    <li><a href="about_us.html">About us</a></li>
    <li><a href="blog.html">Blog</a>
      <ul>
        <li><a href="blog_right_sidebar.html">Blog – Right sidebar </a></li>
        <li><a href="blog_left_sidebar.html">Blog – Left sidebar </a></li>
        <li><a href="blog_full_width.html">Blog_ - Full width</a></li>
        <li><a href="single_post.html">Single post </a></li>
      </ul>
    </li>
    <li><a href="shop_grid.html">Home Appliances</a>
      <ul>
        <li><a href="#" class="">Clother</a>
          <ul>
            <li><a href="shop_grid.html">Cocktail</a></li>
            <li><a href="shop_grid.html">Day</a></li>
            <li><a href="shop_grid.html">Evening</a></li>
            <li><a href="shop_grid.html">Sundresses</a></li>
          </ul>
        </li>
        <li><a href="#">Lightings</a>
          <ul>
            <li><a href="shop_grid.html">Accessories</a></li>
            <li><a href="shop_grid.html">Hats and Gloves</a></li>
            <li><a href="shop_grid.html">Lifestyle</a></li>
            <li><a href="shop_grid.html">Bras</a></li>
          </ul>
        </li>
        <li> <a href="#">Trends</a>
          <ul>
            <li> <a href="shop_grid.html">Flat Shoes</a> </li>
            <li> <a href="shop_grid.html">Flat Sandals</a> </li>
            <li> <a href="shop_grid.html">Boots</a> </li>
            <li> <a href="shop_grid.html">Heels</a> </li>
          </ul>
        </li>
        <li> <a href="#">Dress and skirt</a>
          <ul>
            <li> <a href="shop_grid.html">Bracelets</a> </li>
            <li> <a href="shop_grid.html">Necklaces &amp; Pendent</a> </li>
            <li> <a href="shop_grid.html">Pendants</a> </li>
            <li> <a href="shop_grid.html">Pins &amp; Brooches</a> </li>
          </ul>
        </li>
        <li> <a href="#">Shoes</a>
          <ul>
            <li> <a href="shop_grid.html">Casual Dresses</a> </li>
            <li> <a href="shop_grid.html">Evening</a> </li>
            <li> <a href="shop_grid.html">Designer</a> </li>
            <li> <a href="shop_grid.html">Party</a> </li>
          </ul>
        </li>
        <li> <a href="#">Nightstands</a>
          <ul>
            <li> <a href="shop_grid.html">Swimsuits</a> </li>
            <li> <a href="shop_grid.html">Beach Clothing</a> </li>
            <li> <a href="shop_grid.html">Clothing</a> </li>
            <li> <a href="shop_grid.html">Bikinis</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="shop_grid.html">Living Rooms</a>
      <ul>
        <li> <a href="#" class="">Sofas</a>
          <ul class="level1">
            <li class="level2"> <a href="shop_grid.html">Coats &amp; Jackets</a> </li>
            <li class="level2"> <a href="shop_grid.html">Raincoats</a> </li>
            <li class="level2"> <a href="shop_grid.html">Blazers</a> </li>
            <li class="level2"> <a href="shop_grid.html">Jackets</a> </li>
          </ul>
        </li>
        <li> <a href="#">Folding Chairs</a>
          <ul class="level1">
            <li class="level2"> <a href="shop_grid.html">Casual Dresses</a> </li>
            <li class="level2"> <a href="shop_grid.html">Evening</a> </li>
            <li class="level2"> <a href="shop_grid.html">Designer</a> </li>
            <li class="level2"> <a href="shop_grid.html">Party</a> </li>
          </ul>
        </li>
        <li> <a href="#" class="">Side Tables</a>
          <ul class="level1">
            <li class="level2"> <a href="shop_grid.html">Sport Shoes</a> </li>
            <li class="level2"> <a href="shop_grid.html">Casual Shoes</a> </li>
            <li class="level2"> <a href="shop_grid.html">Leather Shoes</a> </li>
            <li class="level2"> <a href="shop_grid.html">canvas shoes</a> </li>
          </ul>
        </li>
        <li> <a href="#">Designer</a>
          <ul class="level1">
            <li class="level2"> <a href="shop_grid.html">Coats</a> </li>
            <li class="level2"> <a href="shop_grid.html">Formal Jackets</a> </li>
            <li class="level2"> <a href="shop_grid.html">Leather Jackets</a> </li>
            <li class="level2"> <a href="shop_grid.html">Blazers</a> </li>
          </ul>
        </li>
        <li> <a href="#">Accesories</a>
          <ul class="level1">
            <li class="level2"> <a href="shop_grid.html">Backpacks</a> </li>
            <li class="level2"> <a href="shop_grid.html">Wallets</a> </li>
            <li class="level2"> <a href="shop_grid.html">Laptops Bags</a> </li>
            <li class="level2"> <a href="shop_grid.html">Belts</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="shop_grid.html">Electronics</a>
      <ul>
        <li> <a href="shop_grid.html">Wall Units</a>
          <ul>
            <li> <a href="shop_grid.html">iPhone</a> </li>
            <li> <a href="shop_grid.html">Samsung</a> </li>
            <li> <a href="shop_grid.html">Nokia</a> </li>
            <li> <a href="shop_grid.html">Sony</a> </li>
          </ul>
        </li>
        <li> <a href="shop_grid.html" class="">Kids</a>
          <ul>
            <li> <a href="shop_grid.html">Audio</a> </li>
            <li> <a href="shop_grid.html">Cameras</a> </li>
            <li> <a href="shop_grid.html">Appling</a> </li>
            <li> <a href="shop_grid.html">Car Music</a> </li>
          </ul>
        </li>
        <li> <a href="shop_grid.html">Fashion</a>
          <ul>
            <li> <a href="shop_grid.html">Home &amp; Office</a> </li>
            <li> <a href="shop_grid.html">TV &amp; Home Theater</a> </li>
            <li> <a href="shop_grid.html">Phones &amp; Radio</a> </li>
            <li> <a href="shop_grid.html">All Electronics</a> </li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
</div>
<!-- end mobile menu -->
<div id="page"> 
  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-4 hidden-xs"> 
              <!-- Default Welcome Message -->
              <div class="welcome-msg ">Welcome to Fancy online shopping </div>
            </div>
            
            <!-- top links -->
            <div class="headerlinkmenu col-lg-8 col-md-7 col-sm-8 col-xs-12">
              <div class="links">
                <div class="myaccount"><a title="My Account" href="account_page.html"><i class="fa fa-user"></i><span class="hidden-xs">My Account</span></a></div>
                <div class="wishlist"><a title="My Wishlist" href="wishlist.html"><i class="fa fa-heart"></i><span class="hidden-xs">Wishlist</span></a></div>
                <div class="blog"><a title="Blog" href="blog.html"><i class="fa fa-rss"></i><span class="hidden-xs">Blog</span></a></div>
                <div class="login"><a href="account_page.html"><i class="fa fa-unlock-alt"></i><span class="hidden-xs">Log In</span></a></div>
              </div>
              <div class="language-currency-wrapper">
                <div class="inner-cl">
                  <div class="block block-language form-language">
                    <div class="lg-cur"> <span> <img src="images/flag-default.jpg" alt="French"> <span class="lg-fr">French</span> <i class="fa fa-angle-down"></i> </span> </div>
                    <ul>
                      <li> <a class="selected" href="#"> <img src="images/flag-english.jpg" alt="flag"> <span>English</span> </a> </li>
                      <li> <a href="#"> <img src="images/flag-default.jpg" alt="flag"> <span>French</span> </a> </li>
                      <li> <a href="#"> <img src="images/flag-german.jpg" alt="flag"> <span>German</span> </a> </li>
                      <li> <a href="#"> <img src="images/flag-brazil.jpg" alt="flag"> <span>Brazil</span> </a> </li>
                      <li> <a href="#"> <img src="images/flag-chile.jpg" alt="flag"> <span>Chile</span> </a> </li>
                      <li> <a href="#"> <img src="images/flag-spain.jpg" alt="flag"> <span>Spain</span> </a> </li>
                    </ul>
                  </div>
                  <div class="block block-currency">
                    <div class="item-cur"> <span>USD </span> <i class="fa fa-angle-down"></i></div>
                    <ul>
                      <li> <a href="#"><span class="cur_icon">€</span> EUR</a> </li>
                      <li> <a href="#"><span class="cur_icon">¥</span> JPY</a> </li>
                      <li> <a class="selected" href="#"><span class="cur_icon">$</span> USD</a> </li>
                    </ul>
                  </div>
                </div>
                
                <!-- End Default Welcome Message --> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-3 col-xs-8"> 
            <!-- Header Logo -->
            <div class="logo"><a title="e-commerce" href="index.html"><img alt="e-commerce" src="images/logo.png"></a> </div>
            <!-- End Header Logo --> 
          </div>
          <div class="col-md-9 col-sm-8 col-xs-4">
            <div class="mtmegamenu">
              <ul class="hidden-xs">
                <li class="mt-root demo_custom_link_cms">
                  <div class="mt-root-item"><a href="index.html">
                    <div class="title title_font"><span class="title-text">Home</span></div>
                    </a></div>
                  <ul class="menu-items col-md-3 col-sm-4 col-xs-12">
                    <li class="menu-item depth-1">
                      <div class="title"> <a href="index.html"><span>Home Version 1</span></a></div>
                    </li>
                    <li class="menu-item depth-1">
                      <div class="title"> <a href="version2/index.html"><span>Home Version 2</span></a></div>
                    </li>
                     <li class="menu-item depth-1">
                      <div class="title"> <a href="version3/index.html"><span>Home Version 3</span></a></div>
                    </li>
                              
                  </ul>
                </li>
                <li class="mt-root">
                  <div class="mt-root-item"><a href="#">
                    <div class="title title_font"><span class="title-text">Page</span></div>
                    </a></div>
                  <ul class="menu-items col-xs-12">
                    <li class="menu-item depth-1 menucol-1-3 ">
                      <div class="title title_font"> <a href="#"> Shop Pages </a></div>
                      <ul class="submenu">
                        <li class="menu-item">
                          <div class="title"> <a href="shop_grid.html"> Shop grid </a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="shop_grid_right_sidebar.html"> Shop grid right sidebar</a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="shop_list.html"> Shop list </a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="shop_list_right_sidebar.html"> Shop list right sidebar</a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="shop_grid_full_width.html"> Shop grid full width </a></div>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item depth-1 menucol-1-3 ">
                      <div class="title title_font"> <a href="#"> Ecommerce Pages </a></div>
                      <ul class="submenu">
                        <li class="menu-item">
                          <div class="title"> <a href="wishlist.html"> Wishlists </a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="checkout.html"> Checkout </a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="compare.html"> Compare </a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="shopping_cart.html"> Shopping cart </a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="quick_view.html"> Quick View </a></div>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item depth-1 menucol-1-3 ">
                      <div class="title title_font"> <a href="#"> Static Pages </a></div>
                      <ul class="submenu">
                        <li class="menu-item depth-2 category ">
                          <div class="title"> <a href="register_page.html">Register Page </a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="about_us.html"> About Us </a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="contact_us.html"> Contact us </a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="404error.html"> Error 404 </a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="faq.html"> FAQ </a></div>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item depth-1 menucol-1-3 ">
                      <div class="title title_font"> <a href="#"> Product Categories </a></div>
                      <ul class="submenu">
                        <li class="menu-item">
                          <div class="title"> <a href="cat-3-col.html"> 3 Column Sidebar </a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="cat-4-col.html"> 4 Column Sidebar</a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="cat-4-col-full.html"> 4 Column Full width </a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="cat-6-col.html"> 6 Columns Full width</a></div>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item depth-1 menucol-1-3 ">
                      <div class="title title_font"> <a href="#"> Single Product Pages </a></div>
                      <ul class="submenu">
                        <li class="menu-item">
                          <div class="title"> <a href="single_product.html"> single product </a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="single_product_left_sidebar.html"> single product left sidebar</a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="single_product_right_sidebar.html"> single product right sidebar</a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="single_product_magnific_popup.html"> single product magnific popup</a></div>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item depth-1 menucol-1-3 ">
                      <div class="title title_font"> <a href="#"> Blog Pages </a></div>
                      <ul class="submenu">
                        <li class="menu-item">
                          <div class="title"> <a href="blog_right_sidebar.html"> Blog – Right Sidebar </a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="blog_left_sidebar.html"> Blog – Left Sidebar </a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="blog_full_width.html"> Blog – Full-Width </a></div>
                        </li>
                        <li class="menu-item">
                          <div class="title"> <a href="single_post.html"> Single post </a></div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="mt-root">
                  <div class="mt-root-item"><a href="shop_grid.html">
                    <div class="title title_font"><span class="title-text">Contact Us</span> </div>
                    </a></div>
                </li>
                <li class="mt-root">
                  <div class="mt-root-item"><a href="about_us.html">
                    <div class="title title_font"><span class="title-text">about us</span></div>
                    </a></div>
                </li>
                <li class="mt-root demo_custom_link_cms">
                  <div class="mt-root-item"><a href="blog.html">
                    <div class="title title_font"><span class="title-text">Blog</span></div>
                    </a></div>
                  <ul class="menu-items col-md-3 col-sm-4 col-xs-12">
                    <li class="menu-item depth-1">
                      <div class="title"> <a href="blog_right_sidebar.html"> Blog – Right Sidebar </a></div>
                    </li>
                    <li class="menu-item depth-1">
                      <div class="title"> <a href="blog_left_sidebar.html"> Blog – Left Sidebar </a></div>
                    </li>
                    <li class="menu-item depth-1">
                      <div class="title"> <a href="blog_full_width.html"> Blog – Full-Width </a></div>
                    </li>
                    <li class="menu-item depth-1">
                      <div class="title"> <a href="single_post.html"> Single post </a></div>
                    </li>
                  </ul>
                </li>
              </ul>
              <!-- top cart -->
              <div class="col-md-3 col-xs-9 col-sm-2 top-cart">
                <div class="top-cart-contain">
                  <div class="mini-cart">
                    <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#">
                      <div class="cart-icon"><i class="fa fa-shopping-cart"></i></div>
                      <div class="shoppingcart-inner hidden-xs hidden-sm"><span class="cart-title">Shopping Cart</span> <span class="cart-total">4 Item(s): $520.00</span></div>
                      </a></div>
                    <div>
                      <div class="top-cart-content">
                        <div class="block-subtitle hidden-xs">Recently added item(s)</div>
                        <ul id="cart-sidebar" class="mini-products-list">
                          <li class="item odd"> <a href="shopping_cart.html" title="Ipsums Dolors Untra" class="product-image"><img src="images/products/img01.jpg" alt="Lorem ipsum dolor" width="65"></a>
                            <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                              <p class="product-name"><a href="shopping_cart.html">Lorem ipsum dolor sit amet Consectetur</a> </p>
                              <strong>1</strong> x <span class="price">$20.00</span> </div>
                          </li>
                          <li class="item even"> <a href="shopping_cart.html" title="Ipsums Dolors Untra" class="product-image"><img src="images/products/img01.jpg" alt="Lorem ipsum dolor" width="65"></a>
                            <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                              <p class="product-name"><a href="shopping_cart.html">Consectetur utes anet adipisicing elit</a> </p>
                              <strong>1</strong> x <span class="price">$230.00</span> </div>
                          </li>
                          <li class="item last odd"> <a href="shopping_cart.html" title="Ipsums Dolors Untra" class="product-image"><img src="images/products/img01.jpg" alt="Lorem ipsum dolor" width="65"></a>
                            <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                              <p class="product-name"><a href="shopping_cart.html">Sed do eiusmod tempor incidist</a> </p>
                              <strong>2</strong> x <span class="price">$420.00</span> </div>
                          </li>
                        </ul>
                        <div class="top-subtotal">Subtotal: <span class="price">$520.00</span></div>
                        <div class="actions">
                          <button class="btn-checkout" type="button"><span>Checkout</span></button>
                          <button class="view-cart" type="button"><span>View Cart</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header --> 
  
  <!-- Navbar -->
  <nav>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-3">
          <div class="mm-toggle-wrap">
            <div class="mm-toggle"> <i class="fa fa-align-justify"></i> </div>
            <span class="mm-label hidden-xs">Categories</span> </div>
          <div class="mega-container visible-lg visible-md visible-sm">
            <div class="navleft-container">
              <div class="mega-menu-title">
                <h3>shop by category</h3>
              </div>
              <div class="mega-menu-category">
                <ul class="nav">
                  <li> <a href="#"><i class="icon fa fa-female fa-fw"></i> Women</a>
                    <div class="wrap-popup">
                      <div class="popup">
                        <div class="row">
                          <div class="col-md-4 col-sm-6">
                            <h3>Clother</h3>
                            <ul class="nav">
                              <li><a href="shop_grid.html">Cocktail</a></li>
                              <li><a href="shop_grid.html">Day</a></li>
                              <li><a href="shop_grid.html">Evening</a></li>
                              <li><a href="shop_grid.html">Sports</a></li>
                            </ul>
                            <br>
                            <h3>Dress and skirt</h3>
                            <ul class="nav">
                              <li><a href="shop_grid.html">blazers</a></li>
                              <li><a href="shop_grid.html">table</a></li>
                              <li><a href="shop_grid.html">coats</a></li>
                              <li><a href="shop_grid.html">Sports</a></li>
                              <li><a href="shop_grid.html">kids</a></li>
                            </ul>
                          </div>
                          <div class="col-md-4 col-sm-6 has-sep">
                            <h3>Shoes</h3>
                            <ul class="nav">
                              <li> <a href="shop_grid.html">Tandoor & Grills</a> </li>
                              <li> <a href="shop_grid.html">Baking Tools</a> </li>
                              <li> <a href="shop_grid.html">Retina Display </a> </li>
                              <li> <a href="shop_grid.html">Washers</a> </li>
                            </ul>
                            <br>
                            <h3>Jewellery </h3>
                            <ul class="nav">
                              <li> <a href="shop_grid.html">Toasters</a> </li>
                              <li> <a href="shop_grid.html">Water Purifiers</a> </li>
                              <li> <a href="shop_grid.html">Glasses</a> </li>
                              <li> <a href="shop_grid.html">Lunch Boxes</a> </li>
                              <li> <a href="shop_grid.html">Knives</a> </li>
                            </ul>
                          </div>
                          <div class="col-md-4 has-sep hidden-sm">
                            <div class="custom-menu-right">
                              <div class="box-banner media">
                                <div class="add-desc">
                                  <h3>New Jeans<br>
                                    collection </h3>
                                  <div class="price-sale">2017</div>
                                  <a href="#">Shop Now</a> </div>
                                <div class="add-right"><img src="images/menu-img1.jpg" alt=""></div>
                              </div>
                              <div class="box-banner media">
                                <div class="add-desc">
                                  <h3>Save up to</h3>
                                  <div class="price-sale">70 <sup>%</sup><sub>off</sub></div>
                                  <a href="#">Shopping Now</a> </div>
                                <div class="add-right"><img src="images/menu-img2.jpg" alt=""></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li> <a href="#"><i class="icon fa fa-male fa-fw"></i> Men</a>
                    <div class="wrap-popup">
                      <div class="popup">
                        <div class="row">
                          <div class="col-md-4 col-sm-6">
                            <ul class="nav">
                              <li><a href="shop_grid.html"><span>Clother</span></a></li>
                              <li><a href="shop_grid.html"><span>Study Tables</span></a></li>
                              <li><a href="shop_grid.html"><span>Bean Bags</span> </a></li>
                              <li><a href="shop_grid.html"><span>Bedside Tables</span> </a></li>
                              <li> <a href="shop_grid.html"><span>Sofa cum Beds</span></a></li>
                              <li><a href="shop_grid.html"><span>Bookshelves </span></a></li>
                              <li><a href="shop_grid.html"><span>T.V. & Entertainment Units</span></a></li>
                              <li><a href="shop_grid.html"><span>Center Tables </span></a></li>
                              <li><a href="shop_grid.html"><span>Cabinets</span></a></li>
                            </ul>
                          </div>
                          <div class="col-md-4 col-sm-6 has-sep">
                            <ul class="nav">
                              <li><a href="shop_grid.html"><span>Partitions</span></a></li>
                              <li><a href="shop_grid.html"><span>High-speed</span></a></li>
                              <li><a href="shop_grid.html"><span>Bean Bags </span> </a></li>
                              <li><a href="shop_grid.html"><span>Covers & Refills</span> </a></li>
                              <li> <a href="shop_grid.html"><span>Footstools</span></a></li>
                              <li><a href="shop_grid.html"><span>Inflatable Sofas</span></a></li>
                              <li><a href="shop_grid.html"><span>Ottomans</span></a></li>
                              <li><a href="shop_grid.html"><span>Cabinets</span></a></li>
                              <li><a href="shop_grid.html"><span>Wall Shelves</span></a></li>
                            </ul>
                          </div>
                          <div class="col-md-4 has-sep hidden-sm">
                            <div class="custom-menu-right">
                              <div class="box-banner menu-banner">
                                <div class="add-right"><a href="#"><img src="images/menu-img4.jpg" alt=""></a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nosub"><a href="#"><i class="icon fa fa-camera fa-fw"></i> Electronics</a></li>
                  <li> <a href="shop_grid.html"><i class="icon fa fa-linux fa-fw"></i> Kids</a>
                    <div class="wrap-popup column2">
                      <div class="popup">
                        <div class="row">
                          <div class="col-sm-6">
                            <h3>Furniture</h3>
                            <ul class="nav">
                              <li> <a href="shop_grid.html"> Kids' Beds </a> </li>
                              <li> <a href="shop_grid.htmls"> Wall Stickers </a> </li>
                              <li> <a href="shop_grid.html"> Humidifiers </a> </li>
                              <li> <a href="shop_grid.html"> Indoor Lighting </a> </li>
                            </ul>
                          </div>
                          <div class="col-sm-6 has-sep">
                            <h3> New arrivals </h3>
                            <ul class="nav">
                              <li> <a href="shop_grid.html"> Art Prints </a> </li>
                              <li> <a href="shop_grid.html"> Posters</a> </li>
                              <li> <a href="shop_grid.html"> Paintings </a> </li>
                              <li> <a href="shop_grid.html"> Drawings </a> </li>
                            </ul>
                          </div>
                          <div class="col-sm-12"> <a class="ads1" href="#"><img class="img-responsive" src="images/menu-img3.jpg" alt=""></a> </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li> <a href="shop_grid.html"><i class="icon fa fa-heart fa-fw"></i> Fashion</a>
                    <div class="wrap-popup column1">
                      <div class="popup">
                        <ul class="nav">
                          <li><a href="shop_grid.html"><span>Frying Pans</span></a></li>
                          <li><a href="shop_grid.html"><span>Dinner Sets</span></a></li>
                          <li><a href="shop_grid.html"><span>Baking Tools</span></a></li>
                          <li><a href="shop_grid.html"><span>Spatulas</span></a></li>
                          <li><a href="shop_grid.html"><span>Gas Stoves</span></a></li>
                          <li><a href="shop_grid.html"><span>Glasses</span></a></li>
                          <li><a href="shop_grid.html"><span>Racks & Holders</span></a></li>
                          <li><a href="shop_grid.html"><span>Knives</span></a></li>
                          <li><a href="shop_grid.html"><span>Tableware</span></a></li>
                          <li><a href="shop_grid.html"><span>Kitchen Tools</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li><a href="#"><i class="icon fa fa-codepen fa-fw"></i> Accessories</a>
                    <div class="wrap-popup column1">
                      <div class="popup">
                        <ul class="nav">
                          <li> <a href="shop_grid.html"> Super Pillow </a> </li>
                          <li> <a href="shop_grid.html"> Hodak Chair</a> </li>
                          <li> <a href="shop_grid.html"> Pendant Light </a> </li>
                          <li> <a href="shop_grid.html"> Shoe Saver </a> </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="nosub"><a href="shop_grid.html"><i class="icon fa fa-shopping-basket fa-fw"></i> Trends</a></li>
                  <li class="nosub"><a href="shop_grid.html"><i class="icon fa fa-lightbulb-o fa-fw"></i> Lightings</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-9 col-sm-6 col-md-6 hidden-xs"> 
          <!-- Search -->
          
          <div class="top-search">
            <div id="search">
              <form>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" name="search">
                  <select class="cate-dropdown hidden-xs hidden-sm" name="category_id">
                    <option>All Categories</option>
                    <option>women</option>
                    <option>&nbsp;&nbsp;&nbsp;Chair </option>
                    <option>&nbsp;&nbsp;&nbsp;Decoration</option>
                    <option>&nbsp;&nbsp;&nbsp;Lamp</option>
                    <option>&nbsp;&nbsp;&nbsp;Handbags </option>
                    <option>&nbsp;&nbsp;&nbsp;Sofas </option>
                    <option>&nbsp;&nbsp;&nbsp;Essential </option>
                    <option>Men</option>
                    <option>Electronics</option>
                    <option>&nbsp;&nbsp;&nbsp;Mobiles </option>
                    <option>&nbsp;&nbsp;&nbsp;Music &amp; Audio </option>
                  </select>
                  <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div>
          </div>
          
          <!-- End Search --> 
        </div>
        <div class="call-us hidden-sm"> <i class="fa fa-phone"></i>
          <div class="call-us-inner"> <span class="call-text">free call us</span> <span class="call-num">Call: + 0123 456 789</span> </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- end nav --> 
  
  <!-- Home Slider Start -->
  <div class="main-slideshow">
    <div class="home-slider">
      <div class="wpb_wrapper">
        <div class="wpb_revslider_element wpb_content_element">
          <div id="rev_slider_6_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#eee;padding:0px;margin-top:0px;margin-bottom:0px;"> 
            <!-- START REVOLUTION SLIDER 5.0.5 auto mode -->
            <div id="rev_slider_6_1" class="rev_slider fullwidthabanner tp-overflow-hidden" style="display:none;" data-version="5.0.5">
              <ul>
                
                <!-- SLIDE  -->
                <li data-index="rs-17" data-transition="3dcurtain-horizontal,3dcurtain-vertical,cube,cube-horizontal" data-slotamount="7,7,7,7"  data-easein="default,default,default,default" data-easeout="default,default,default,default" data-masterspeed="600,600,600,600" data-rotate="0,0,0,0"  data-saveperformance="off"  data-title="Slide-8" data-description=""> 
                  <!-- MAIN IMAGE --> 
                  <img src="images/slider/slider-bg1.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina> 
                  <!-- LAYERS --> 
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption black lft tp-resizeme" data-x="center" data-hoffset="200" data-y="center" data-voffset="-90" data-speed="300" data-start="1000" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                    <p class="text-center" style="font-size: 15px; color: #333; font-weight: bold; letter-spacing: 1px; text-transform: uppercase;"> DESIGN NEW STYLE </p>
                  </div>
                  
                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption black skewfromrightshort tp-resizeme" data-x="center" data-hoffset="200" data-y="center" data-voffset="-40" data-speed="300" data-start="1100" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
                    <h1 class="text-center" style="font-size: 65px; color: #1267b3; font-weight: bold; text-transform: uppercase;">New collection</h1>
                  </div>
                  
                  <!-- LAYER NR. 6 -->
                  <div class="tp-caption black skewfromleft tp-resizeme" data-x="center" data-hoffset="200" data-y="center" data-voffset="20" data-speed="300" data-start="1200" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">
                   <p class="text-center" style=" font-size: 18px; color: #666; line-height:25px;"> Donec vitae hendrerit arcu, sit amet faucibus nisl.<br>
                      Cras pretium arcu ex.</p>
                  </div>
                  <!-- LAYER NR. 7 -->
                  <div class="tp-caption black skewfromright tp-resizeme" data-x="center" data-hoffset="200" data-y="center" data-voffset="90" data-speed="300" data-start="1600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 11; max-width: auto; max-height: auto; white-space: nowrap;"> <a href="#" class="btn outline btn-white" style="font-size: 17px; padding:12px 25px 10px; background-color:#fff; text-transform:uppercase; " target="_blank">View more</a> <a href="#" class="btn outline btn-color" style="margin-left: 15px; background: #1267b3;padding: 12px 25px 10px; font-size: 17px; text-transform: uppercase;" target="_blank">All Shop</a> </div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-14" data-transition="3dcurtain-horizontal,3dcurtain-vertical,cube,cube-horizontal" data-slotamount="7,7,7,7"  data-easein="default,default,default,default" data-easeout="default,default,default,default" data-masterspeed="600,600,600,600"  data-rotate="0,0,0,0"  data-saveperformance="off"  data-title="Slide-7" data-description=""> 
                  <!-- MAIN IMAGE --> 
                  <img src="images/slider/slider-bg1.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina> 
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption black lft tp-resizeme" data-x="center" data-hoffset="-200" data-y="center" data-voffset="-130" data-speed="300" data-start="1000" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                    <p class="text-center" style="font-size: 15px; color: #fff; font-weight: bold; letter-spacing: 1px; text-transform: uppercase;"> Lookbook 2017 </p>
                  </div>
                  
                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption black skewfromrightshort tp-resizeme" data-x="center" data-hoffset="-200" data-y="center" data-voffset="-80" data-speed="300" data-start="1100" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
                    <h1 class="text-center" style="font-size: 55px; color: #fff; font-weight: bold; text-transform: uppercase;">Hot</h1>
                  </div>
                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption black skewfromrightshort tp-resizeme" data-x="center" data-hoffset="-200" data-y="center" data-voffset="-30" data-speed="300" data-start="1100" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">
                    <h2 class="text-center" style="font-size: 38px; color: #fff; font-weight: 600; letter-spacing:4px; text-transform: uppercase;">Collection</h2>
                  </div>
                  
                  <!-- LAYER NR. 6 -->
                  <div class="tp-caption black skewfromleft tp-resizeme" data-x="center" data-hoffset="-200" data-y="center" data-voffset="25" data-speed="300" data-start="1200" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">                    <p class="text-center" style=" font-size: 18px; color: #fff; line-height:28px; margin-bottom:10px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,<br>
                      sed diam nonummy nibh euismod tincidunt ut laoree.</p>
                  </div>
                  <!-- LAYER NR. 7 -->
                 <div class="tp-caption black skewfromright tp-resizeme" data-x="center" data-hoffset="-200" data-y="center" data-voffset="90" data-speed="300" data-start="1600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 11; max-width: auto; max-height: auto; white-space: nowrap;"> <a href="#" class="btn outline btn-color" style=" background: #1267b3;padding: 12px 25px 10px; font-size: 17px; text-transform: uppercase; margin-right:15px" target="_blank">View Collection</a> <a href="#" class="btn outline btn-white" style="font-size: 17px; padding:12px 25px 10px; background-color:#fff; text-transform:uppercase; " target="_blank">Buy now</a> </div>
                </li>
                
                <!-- SLIDE  -->
                <li data-index="rs-15" data-transition="3dcurtain-horizontal,3dcurtain-vertical,cube,cube-horizontal" data-slotamount="7,7,7,7"  data-easein="default,default,default,default" data-easeout="default,default,default,default" data-masterspeed="600,600,600,600"  data-rotate="0,0,0,0"  data-saveperformance="off"  data-title="Slide-8" data-description=""> 
                  <!-- MAIN IMAGE --> 
                  <img src="images/slider/slider-bg1.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina> 
                  <!-- LAYERS --> 
                  
                  <!-- LAYERS --> 
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption black lft tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="-130" data-speed="300" data-start="1000" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                    <p class="text-center" style="font-size: 15px; color: #fff; font-weight: bold; letter-spacing: 1px; text-transform: uppercase;"> Luxury Underwear </p>
                  </div>
                  
                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption black skewfromrightshort tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="-80" data-speed="300" data-start="1100" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">
                    <h1 class="text-center" style="font-size: 65px; color: #fff; font-weight: bold; text-transform: uppercase;"> Season sale </h1>
                  </div>
                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption black skewfromrightshort tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="-12" data-speed="300" data-start="1100" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">
                    <h2 class="text-center" style="font-size: 50px; color: #fff; font-weight: 600; letter-spacing:5px; text-transform: uppercase;">75% off</h2>
                  </div>
                  
                  <!-- LAYER NR. 6 -->
                  <div class="tp-caption black skewfromleft tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="52" data-speed="300" data-start="1200" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">
                    <p class="text-center" style="font-size: 18px; color: #fff; line-height:22px;"> Sed lacinia urna a tincidunt mattis tortor neque<br>
                      adipiscing diam cursus </p>
                  </div>
                  <!-- LAYER NR. 7 -->
                  <div class="tp-caption black skewfromright tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="130" data-speed="300" data-start="1600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 11; max-width: auto; max-height: auto; white-space: nowrap;"> <a href="#" class="btn outline btn-color" style=" background: #1267b3;padding: 12px 25px 10px; font-size: 17px; text-transform: uppercase; margin-right:15px" target="_blank">View more</a> <a href="#" class="btn outline btn-white" style="font-size: 17px; padding:12px 25px 10px; background-color:#fff; text-transform:uppercase; " target="_blank">Buy now</a> </div>
                </li>
                <!-- SLIDE  -->
              </ul>
              <div class="tp-bannertimer" style="visibility: hidden !important;"></div>
            </div>
          </div>
          <!-- END REVOLUTION SLIDER --></div>
      </div>
    </div>
    <!-- .fullwidth-slider --> 
    
    <!-- .slide-slider-nav --> 
  </div>
  <!-- End home section --> 
  <!-- service section -->
  
  <div class="jtv-service-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-4 col-xs-12">
          <div class="jtv-service">
            <div class="ser-icon"> <i class="fa fa-truck flip-horizontal"></i> </div>
            <div class="service-content">
              <h5>FREE SHIPPING WORLDWIDE </h5>
              <p>free ship-on oder over $299.00</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-xs-12">
          <div class="jtv-service">
            <div class="ser-icon"> <i class="fa fa-mail-forward"></i> </div>
            <div class="service-content">
              <h5>MONEY BACK GUARATEE! </h5>
              <p>30 days money back guarantee!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-xs-12">
          <div class="jtv-service">
            <div class="ser-icon"> <i class="fa fa-comments flip-horizontal"></i> </div>
            <div class="service-content">
              <h5>24/7 CUSTOMER SERVICE </h5>
              <p>We support online 24 hours a day</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--special-products-->
  
  <div class="container">
    <div class="special-products">
      <div class="page-header">
        <h2>special products</h2>
      </div>
      <div class="special-products-pro">
        <div class="slider-items-products">
          <div id="special-products-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4">
              <div class="product-item">
                <div class="item-inner">
                  <div class="product-thumb has-hover-img"> <a title="Ipsums Dolors Untra" href="single_product.html">
                    <figure> <img src="images/products/img01.jpg" alt=""> <img class="hover-img" src="images/products/img01.jpg" alt=""></figure>
                    </a>
                    <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                        </div>
                        <div class="pro-action">
                          <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="item-inner">
                  <div class="product-thumb has-hover-img"> <a title="Ipsums Dolors Untra" href="single_product.html">
                    <figure> <img class="first-img" src="images/products/img01.jpg" alt=""> <img class="hover-img" src="images/products/img01.jpg" alt=""></figure>
                    </a>
                    <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box">
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                          </div>
                          <div class="pro-action">
                            <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="item-inner">
                  <div class="product-thumb has-hover-img"> <a title="Ipsums Dolors Untra" href="single_product.html">
                    <figure> <img class="first-img" src="images/products/img01.jpg" alt=""> <img class="hover-img" src="images/products/img01.jpg" alt=""></figure>
                    </a>
                    <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box">
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                          </div>
                        </div>
                        <div class="pro-action">
                          <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="item-inner">
                  <div class="icon-sale-label sale-left">Sale</div>
                  <div class="icon-new-label new-right">New</div>
                  <div class="product-thumb has-hover-img"> <a title="Ipsums Dolors Untra" href="single_product.html">
                    <figure> <img class="first-img" src="images/products/img01.jpg" alt=""> <img class="hover-img" src="images/products/img01.jpg" alt=""></figure>
                    </a>
                    <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                        </div>
                        <div class="pro-action">
                          <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="item-inner">
                  <div class="product-thumb has-hover-img">
                    <div class="icon-new-label new-left">New</div>
                    <a title="Ipsums Dolors Untra" href="single_product.html">
                    <figure> <img class="first-img" src="images/products/img01.jpg" alt=""> <img class="hover-img" src="images/products/img01.jpg" alt=""></figure>
                    </a>
                    <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box">
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                          </div>
                        </div>
                        <div class="pro-action">
                          <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="item-inner">
                  <div class="product-thumb has-hover-img"> <a title="Ipsums Dolors Untra" href="single_product.html">
                    <figure> <img class="first-img" src="images/products/img01.jpg" alt=""> <img class="hover-img" src="images/products/img01.jpg" alt=""></figure>
                    </a>
                    <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                        </div>
                        <div class="pro-action">
                          <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- end main container -->
  <div class="container">
    <div class="block-static2-inner">
      <div class="img"><a href="#"><img class="alignnone size-full" src="images/banner6.jpg" alt="banner6"></a></div>
      <div class="content">
        <h3>big offer 2017</h3>
        <h2>45% off</h2>
        <p>Lorem Ipsum is simply dummy text. </p>
      </div>
      <div class="trending">
        <div class="trending-inner">
          <h3>Creative</h3>
          <h2>HUGE SALE</h2>
          <p>New Design </p>
        </div>
      </div>
    </div>
  </div>
  <!-- main container -->
  <div class="main-container col1-layout">
    <div class="container">
      <div class="row"> 
        
        <!-- Home Tabs  -->
        <div class="col-sm-8 col-md-9 col-xs-12">
          <div class="home-tab">
            <ul class="nav home-nav-tabs home-product-tabs">
              <li class="active"><a href="#featured" data-toggle="tab" aria-expanded="false">Featured products</a></li>
              <li> <a href="#top-sellers" data-toggle="tab" aria-expanded="false">Top Sellers</a> </li>
            </ul>
            <div id="productTabContent" class="tab-content">
              <div class="tab-pane active in" id="featured">
                <div class="featured-pro">
                  <div class="slider-items-products">
                    <div id="featured-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4">
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumb has-hover-img">
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="icon-new-label new-right"><span>New</span></div>
                              <figure> <a href="single_product.html"><img src="images/products/img01.jpg" alt=""></a> <a class="hover-img" href="#"><img src="images/products/img01.jpg" alt=""></a></figure>
                              <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title">
                                  <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4>
                                </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                  <div class="pro-action">
                                    <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumb has-hover-img"> <a title="Ipsums Dolors Untra" href="single_product.html">
                              <figure> <img src="images/products/img01.jpg" alt=""> <img class="hover-img" src="images/products/img01.jpg" alt=""></figure>
                              </a>
                              <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title">
                                  <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4>
                                </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                    <div class="pro-action">
                                      <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumb has-hover-img"> <a title="Ipsums Dolors Untra" href="single_product.html">
                              <figure> <img src="images/products/img01.jpg" alt=""> <img class="hover-img" src="images/products/img01.jpg" alt=""></figure>
                              </a>
                              <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title">
                                  <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4>
                                </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                  <div class="pro-action">
                                    <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="icon-sale-label sale-left">Sale</div>
                            <div class="icon-new-label new-right">New</div>
                            <div class="product-thumb has-hover-img"> <a title="Ipsums Dolors Untra" href="single_product.html">
                              <figure> <img src="images/products/img01.jpg" alt=""> <img class="hover-img" src="images/products/img01.jpg" alt=""></figure>
                              </a>
                              <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title">
                                  <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4>
                                </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                  <div class="pro-action">
                                    <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumb has-hover-img"> <a title="Ipsums Dolors Untra" href="single_product.html">
                              <figure> <img src="images/products/img01.jpg" alt=""> <img class="hover-img" src="images/products/img01.jpg" alt=""></figure>
                              </a>
                              <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title">
                                  <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4>
                                </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                  <div class="pro-action">
                                    <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumb has-hover-img"> <a title="Ipsums Dolors Untra" href="single_product.html">
                              <figure> <img src="images/products/img01.jpg" alt=""> <img class="hover-img" src="images/products/img01.jpg" alt=""></figure>
                              </a>
                              <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title">
                                  <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4>
                                </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                  <div class="pro-action">
                                    <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="top-sellers">
                <div class="top-sellers-pro">
                  <div class="slider-items-products">
                    <div id="top-sellers-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col4">
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumb has-hover-img">
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="icon-new-label new-right">New</div>
                              <figure> <a href="single_product.html"><img src="images/products/img01.jpg" alt=""></a> <a class="hover-img" href="#"><img src="images/products/img01.jpg" alt=""></a></figure>
                              <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title">
                                  <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4>
                                </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                  <div class="pro-action">
                                    <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumb has-hover-img"> <a title="Ipsums Dolors Untra" href="single_product.html">
                              <figure> <img src="images/products/img01.jpg" alt=""> <img class="hover-img" src="images/products/img01.jpg" alt=""></figure>
                              </a>
                              <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title">
                                  <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4>
                                </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                    <div class="pro-action">
                                      <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumb has-hover-img"> <a title="Ipsums Dolors Untra" href="single_product.html">
                              <figure> <img src="images/products/img01.jpg" alt=""> <img class="hover-img" src="images/products/img01.jpg" alt=""></figure>
                              </a>
                              <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title">
                                  <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4>
                                </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                  <div class="pro-action">
                                    <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="icon-sale-label sale-left">Sale</div>
                            <div class="icon-new-label new-right">New</div>
                            <div class="product-thumb has-hover-img"> <a title="Ipsums Dolors Untra" href="single_product.html">
                              <figure> <img src="images/products/img01.jpg" alt=""> <img class="hover-img" src="images/products/img01.jpg" alt=""></figure>
                              </a>
                              <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title">
                                  <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4>
                                </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                  <div class="pro-action">
                                    <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumb has-hover-img"> <a title="Ipsums Dolors Untra" href="single_product.html">
                              <figure> <img src="images/products/img01.jpg" alt=""> <img class="hover-img" src="images/products/img01.jpg" alt=""></figure>
                              </a>
                              <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title">
                                  <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4>
                                </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box">
                                      <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                      <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                    </div>
                                  </div>
                                  <div class="pro-action">
                                    <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumb has-hover-img"> <a title="Ipsums Dolors Untra" href="single_product.html">
                              <figure> <img src="images/products/img01.jpg" alt=""> <img class="hover-img" src="images/products/img01.jpg" alt=""></figure>
                              </a>
                              <div class="pr-info-area animated animate2"><a href="quick_view.html" class="quick-view"><i class="fa fa-search"><span>Quick view</span></i></a> <a href="wishlist.html" class="wishlist"><i class="fa fa-heart"><span>Wishlist</span></i></a> <a href="compare.html" class="compare"><i class="fa fa-exchange"><span>Compare</span></i></a> </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title">
                                  <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4>
                                </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                  <div class="pro-action">
                                    <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="jtv-banner-top">
            <div class="jtv-banner-box">
              <div class=""> <a class="jtv-banner-inner-text" href="#">
                <div class="jtv-text">
                  <p class="animated animate1"><span>sale up to</span><span>25% off</span></p>
                  <p class="animated animate2">On selected products</p>
                </div>
                <div class="jtv-banner-box-image"> <img src="images/chair-img.png" alt="Catbox-Images"> </div>
                </a> </div>
            </div>
            <!-- End jtv-banner-box --> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="top-banner">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="jtv-banner3">
            <div class="jtv-banner3-inner"><a href="#"><img src="images/banner3.jpg" alt=""></a>
              <div class="hover_content">
                <div class="hover_data">
                  <div class="title"> new trend </div>
                  <div class="desc-text"> Lorem ipsum dolor sit</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="jtv-banner1"><a href="#"><img src="images/banner1.jpg" alt=""></a>
            <div class="hover_content">
              <div class="hover_data">
                <div class="title"> Season sale </div>
                <div class="desc-text"> offer </div>
                <div class="shop-now"><a href="#">Shop now</a></div>
              </div>
            </div>
          </div>
          <div class="jtv-banner2"><a href="#"><img src="images/banner2.jpg" alt=""></a>
            <div class="hover_content">
              <div class="hover_data">
                <div class="title"> New year Sale</div>
                <div class="desc-text"> 35% Off all items </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- category area start -->
  <div class="jtv-category-area">
    <div class="container">
      <div class="row"> <!-- banner -->
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="jtv-banner">
            <div class="upper">
              <div class="jtv-subbanner1"><a href="#"><img class="img-respo" alt="jtv-subbanner1" src="images/banner4.jpg"></a>
                <div class="text-block">
                  <div class="text1"><a href="#"> Shoes</a></div>
                  <div class="text2"><a href="#">special offer</a></div>
                  <div class="text3"><a href="#">35% off</a></div>
                </div>
              </div>
              <div class="jtv-subbanner2"><a href="#"><img class="img-respo" alt="jtv-subbanner2" src="images/banner5.jpg"></a>
                <div class="text-block">
                  <div class="text1"><a href="#">Handbag</a></div>
                  <div class="text2"><a href="#">Best offer</a></div>
                  <div class="text3"><a href="#">25% off</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
          <div class="jtv-single-cat">
            <div class="page-header">
              <h2>Best sale of week</h2>
            </div>
            <div class="jtv-product">
              <div class="product-img"> <a href="single_product.html"> <img src="images/products/img01.jpg" alt=""> <img class="secondary-img" src="images/products/img01.jpg" alt=""> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="jtv-product">
              <div class="product-img"> <a href="single_product.html"> <img src="images/products/img01.jpg" alt=""> <img class="secondary-img" src="images/products/img01.jpg" alt=""> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="jtv-product jtv-cat-margin">
              <div class="product-img"> <a href="single_product.html"> <img src="images/products/img01.jpg" alt=""> <img class="secondary-img" src="images/products/img01.jpg" alt=""> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                <div class="price-box">
                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="jtv-product jtv-cat-margin">
              <div class="product-img"> <a href="single_product.html"> <img src="images/products/img01.jpg" alt=""> <img class="secondary-img" src="images/products/img01.jpg" alt=""> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                <div class="price-box">
                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="jtv-product jtv-cat-margin">
              <div class="product-img"> <a href="single_product.html"> <img src="images/products/img01.jpg" alt=""> <img class="secondary-img" src="images/products/img01.jpg" alt=""> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                <div class="price-box">
                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>
            <div class="jtv-product jtv-cat-margin">
              <div class="product-img"> <a href="single_product.html"> <img src="images/products/img01.jpg" alt=""> <img class="secondary-img" src="images/products/img01.jpg" alt=""> </a> </div>
              <div class="jtv-product-content">
                <h3><a href="single_product.html">Lorem ipsum dolor sit amet</a></h3>
                <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span> </div>
                <div class="jtv-product-action">
                  <div class="jtv-extra-link">
                    <div class="button-cart">
                      <button><i class="fa fa-shopping-cart"></i></button>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="#"><i class="fa fa-heart"></i></a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- category-area end -->
  <div class="container">
    <div class="row"> 
      
      <!-- daily deal section-->
      <div class="col-md-6">
        <div class="daily-deal-section daily-deal-parallax">
          <div class="daily-deal">
            <h3 class="deal-title">DEAL THIS WEEK</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <div class="box-timer">
              <div class="time" data-countdown="countdown" data-date="09-30-2017-10-20-50"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6"> 
        <!-- Testimonials Box -->
        <div class="testimonials">
          <div class="slider-items-products">
            <div id="testimonials-slider" class="product-flexslider hidden-buttons home-testimonials">
              <div class="slider-items slider-width-col4 ">
                <div class="holder">
                  <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. </p>
                  <div class="thumb"> <img src="images/testimonials-img1.jpg" alt="testimonials img"> </div>
                  <strong class="name">John Doe</strong> <strong class="designation">CEO, Company</strong> </div>
                <div class="holder">
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                  <div class="thumb"> <img src="images/testimonials-img1.jpg" alt="testimonials img"> </div>
                  <strong class="name">Vince Roy</strong> <strong class="designation">CEO, Newspaper</strong> </div>
                <div class="holder">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                    minim veniam, quis nostrud. </p>
                  <div class="thumb"> <img src="images/testimonials-img1.jpg" alt="testimonials img"> </div>
                  <strong class="name">John Doe</strong> <strong class="designation">CEO, ABC Softwear</strong> </div>
                <div class="holder">
                  <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat.</p>
                  <div class="thumb"> <img src="images/testimonials-img1.jpg" alt="testimonials img"> </div>
                  <strong class="name">Vince Roy</strong> <strong class="designation">CEO, XYZ Softwear</strong> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Testimonials Box --> 
      
    </div>
  </div>
  <!-- Latest news start -->
  
  <div class="container">
    <div id="latest-news" class="news">
      <div class="page-header">
        <h2>Latest news</h2>
      </div>
      <div class="slider-items-products">
        <div id="latest-news-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!-- Item -->
            <div class="item">
              <div class="jtv-single-blog">
                <div class="blog-image"> <a href="single_post.html"> <img src="images/blog-img1.jpg" alt="Blog"> </a> <span class="blog-date"> <a href="#"> <span class="month-date"><small>20</small>Feb</span> </a> </span> </div>
                <div class="blog-content">
                  <div class="title-desc"> <a href="single_post.html">
                    <h4>Sed do eiusmod sit amet</h4>
                    </a>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,</p>
                  </div>
                  <div class="blog-info"> <span class="author-name"> <i class="fa fa-user"></i>By <a href="#">John Doe</a> </span> <span class="comments-number"> <i class="fa fa-comment"></i>20 Comment </span> </div>
                </div>
              </div>
            </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item">
              <div class="jtv-single-blog">
                <div class="blog-image"> <a href="single_post.html"> <img src="images/blog-img1.jpg" alt="Blog"> </a> <span class="blog-date"> <a href="#"> <span class="month-date"><small>15</small>Mar</span> </a> </span> </div>
                <div class="blog-content">
                  <div class="title-desc"> <a href="single_post.html">
                    <h4>Lorem ipsum dolor sit amet</h4>
                    </a>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,</p>
                  </div>
                  <div class="blog-info"> <span class="author-name"> <i class="fa fa-user"></i>By <a href="#">Vince Roy</a> </span> <span class="comments-number"> <i class="fa fa-comment"></i>20 Comment </span> </div>
                </div>
              </div>
            </div>
            <!-- End Item --> 
            <!-- Item -->
            <div class="item">
              <div class="jtv-single-blog">
                <div class="blog-image"> <a href="single_post.html"> <img src="images/blog-img1.jpg" alt="Blog"> </a> <span class="blog-date"> <a href="#"> <span class="month-date"><small>30</small>Aug</span> </a> </span> </div>
                <div class="blog-content">
                  <div class="title-desc"> <a href="single_post.html">
                    <h4>Sed do eiusmod sit amet</h4>
                    </a>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,</p>
                  </div>
                  <div class="blog-info"> <span class="author-name"> <i class="fa fa-user"></i>By <a href="#">John Doe</a> </span> <span class="comments-number"> <i class="fa fa-comment"></i>20 Comment </span> </div>
                </div>
              </div>
            </div>
            <!-- End Item --> 
            <!-- Item -->
            <div class="item">
              <div class="jtv-single-blog">
                <div class="blog-image"> <a href="single_post.html"> <img src="images/blog-img1.jpg" alt="Blog"> </a> <span class="blog-date"> <a href="#"> <span class="month-date"><small>08</small>Jun</span> </a> </span> </div>
                <div class="blog-content">
                  <div class="title-desc"> <a href="single_post.html">
                    <h4>Lorem ipsum dolor sit amet</h4>
                    </a>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,</p>
                  </div>
                  <div class="blog-info"> <span class="author-name"> <i class="fa fa-user"></i>By <a href="#">Vince Roy</a> </span> <span class="comments-number"> <i class="fa fa-comment"></i>20 Comment </span> </div>
                </div>
              </div>
            </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
  
  <footer> 
    
    <!-- our clients Slider -->
    <div class="our-clients">
      <div class="container">
        <div class="col-md-12">
          <div class="slider-items-products">
            <div id="our-clients-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col6"> 
                
                <!-- Item -->
                <div class="item"> <a href="#"><img src="images/brand1.png" alt="Image"></a> </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item"> <a href="#"><img src="images/brand2.png" alt="Image"></a> </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item"> <a href="#"><img src="images/brand3.png" alt="Image"></a> </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item"> <a href="#"><img src="images/brand4.png" alt="Image"></a> </div>
                <!-- End Item --> 
                <!-- Item -->
                <div class="item"> <a href="#"><img src="images/brand5.png" alt="Image"></a> </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item"> <a href="#"><img src="images/brand6.png" alt="Image"></a> </div>
                <!-- End Item --> 
                
                <!-- Item -->
                <div class="item"> <a href="#"><img src="images/brand7.png" alt="Image"></a> </div>
                <!-- End Item --> 
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-3 col-xs-12 col-lg-2 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Information<a class="expander visible-xs" href="#TabBlock-1">+</a></h3>
            <div class="tabBlock" id="TabBlock-1">
              <ul class="list-links list-unstyled">
                <li><a href="#s">Delivery Information</a></li>
                <li><a href="#">Discount</a></li>
                <li><a href="sitemap.html">Sitemap</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="faq.html">FAQs</a></li>
                <li><a href="#">Terms &amp; Condition</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xs-12 col-lg-2 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Insider<a class="expander visible-xs" href="#TabBlock-3">+</a></h3>
            <div class="tabBlock" id="TabBlock-3">
              <ul class="list-links list-unstyled">
                <li> <a href="sitemap.html">Sites Map </a> </li>
                <li> <a href="#">News</a> </li>
                <li> <a href="#">Trends</a> </li>
                <li> <a href="about_us.html">About Us</a> </li>
                <li> <a href="contact_us.html">Contact Us</a> </li>
                <li> <a href="#">My Orders</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-2 col-xs-12 col-lg-2 collapsed-block">
          <div class="footer-links">
            <h3 class="links-title">Service<a class="expander visible-xs" href="#TabBlock-4">+</a></h3>
            <div class="tabBlock" id="TabBlock-4">
              <ul class="list-links list-unstyled">
                <li> <a href="account_page.html">Account</a> </li>
                <li> <a href="wishlist.html">Wishlist</a> </li>
                <li> <a href="shopping_cart.html">Shopping Cart</a> </li>
                <li> <a href="#">Return Policy</a> </li>
                <li> <a href="#">Special</a> </li>
                <li> <a href="#">Lookbook</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-xs-12 col-lg-3">
          <h3 class="links-title">Contact us</h3>
          <p>Lorem Ipsum is simply dummy text of the print and typesetting industry.</p>
          <div class="footer-content">
            <div class="email"> <i class="fa fa-envelope"></i>
              <p>Support@themes.com</p>
            </div>
            <div class="phone"> <i class="fa fa-phone"></i>
              <p>(800) 0123 456 789</p>
            </div>
            <div class="address"> <i class="fa fa-map-marker"></i>
              <p>My Company, 12/34 - West 21st Street, New York, USA</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-3">
          <div class="footer-links">
            <div class="footer-newsletter">
              <h3 class="links-title">Sign up for newsletter</h3>
              <form id="newsletter-validate-detail" method="post" action="#">
                <div class="newsletter-inner">
                  <input class="newsletter-email" name='Email' placeholder='Enter Your Email'/>
                  <button class="button subscribe" type="submit" title="Subscribe">Subscribe</button>
                </div>
              </form>
            </div>
            <div class="social">
              <ul class="inline-mode">
                <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                <li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                <li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank" href="https://www.pinterest.com/"><i class="fa fa-linkedin"></i></a></li>
                <li class="social-network rss"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-rss"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-coppyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12 coppyright"> Copyright © 2017 <a href="#"> Fancy </a>. All Rights Reserved. </div>
          <div class="col-sm-6 col-xs-12">
            <div class="payment">
              <ul>
                <li><a href="#"><img title="Visa" alt="Visa" src="images/visa.png"></a></li>
                <li><a href="#"><img title="Paypal" alt="Paypal" src="images/paypal.png"></a></li>
                <li><a href="#"><img title="Discover" alt="Discover" src="images/discover.png"></a></li>
                <li><a href="#"><img title="Master Card" alt="Master Card" src="images/master-card.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" class="totop"><i class="fa fa-arrow-up"></i></a> 
  <!-- End Footer --> 
  
</div>

<!-- JS --> 



<!-- jquery js --> 
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script> 

<script type="text/javascript" src="{{mix('js/app.js')}}"></script>

<!-- bootstrap js --> 
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script> 

<!-- Slider Js --> 
<script type="text/javascript" src="{{asset('js/revolution-slider.js')}}"></script> 

<!-- owl.carousel.min js --> 
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script> 

<!-- bxslider js --> 
<script type="text/javascript" src="{{asset('js/jquery.bxslider.js')}}"></script> 

<!-- megamenu js --> 
<script type="text/javascript" src="{{asset('js/megamenu.js')}}"></script> 
<script type="text/javascript">
  /* <![CDATA[ */   
  var mega_menu = '0';
  
  /* ]]> */
  </script> 

<!-- jquery.mobile-menu js --> 
<script type="text/javascript" src="{{asset('js/mobile-menu.js')}}"></script> 

<!--jquery-ui.min js --> 
<script type="text/javascript" src="{{asset('js/jquery-ui.js')}}"></script> 

<!-- main js --> 
<script type="text/javascript" src="{{asset('js/main.js')}}"></script> 

<!-- countdown js --> 
<script type="text/javascript" src="{{asset('js/countdown.js')}}"></script> 

<!-- Revolution slider --> 
<script type="text/javascript">
			var setREVStartSize=function(){};
						
				
			setREVStartSize();
			function revslider_showDoubleJqueryError(sliderID) {}
			var tpj=jQuery;
			tpj.noConflict();
			var revapi6;
			tpj(document).ready(function() {
				if(tpj("#rev_slider_6_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_6_1");
				}else{
					revapi6 = tpj("#rev_slider_6_1").show().revolution({
						sliderType:"standard",
						sliderLayout:"auto",
						dottedOverlay:"none",
						delay:6000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
							onHoverStop:"off",
							touch:{
								touchenabled:"on",
								swipe_threshold: 0.7,
								swipe_min_touches: 1,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							}
							,
							arrows: {
								style:"hades",
								enable:true,
								hide_onmobile:false,
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								tmp:'<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div></div>',
								left: {
									h_align:"left",
									v_align:"center",
									h_offset:20,
									v_offset:0
								},
								right: {
									h_align:"right",
									v_align:"center",
									h_offset:20,
									v_offset:0
								}
							}
							,
							bullets: {
								enable:true,
								hide_onmobile:false,
								style:"hades",
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								direction:"horizontal",
								h_align:"center",
								v_align:"bottom",
								h_offset:0,
								v_offset:20,
								space:5,
								tmp:'<span class="tp-bullet-image"></span>'
							}
						},
						gridwidth:1920,
						gridheight:650,
						lazyType:"none",
						shadow:0,
						spinner:"spinner0",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"on",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			});	/*ready*/
		</script>
</body>
</html>
