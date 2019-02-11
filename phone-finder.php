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
        div a img[class~=card-img-top] {
            height: 240px;
            max-width: 240px;
            
        }
        .filter, #brands, #cities, #storage{
            font-size: 20px;
        }
        .card p{
            font-size: 70%;
        }
        .checkbox-menu li label {
            display: block;
            padding: 3px 10px;
            clear: both;
            font-weight: normal;
            line-height: 1.42857143;
            color: #333;
            white-space: nowrap;
            margin:0;
            transition: background-color .4s ease;
        }
        .checkbox-menu li input {
            margin: 0px 5px;
            top: 2px;
            position: relative;
        }

        .checkbox-menu li.active label {
            background-color: #cbcbff;
            font-weight:bold;
        }

        .checkbox-menu li label:hover,
        .checkbox-menu li label:focus {
            background-color: #f5f5f5;
        }

        .checkbox-menu li.active label:hover,
        .checkbox-menu li.active label:focus {
            background-color: #b8b8ff;
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
    
                    
                    <?php include 'search-box.php'; ?>
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
           
<!--                                                  Write here                      -->
    <div class="container">
            <div class="col-sm-12">
<!--                                                 general device information           -->
                <div class="row">
                    <h4 class="text-danger col-12">General</h4>
<!--                                                 brands choice                        -->
                    <div id="brands-choice" class="col-sm-6">
                         <div class="dropdown w-100">
                             <input type="text" class="col- dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-menu checkbox-menu allow-focus col-12">
                                <a href="#" class="w-100">
                                    <span class="col-4">
                                    <img src="iphone/iPhone6s.png" class="float-left live-search-item" style="width: 70px;border-left-style: solid;border-color: red; border-width:5px;">
                                    </span>
                                    <p class="col-8">iphone 6s</p>
                                </a>
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
                        <a href="About.php"><li>About</li></a>
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
</div>
<!--     include scroll-top-------->
<?php include 'scroll-top.php'; ?>
        
</div>
<!--<div id="goup"><b class="far fa-arrow-circle-up"></b></div>-->
  
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

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
<!--                                         brand input filter toggle                         -->
    <script>
        $(document).ready(function(){
            $('#samsung').click(function(){
                var option = $('#samsung'), input = $('#samsung-input');
                if(input.prop('checked') == true){
                    input.prop('checked' , false);
                    option.children('span').attr('hidden',false);
                }
                else {
                    input.prop('checked' , true);
                    option.children('span').attr('hidden',true);
                }
           });
            $('#huawei').click(function(){
                var option = $('#huawei'), input = $('#huawei-input');
                if(input.prop('checked') == true){
                    input.prop('checked' , false);
                    option.children('span').attr('hidden',false);
                }
                else {
                    input.prop('checked' , true);
                    option.children('span').attr('hidden',true);
                }
           });
            $('#apple').click(function(){
                var option = $('#apple'), input = $('#apple-input');
                if(input.prop('checked') == true){
                    input.prop('checked' , false);
                    option.children('span').attr('hidden',false);
                }
                else {
                    input.prop('checked' , true);
                    option.children('span').attr('hidden',true);
                }
           });
            $('#xiaomi').click(function(){
                var option = $('#xiaomi'), input = $('#xiaomi-input');
                if(input.prop('checked') == true){
                    input.prop('checked' , false);
                    option.children('span').attr('hidden',false);
                }
                else {
                    input.prop('checked' , true);
                    option.children('span').attr('hidden',true);
                }
           });
            $('#sony').click(function(){
                var option = $('#sony'), input = $('#sony-input');
                if(input.prop('checked') == true){
                    input.prop('checked' , false);
                    option.children('span').attr('hidden',false);
                }
                else {
                    input.prop('checked' , true);
                    option.children('span').attr('hidden',true);
                }
           });
        });        
    </script> 
<!--                                         city input filter toggle                          -->
    <script>
        $(document).ready(function(){
            $('#tripoli').click(function(){
                var option = $('#tripoli'), input = $('#tripoli-input');
                if(input.prop('checked') == true){
                    input.prop('checked' , false);
                    option.children('span').attr('hidden',false);
                }
                else {
                    input.prop('checked' , true);
                    option.children('span').attr('hidden',true);
                }
           });
            $('#benghazi').click(function(){
                var option = $('#benghazi'), input = $('#benghazi-input');
                if(input.prop('checked') == true){
                    input.prop('checked' , false);
                    option.children('span').attr('hidden',false);
                }
                else {
                    input.prop('checked' , true);
                    option.children('span').attr('hidden',true);
                }
           });
            $('#musrata').click(function(){
                var option = $('#musrata'), input = $('#musrata-input');
                if(input.prop('checked') == true){
                    input.prop('checked' , false);
                    option.children('span').attr('hidden',false);
                }
                else {
                    input.prop('checked' , true);
                    option.children('span').attr('hidden',true);
                }
           });
            $('#gheryan').click(function(){
                var option = $('#gheryan'), input = $('#gheryan-input');
                if(input.prop('checked') == true){
                    input.prop('checked' , false);
                    option.children('span').attr('hidden',false);
                }
                else {
                    input.prop('checked' , true);
                    option.children('span').attr('hidden',true);
                }
           });
            $('#sabha').click(function(){
                var option = $('#sabha'), input = $('#sabha-input');
                if(input.prop('checked') == true){
                    input.prop('checked' , false);
                    option.children('span').attr('hidden',false);
                }
                else {
                    input.prop('checked' , true);
                    option.children('span').attr('hidden',true);
                }
           });
        });
    </script>  
<!--                                         storage input filter toggle                       -->
    <script>
        $(document).ready(function(){
            $('#8gb').click(function(){
                var option = $('#8gb'), input = $('#8gb-input');
                if(input.prop('checked') == true){
                    input.prop('checked' , false);
                    option.children('span').attr('hidden',false);
                }
                else {
                    input.prop('checked' , true);
                    option.children('span').attr('hidden',true);
                }
           });
            $('#16gb').click(function(){
                var option = $('#16gb'), input = $('#16gb-input');
                if(input.prop('checked') == true){
                    input.prop('checked' , false);
                    option.children('span').attr('hidden',false);
                }
                else {
                    input.prop('checked' , true);
                    option.children('span').attr('hidden',true);
                }
           });
            $('#32gb').click(function(){
                var option = $('#32gb'), input = $('#32gb-input');
                if(input.prop('checked') == true){
                    input.prop('checked' , false);
                    option.children('span').attr('hidden',false);
                }
                else {
                    input.prop('checked' , true);
                    option.children('span').attr('hidden',true);
                }
           });
            $('#64gb').click(function(){
                var option = $('#64gb'), input = $('#64gb-input');
                if(input.prop('checked') == true){
                    input.prop('checked' , false);
                    option.children('span').attr('hidden',false);
                }
                else {
                    input.prop('checked' , true);
                    option.children('span').attr('hidden',true);
                }
           });
            $('#128gb').click(function(){
                var option = $('#128gb'), input = $('#128gb-input');
                if(input.prop('checked') == true){
                    input.prop('checked' , false);
                    option.children('span').attr('hidden',false);
                }
                else {
                    input.prop('checked' , true);
                    option.children('span').attr('hidden',true);
                }
           });
        });
    </script>
<!--                                         filter catagories toggale                         -->
    <script>
        $(document).ready(function(){
            $('#brands').on('show.bs.collapse', function(){
                var filter = $('#brands-filter'); caret = $('.brands-caret');
                filter.addClass('bg-dark');
                filter.css('color' , 'white');
                caret.removeClass('fa-caret-down');
                caret.addClass('fa-caret-up');
            });
            $('#brands').on('hide.bs.collapse', function(){
                var filter = $('#brands-filter'); caret = $('.brands-caret');
                filter.removeClass('bg-dark');
                filter.css('color' , 'black');
                caret.removeClass('fa-caret-up');
                caret.addClass('fa-caret-down');
            });$('#cities').on('show.bs.collapse', function(){
                var filter = $('#cities-filter'); caret = $('.cities-caret');
                filter.addClass('bg-dark');
                filter.css('color' , 'white');
                caret.removeClass('fa-caret-down');
                caret.addClass('fa-caret-up');
            });
            $('#cities').on('hide.bs.collapse', function(){
                var filter = $('#cities-filter'); caret = $('.cities-caret');
                filter.removeClass('bg-dark');
                filter.css('color' , 'black');
                caret.removeClass('fa-caret-up');
                caret.addClass('fa-caret-down');
            });
            $('#storage').on('show.bs.collapse', function(){
                var filter = $('#storage-filter'); caret = $('.storage-caret');
                filter.addClass('bg-dark');
                filter.css('color' , 'white');
                caret.removeClass('fa-caret-down');
                caret.addClass('fa-caret-up');
            });
            $('#storage').on('hide.bs.collapse', function(){
                var filter = $('#storage-filter'); caret = $('.storage-caret');
                filter.removeClass('bg-dark');
                filter.css('color' , 'black');
                caret.removeClass('fa-caret-up');
                caret.addClass('fa-caret-down');
            });
        });
    </script>
<!--                                         geting results from database (ajax)               -->
    <script>
        function getSearchResults(str){
            if (str.length == 0) {
                $('#test').HTML("");
                return;
            }
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if(xhttp.readyState == 4 && xhttp.status == 200) {
                    $('#test').HTML("xhttp.responseText")
                }
            };
            xhttp.open("GET", "filter-engine.php", true);
            xhttp.send();
        }
    </script>
<!--                                         dropdown stay open on click                       -->
    <script>
        $(".checkbox-menu").on("change", "input[type='checkbox']", function() {
            $(this).closest("li").toggleClass("active", this.checked);
        });
        $(document).on('click', '.allow-focus', function (e) {
            e.stopPropagation();
        });
    </script>
    </body>
</html>
