<!DOCTYPE html>
<html lang="en">

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
     <link href="css/fontawesome.min.css" rel="stylesheet">
<!--     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->

    <link href="font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <!---- Link CSS for left-tool ------->
    <link href="css/left-tool.css" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/SB.css" rel="stylesheet">

    <!---- Link CSS for file------->
    <link href="css/file.css" rel="stylesheet">

    <!---- Link  for jquery------->
    <script src="jquery/jquery-3.3.1.js"></script>

    <!---- Link CSS for slideshow------->
    <link rel="stylesheet" type="text/css" href="css/style-slide.css">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <!---- Link CSS for scroll-top------->
    <link href="css/scroll-top.css" rel="stylesheet">

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
       <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <span href="#">
                        BAZAAR MENU
                    </span>
                </li>
                <hr class="menu-hr">
                <li>
                    <span id="menu-span">Phones</span>
                </li>
                <hr class="menu-hr">
                <li>
                    <a href="iphone.php">Apple</a>
                </li>
                <li>
                    <a href="#">Samsung</a>
                </li>
                <li>
                    <a href="Huawei.php">Huawei</a>
                </li>
                <li>
                    <a href="xiaomi.php">Xiaomi</a>
                </li>
                <hr class="menu-hr">
                <li>
                    <span id="menu-span">Accessories</span>
                </li>
                <hr class="menu-hr">
                <li>
                    <a href="accessories.php">aer Phones</a>
                </li>
                <li>
                    <a href="accessories.php">charging</a>
                </li>
                <li>
                    <a href="accessories.php">Covers</a>
                </li>
                <li>
                    <a href="accessories.php">Smart Watch</a>
                </li>
                <li>
                    <a href="accessories.php">Screen Protact</a>
                </li>
                <li>
                    <a href="#">Power Bank</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
<!--
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Simple Sidebar</h1>
                 <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
            </div>
        </div>
-->
        <!-- /#page-content-wrapper -->

<!--    </div>-->
    <!-- /#wrapper -->
        <div class="upper-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm">

                       <a href="#menu-toggle" class="btn btn-lg  fa fa-bars fixed" id="menu-toggle"></a>

<!--                        <a href="#"><span><i class="fa fa-phone"></i> 0218-914057595</span></a>-->

                    </div>
<!--
                    <div class="col-sm">
                        <span><i class="fa fa-envelope-o"></i>bazaar.store311@gmail</span>
                    </div>
-->

<!--
                    <div class="col-sm-2">

                        <a class="btn btn-outline-danger btn-sm" id="f0f3" href="#" role="button"><i class="fa fa-gift"></i></a>
                        <a class="btn btn-outline-danger btn-sm" id="f06b" href="#" role="button"><i class="fa fa-bell"></i></a>
                        <a class="btn btn-outline-danger btn-sm" id="f0e0" href="#" role="button"><i class="fa fa-envelope"></i></a>
                    </div>
-->


                    <form class="form-inline my-2 my-lg-0 " method="post" action="search-page.php">

                      <input class="form-control mr-sm-2" name="search-input" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-danger  my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <!-------------------START NAVBAR--------------->
        <header>
<nav class="navbar navbar-expand-lg navbar-light ">
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
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="About.php">About <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>

            <li class="nav-item">
            <a class="nav-link" href="index.php">sign in</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="signup.php">sign up</a>
          </li>



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


				<script src="js/bootstrap.min.js"></script>
		    <script src="js/popper.min.js"></script>
		    <script src="js/jquery-3.3.1.min.js"></script>

		    <script type="text/javascript" src="jquery/jquery.cycle2.min.js"></script>
		    <script type="text/javascript" src="js/slider-fun.js"></script>
		    <script type="text/javascript" src="menu.left.js"></script>
		    <script type="text/javascript" src="js/scroll-top.js"></script>
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
