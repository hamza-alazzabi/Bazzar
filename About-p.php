<?php
    require 'session.php';

?>

<head>
	<title>BazaaR</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon and Touch Icons -->
    <link href="ABC.png" rel="shortcut icon" type="image/png">
    <link href="ABC.png" rel="apple-touch-icon" sizes="57x57">
    <link href="ABC.png" rel="apple-touch-icon" sizes="72x72">
    <link href="ABC.png" rel="apple-touch-icon" sizes="114x114">
    <link href="ABC.png" rel="apple-touch-icon" sizes="144x144">

    <!---- Link CSS for bootstrap ------->
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="font-awsome/css/font-awesome.min.css" rel="stylesheet">
<!--     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->

    <link rel="stylesheet" href="css/Css-About.css">
    <!---- Link CSS for left-tool ------->
    <link href="css/left-tool.css" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">

    <!---- Link CSS for file------->
    <link href="css/file.css" rel="stylesheet">

    <!---- Link  for jquery------->
    <script src="jquery/jquery-3.3.1.js"></script>

    <!---- Link CSS for slideshow------->
    <link rel="stylesheet" type="text/css" href="css/style-slide.css">

    <style type="text/css">
        #color{
                background-color: #08526d;
            }
        .footer{
            background-color: #08526d;
        }
    </style>
    </head>
<body>
<div class="upper-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm">
<!--                        <a href="#"><span><i class="fa fa-phone"></i> 0218-914057595</span></a>-->

                    </div>
                    <div class="col-sm">
                        <span><i class="fa fa-envelope-o"></i>bazaar.store311@gmail</span>
                    </div>

<!--
                    <div class="col-sm-2">

                        <a class="btn btn-outline-danger btn-sm" id="f0f3" href="#" role="button"><i class="fa fa-gift"></i></a>
                        <a class="btn btn-outline-danger btn-sm" id="f06b" href="#" role="button"><i class="fa fa-bell"></i></a>
                        <a class="btn btn-outline-danger btn-sm" id="f0e0" href="#" role="button"><i class="fa fa-envelope"></i></a>
                    </div>
-->

                    <div class="col-sm-2">

                        <a class="btn btn-outline-danger btn-md" id="f0f3" href="#" role="button"><i class="fa fa-gift"></i></a>
                        <a class="btn btn-outline-danger btn-md" id="f06b" href="#" role="button"><i class="fa fa-bell"></i></a>
                        <a class="btn btn-outline-danger btn-md" id="f0e0" href="#" role="button"><i class="fa fa-envelope"></i></a>
                    </div>
                    <form class="form-inline my-2 my-lg-0 ">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-danger  my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <!-------------------START NAVBAR--------------->
        <header>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <span>Bazaar</span><span>MobileStore</span>
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
            <a class="nav-link" href="signup.php">sign up</a>
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
        </header>
<!--    Start choose-us------------------>
<div class="container-fluid">
    <div class="choose-us">
            <div class="row">
                <div class="col-6">
                    <img src="img-admin/bazaar2.PNG" alt="" width="100%"/>
                </div>
                <div class="col-6">
                    <h2 class="h1">About Bazaar</h2>
                    <p><i>Is a mobile site that offers a service to display the products of phone stores and know the prices of products and know the specifications of the devices and in any store exists and whether this product available or not without leaving the house.</i></p>
                    <p><i> we are working to improve what we do to the happiness of our users and ourselves</i></p>
                </div>
            </div>
        </div>
    </div>

<!--    End choose-us--------->
<!--    Star Our team-section------------>
   <div class="team-section">
    <h1>Our Work Team</h1>
       <span class="border"></span>
       <div class="ps">
            <a href="#p1"><img src="img-admin/profile1.png" alt="" ></a>
            <a href="#p2"><img src="img-admin/profile2.png" alt=""></a>
            <a href="#p3"><img src="img-admin/profile3.png" alt=""></a>
       </div>
       <div class="section" id="p1">
            <span class="name">Yousef Alatrash</span>
            <span class="border"></span>
            <p>yousef.mohmmed222@gmail</p>
            <p>0911234567</p>
       </div>
       <div class="section" id="p2">
            <span class="name">Hamza Alazzabi</span>
            <span class="border"></span>
            <p>Hamza.alazzabi@gmail</p>
            <p>0911234567</p>
       </div>
       <div class="section" id="p3">
            <span class="name">Muhmmed Lagha</span>
            <span class="border"></span>
            <p>Muhmmed.Lagha@gmail</p>
            <p>0911234567</p>
       </div>
   </div>
    <!--    End Our team-section------------>
     <?//php include 'footer.php';?>
<!--
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
                <li>phone 0218 911234567</li>
                <li>Email: <a href="mailto:info@elitecorp.com?subject=contact">info@elitecorp.com</a></li>
            </ul>
        </div>
    </div>
    </div>
    <hr class="hr">
</div>

</footer>
-->
<!-- end footer -->

<!-- START COPYRIGHT -->

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-8 text-left text-uppercase">
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
</div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="jquery/jquery.cycle2.min.js"></script>
    <script type="text/javascript" src="js/slider-fun.js"></script>
    <script type="text/javascript" src="menu.left.js"></script>
        <script type="text/javascript">
        //* Load Font Awesome

add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {

    wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' );

}</script>
    </body>
