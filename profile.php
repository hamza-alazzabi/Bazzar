<?php
    require 'session.php';

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Bazaar">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>profile</title>
        
        <!-- Favicon and Touch Icons -->
        <link href="ABC.png" rel="shortcut icon" type="image/png">
        <link href="ABC.png" rel="apple-touch-icon" sizes="57x57">
        <link href="ABC.png" rel="apple-touch-icon" sizes="72x72">
        <link href="ABC.png" rel="apple-touch-icon" sizes="114x114">
        <link href="ABC.png" rel="apple-touch-icon" sizes="144x144">
        
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link href="css/fontawesome.min.css" rel="stylesheet">
<!--        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
        <link href="font-awsome/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/simple-sidebar.css" rel="stylesheet">
        <link href="css/left-tool.css" rel="stylesheet">
        <link href="css/reset.css" rel="stylesheet">

        <!---- Link CSS for file------->
        <link href="css/file.css" rel="stylesheet">

        <!---- Link  for jquery------->
        <script src="jquery/jquery-3.3.1.js"></script>

        <!---- Link CSS for slideshow------->
        <link rel="stylesheet" type="text/css" href="css/style-slide.css">
        
        <!---- Link CSS for scroll-top------->
        <link href="css/scroll-top.css" rel="stylesheet">
        <style>
            #color{
                background-color: #08526d;
            }
            #search-right{
                float: right;
            }
            .footer{
            background-color: #08526d;
        }

        #menu-toggle {
        background-color:;
        height: ;
        line-height:18px;
        font-size: 20px;
        color: white;
        border: 1px solid white ;
        
        }


        #wrapper.toggled {
          padding-left: 200px;
        
        }

        #sidebar-wrapper {
          z-index: 1000;
          position: fixed;
          left: 200px;
          width: 0;
          height: 100%;
          margin-left: -200px;
          overflow-y: auto;
          background: #08526d;
          -webkit-transition: all 0.5s ease;
          -moz-transition: all 0.5s ease;
          -o-transition: all 0.5s ease;
          transition: all 0.5s ease;
        }

        #wrapper.toggled #sidebar-wrapper {
          width: 200px;
            overflow-x: hidden
        }

        #page-content-wrapper {
          width: 200%;
          position: absolute;
          padding: 15px;
        }

        #wrapper.toggled #page-content-wrapper {
          position: absolute;
          margin-right: -200px;
        }


         Sidebar Styles 

        .sidebar-nav {
          position: absolute;
          top: 0;
          width: 200px;
          margin: 0;
          padding: 0;
          list-style: none;
        }
        .sidebar-nav li a {
          display: block;
          text-decoration: none;
          color: #999999;
        }

        .sidebar-nav li a:hover {
          text-decoration: none;
          color: #fff;
/*          background: rgba(255, 255, 255, 0.2);*/
            background: #f1654c;
        }
        .menu-hr{
            background: white;
            padding: 0;
            margin: 0;
        }
        #menu-span{
            color: #f1654c;
            padding: 0;
            margin: 0;
        }

        .sidebar-nav>.sidebar-brand a{
          color: #fff;
          background: none;
        }
            .upper-bar{
                
            }
    </style>
    </head>
    <body>
       <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        MAIN MENU
                    </a>
                </li>
                <hr class="menu-hr">
                <li>
                    <span id="menu-span">Phones</span>
                </li>
                <hr class="menu-hr">
                <li>
                    <a href="#">Apple</a>
                </li>
                <li>
                    <a href="#">Samsung</a>
                </li>
                <li>
                    <a href="#">Huawei</a>
                </li>
                <li>
                    <a href="#">HTC</a>
                </li>
                <li>
                    <a href="#">Sony</a>
                </li>
                <li>
                    <a href="#">Blue</a>
                </li>
                <hr class="menu-hr">
                <li>
                    <span id="menu-span">Accessories</span>
                </li>
                <hr class="menu-hr">
                <li>
                    <a href="#">aer Phones</a>
                </li>
                <li>
                    <a href="#">charging</a>
                </li>
                <li>
                    <a href="#">Covers</a>
                </li>
                <li>
                    <a href="#">Smart Watch</a>
                </li>
                <li>
                    <a href="#">Screen Protact</a>
                </li>
                <li>
                    <a href="#">Power Bank</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <div class="upper-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm">
                      <a href="#menu-toggle" class="btn btn-lg fa fa-bars" id="menu-toggle"></a>
<!--
                       <i class="fa fa-phone"></i>
                       <a href="#"><span> 0218-914057595</span></a>
-->
                        
                    </div>
<!--
                    <div class="col-sm"><i class="fa fa-envelope-o"></i>
                        <span>bazaar.store311@gmail</span>
                    </div>
-->
                    
                    <div class="col-sm-2">
                        
                        <a class="btn btn-outline-danger btn-sm" id="f0f3" href="#" role="button"><i class="fa fa-gift"></i></a>
                        <a class="btn btn-outline-danger btn-sm" id="f06b" href="#" role="button"><i class="fa fa-bell"></i></a>
                        <a class="btn btn-outline-danger btn-sm" id="f0e0" href="#" role="button"><i class="fa fa-envelope"></i></a>
                    </div>
                   
                    <form class="form-inline my-2 my-lg-0 ">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-danger  my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
      <a class="navbar-brand" href="#"><img alt="Bazaar"  src="ABC.png" width="80%"></a>
          

  <!-- Links -->
  <ul class="navbar-nav ml-auto">
      
<!--
    <li class="nav-item">
      <a class="nav-link" href="#">Services</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Blog</a>
    </li>
-->

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        <?= $username; ?>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Setting</a>
        <a class="dropdown-item" href="logout.php">Logout</a>
      </div>
    </li>
  </ul>
</nav>
        
<!--
<div class="container">
    <div class="jumbotron jumbotron-fluid" id="color">
      <div class="container">
        <h1 class="text-center display-3 rounded p-1 text-light">Bazaar Mobile Store </h1>

          <h1 class="text-center display-2 bg-dark rounded p-1 text-light"><?= $name; ?></h1>
          <h2 class="text-center">E-Mail: <?= $email; ?></h2>
          <h2 class="text-center">Registered On: <?= $created; ?></h2>

          <p>phones , Accessoires and other for Mobile...</p> 
      </div>
    </div>
</div>
-->
<!--        start----------------------------------------------------------->
        
        <!-------------------START NAVBAR--------------->
        <header>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <span>Bazaar</span><span>Mobile Store</span>
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="main-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="profile.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="About-p.php">About <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
<!--
            <li class="nav-item">
            <a class="nav-link" href="index.php">sign in</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="#">sign up</a>
          </li>
-->
            
<!--
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
-->
        </ul>
      </div>
    </div>
    </nav>
        </header>
<!--
        <nav class="menu-left-1">
            <span class="close-btn-1 "><i class="fa fa-bars"></i></span>
            <ul id="father">
                <h1>MAIN MENU</h1>
                <li> Phones 
                     <ul class="son-1">
                        <li> Apple </li>
                        <li> Samsung </li>
                        <li> Huawei </li>
                        <li> Blue </li>

                        <li> Sony </li>
                        <li> HTC </li>

                    </ul> 
                </li>
                <li> Accessories
                    <ul class="son-1">
                        <li> aer Phones </li>
                        <li> harging</li>
                        <li> Covers </li>
                        <li> Screen Protact </li>
                        <li> Smart Watch</li>
                    </ul>     
                </li>

                <li> The Other 
                       <ul class="son-1">
                        <li> ?????????</li>
                        <li> ?????????</li>
                    </ul>  
                </li>

                 <li> Accessories
                <ul class="son-1">
                    <li> aer Phones </li>
                    <li> harging</li>
                    <li> Covers </li>

                </ul>     
            </li>
        </ul>     
    </nav>
-->
    <!------------ END NAVBAR-------------------->
    <!------------STRAT SLIDER ------------------>
<!--
 <div class="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
     <div class="carousel-inner">
         <div class="carousel-item carousel-one active">
              <img src="slider-img/slider1.gif" class="d-block w-100" alt="...">
         </div>
             <div class="carousel-item carousel-two">
                  <img src="slider-img/slider2.jpg" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item carousel-three">
                  <img src="slider-img/slider3.png" class="d-block w-100" alt="...">
             </div>
            <div class="carousel-item carousel-four">
                  <img src="slider-img/slider4.png" class="d-block w-100" alt="...">
             </div>
     </div>
       <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
-->
    <!------------END SLIDER ------------------>
    <!------ START: IMAGE SLIDER------>
        <div class="container">
        <div class="cycle-slideshow" 
             data-cycle-speed="1000"
             data-cycle-manual-speed="900"
             >
         <!--- data-cycle-fx="scrollHorz"--->
         <!------- END: IMAGE SLIDER------------->
            
        <!------ START: controllers------>
            <span class="cycle-prev"><b>&#60;</b></span>
            <span class="cycle-next"><b>&#62;</b></span>
<!--            <span class="cycle-pager"></span>-->
            
        <!------ END controllers---------->  
            
            
            <img src="slider-img/slider1.gif" alt="iphone-6">
            <img src="slider-img/slider4.png" alt="iphone-xr">
            <img src="slider-img/slider2.jpg" alt="bazaar">
            <img src="slider-img/slider3.png" alt="iphone-s">
        </div>
        </div>
         <!------ END IMAGE SLIDER------>
<!------------ Start phones---------------->

<div class="container">
    <div class="jumbotron">
    <div class="row">
        <div class="col-sm">
            <div class="img-thumbnail text-center">
            <img src="iphone/iPhone6s.png" alt="My desktop">
            <div class="caption text-center">
                <h3>Apple iPhone 6 (64GB)</h3>
                <p>
                   Space Gray <br>
                    by Apple <br>
                    <a href="#"> $99.99</a>
                </p>
                <p>
                <a href="#" id="" class="btn btn-primary" role="button">more details</a></p>
                <!--<span><a href="#" class="btn btn-primary" role="button">By Now</a></span>-->
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="img-thumbnail text-center">
            <img src="iphone/iPhone7.png" alt="My desktop">
            <div class="caption text-center">
                <h3>Apple iPhone 7 (32GB)</h3>
                <p>
                   Space Gray <br>
                    by Apple <br>
                <a href="#"> $190.99</a>
                </p>
                <p>
                <a href="#" id="" class="btn btn-primary" role="button">more details</a></p>
                <!--<span><a href="#" class="btn btn-primary" role="button">By Now</a></span>-->
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="img-thumbnail text-center">
            <img src="iphone/iPhone8.png" alt="My desktop">
            <div class="caption text-center">
                <h3>Apple iPhone 8 (64GB)</h3>
                <p>
                   Space Gray <br>
                    by Apple <br>
                    <a href="#"> $299.99</a>
                </p>
                <p>
                <a href="#" id="" class="btn btn-primary" role="button">more details</a></p>
                <!--<span><a href="#" class="btn btn-primary" role="button">By Now</a></span>-->
              </div>
        </div>
        </div>
        <div class="col-sm">
            <div class="img-thumbnail text-center">
            <img src="iphone/iPhone8.png" alt="My desktop">
            <div class="caption text-center">
                <h3>Apple iPhone 8 (64GB)</h3>
                <p>
                   Space Gray <br>
                    by Apple <br>
                    <a href="#"> $299.99</a>
                </p>
                <p>
                <a href="#" id="" class="btn btn-primary" role="button">more details</a></p>
                <!--<span><a href="#" class="btn btn-primary" role="button">By Now</a></span>-->
              </div>
        </div>
        </div>
        <div class="col-sm">
            <div class="img-thumbnail text-center">
            <img src="iphone/iPhone6s.png" alt="My desktop">
            <div class="caption text-center">
                <h3>Apple iPhone 6 (64GB)</h3>
                <p>
                   Space Gray <br>
                    by Apple <br>
                    <a href="#"> $99.99</a>
                </p>
                <p>
                <a href="#" id="" class="btn btn-primary" role="button">more details</a></p>
                <!--<span><a href="#" class="btn btn-primary" role="button">By Now</a></span>-->
              </div>
        </div>
        </div>
           <div class="col-sm">
            <div class="img-thumbnail text-center">
            <img src="iphone/iPhone7.png" alt="My desktop">
            <div class="caption text-center">
                <h3>Apple iPhone 7 (32GB)</h3>
                <p>
                   Space Gray <br>
                    by Apple <br>
                <a href="#"> $190.99</a>
                </p>
                <p>
                <a href="#" id="" class="btn btn-primary" role="button">more details</a></p>
                <!--<span><a href="#" class="btn btn-primary" role="button">By Now</a></span>-->
              </div>
            </div>
        </div>
        </div>
    </div>
</div>
        <!--    -----------------Accessoires-------------------->
        <div class="jumbotron-fluid">
        <div class="col-sm">
        <div class="thumbnail">
        <img src="Bazaar-headeraccess.jpg" width="85%" alt="My desktop" class="rounded mx-auto d-block">
        </div>
    </div>
        </div>
<div class="container">
    <div class="jumbotron">
    <div class="row">
        <div class="col-sm">
            <div class="img-thumbnail text-center">
            <img src="accessories/8PINHD_medium.png" alt="My desktop">
                <div class="caption">
                <h3>charging 100cm</h3>
                <p>
                    for iPhone <br>
                    by Apple <br>
                    <a href="#"> $10</a>
                </p>
                <p>
                <a href="#" id="" class="btn btn-primary" role="button">more details</a></p>
                <!--<span><a href="#" class="btn btn-primary" role="button">By Now</a></span>-->
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="img-thumbnail text-center">
                <img src="accessories/j.png" alt="My desktop">
                    <div class="caption">
                    <h3>charging 200cm</h3>
                    <p>
                       for samsung <br>
                        by samsung <br>
                        <a href="#">$9</a>
                    </p>
                        <p>
                <a href="#" id="" class="btn btn-primary" role="button">more details</a></p>
                <!--<span><a href="#" class="btn btn-primary" role="button">By Now</a></span>-->
              </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="img-thumbnail text-center">
            <img src="accessories/c2.png" alt="My desktop">
                <div class="caption">
                <h3>smile cover</h3>
                <p>pink
                    <br>
                    for samsung <br>
                    <a href="#"> $7</a>
                </p>
                <p>
                <a href="#" id="" class="btn btn-primary" role="button">more details</a></p>
                <!--<span><a href="#" class="btn btn-primary" role="button">By Now</a></span>-->
              </div>
        </div>
        </div>
        <div class="col-sm">
            <div class="img-thumbnail text-center">
            <img src="accessories/series4_cellular.png" alt="My desktop">
                <div class="caption">
                <h3>Apple Watch Series4</h3>
                <p>
                   for Apple <br>
                    by Apple <br>
                    <a href="#"> $209</a>
                </p>
                <p>
                <a href="#" id="" class="btn btn-primary" role="button">more details</a></p>
                <!--<span><a href="#" class="btn btn-primary" role="button">By Now</a></span>-->
              </div>
        </div>
        </div>
        <div class="col-sm">
            <div class="img-thumbnail text-center">
            <img src="accessories/c5.png" alt="My desktop">
                <div class="caption">
                <h3>smile cover</h3>
                <p>silver
                    <br>
                    for samsung <br>
                    <a href="#"> $7</a>
                </p>
                <p>
                <a href="#" id="" class="btn btn-primary" role="button">more details</a></p>
                <!--<span><a href="#" class="btn btn-primary" role="button">By Now</a></span>-->
              </div>
        </div>
        </div>
            <div class="col-sm">
            <div class="img-thumbnail text-center">
            <img src="accessories/p1.png" alt="My desktop">
                <div class="caption">
                <h3>power bank</h3>
                <p>
                   Black <br>
                    for all mobile <br>
                    <a href="#"> $50</a>
                </p>
                <p>
                <a href="#" id="" class="btn btn-primary" role="button">more details</a></p>
                <!--<span><a href="#" class="btn btn-primary" role="button">By Now</a></span>-->
              </div>
            </div>
        </div>
        </div>
    </div>
    
</div>
<footer class="footer">
<div class="container">
    <div class="row">
    <div class="col-md-6">
        <div class="site-info">
            <h2><span>Bazaar</span><span>Mobile Store</span></h2>
            <p> Mobile Store you can see all phones,Accessories mobile if it avalible or not,on market without leving home </p>
            <a href="#">Read More</a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="helpful-links">
        <h2>Helpful Links</h2>
            <div class="row">
                <div class="col">
                    <ul class="list-unstyled">
                        <a href="#"><li>About</li></a>
                        <a href="#"><li>Portofolio</li></a>
                        <a href="#"><li>Team</li></a>
                        <a href="#"><li>Price</li></a>
                        <a href="#"><li>privacy</li></a>
                    </ul>
                </div>
                <div class="col">
                    <ul class="list-unstyled">
                        <a href="#"><li>FAQ</li></a>
                        <a href="#"><li>Blog</li></a>
                        <a href="#"><li>How it Work</li></a>
                        <a href="#"><li>Benefits</li></a>
                        <a href="#"><li>Contact</li></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="contact">
            <h2>Contact Us</h2>
            <ul class="list-unstyled">
                <li>University of Tripoli LY</li>
                <li>phone: 0218 911234567</li>
                <li>Email: <a href="mailto:info@elitecorp.com?subject=contact">info@elitecorp.com</a></li>
            </ul> 
        </div>
    </div>
    </div> 
    <hr class="hr">
</div> 
        
</footer>
<!-- end footer -->
    
<!-- START COPYRIGHT -->
        
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col text-left text-uppercase">
                &copy; 2018- 2019 Bazaar.Store The zero squad All Right Reserved
            </div>
            <div class="col text-right">
                <ul class="list-unstyled">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--     include scroll-top-------->
<?php include 'scroll-top.php'; ?>
</div>        
        </div>  
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/scroll-top.js"></script>
    <script type="text/javascript" src="jquery/jquery.cycle2.min.js"></script>
    <script type="text/javascript" src="js/slider-fun.js"></script>
    <script type="text/javascript" src="menu.left.js"></script>
        <script type="text/javascript">
            
        //* Load Font Awesome
        
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {

    wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' );

}</script>
   <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    </body>
</html>