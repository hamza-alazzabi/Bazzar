<?php
session_start();
if(isset($_SESSION['username'])){
    header("location:profile.php");
}
?>
<!doctype html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta name="author" content="shhil kumar">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Bazaar store</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <style type="text/css">
        #alert,
        #login-box,
        #forgot-box,#loader {
            display:none;
        }
    </style>
</head>
    
    
<body class="bg-dark">
    <div class="container mt-4">
         <div class="row">
             <div class="col-lg-4 offset-lg-4" id="alert">
                  <div class="alert alert-success">
                      <strong id="result"></strong>
                  </div>
             </div>
         </div>
        <div class="text-center">
            <img src="preloader-img/liquid-preloader.gif" width="50px" height="50px" class="m-2" id="loader">
        </div>
<!--        login Form-->
         <div class="row">
              <div class="col-lg-4 offset-lg-4 bg-light rounded" id="login-box">
                  <h2 class="text-center mt-2">login</h2>
                  <form action="" method="post" role="form" class="p-2" id="login-frm">
                       <div class="form-group">
                           <input type="text" name="username" class="form-control" placeholder="user name" required minlength="3" value="<?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username']; } ?>">
                       </div>
                      <div class="form-group">
                           <input type="password" name="password" class="form-control" placeholder="password" required minlength="8" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password']; } ?>">
                       </div>
                      <div class="form-group">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" name="rem" class="custom-control-input" id="customcheck" <?php if(isset($_COOKIE['username'])) { ?> checked <?php } ?>>
                              <label for="customcheck" class="custom-control-label">Remmber me</label>
                              <a href="#" id="forgot-btn" class="float-right">Forgot Password?</a>
                          </div>
                      </div>
                      <div class="form-group">
                          <input type="submit" name="login" id="login" value="login" class="btn btn-primary btn-block">
                      </div>
                      <div class="form-group">
                          <p class="text-center">New User? <a href="#" id="register-btn"> Register Here</a></p>
                      </div>
                  </form>
              </div>
         </div>
<!--        Register Form-->
        <div class="row">
              <div class="col-lg-4 offset-lg-4 bg-light rounded" id="register-box">
                  <h2 class="text-center mt-2">Register</h2>  <!--id="login-frm"-->
                  <form action="" method="post" role="form" class="p-2" id="register-frm">
                       <div class="form-group">
                           <input type="text" name="name" class="form-control" placeholder="Full Name" required minlength="6">
                       </div>
                      <div class="form-group">
                           <input type="text" name="uname" class="form-control" placeholder="username" required minlength="3">
                       </div>
                      <div class="form-group">
                           <input type="email" name="email" class="form-control" placeholder="E-Mail" required>
                       </div>
                      <div class="form-group">
                           <input type="password" name="pass" id="pass" class="form-control" placeholder="password" required minlength="8">
                       </div>
                      <div class="form-group">
                           <input type="password" name="cpass" id="cpass" class="form-control" placeholder="Confirm password" required>
                       </div>
                      <div class="form-group">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" name="rem" class="custom-control-input" id="customcheck2">
                              <label for="customcheck2" class="custom-control-label">I gree to the <a href="#"> terms & conditions.</a></label>
                          </div>
                      </div>
                      <div class="form-group">
                          <input type="submit" name="register" id="register" value="Register" class="btn btn-primary btn-block">
                      </div>
                      <div class="form-group">
                          <p class="text-center">Alredy Register?<a href="#" id="login-btn"> login Here</a></p>
                      </div>
                  </form>
              </div>
         </div>

<!--        forgot-password-->
        <div class="row">
              <div class="col-lg-4 offset-lg-4 bg-light rounded" id="forgot-box">
                  <h2 class="text-center mt-2">Reset Password</h2>
                  <form action="" method="post" role="form" class="p-2" id="forgot-frm">
                       <div class="form-group">
                        <small class="text-muted">
                            To rest your password, enter the email address and we will send reset password instructions on your email.
                        </small>
                      </div>
                       <div class="form-group">
                           <input type="email" name="femail" class="form-control" placeholder="E-Mail" required>
                       </div>
                      <div class="form-group">
                          <input type="submit" name="forgot" id="forgot" value="Reset" class="btn btn-primary btn-block">
                      </div>
                      <div class="form-group text-center">
                          <a href="#" id="back-btn"> Back</a>
                      </div>
                  </form>
              </div>
         </div>
    </div> 
    <script
   src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script href="js/bootstrap.min.js"></script>
    
    <script href="jquery/jquery-3.3.1.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    
    <script href="jquery/jquery-3.3.1.js"></script>
    <script href="js/bootstrap.min.js"></script>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
        <script src="js/popper.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#register-btn").click(function(){
                $("#register-box").show();
                $("#login-box").hide();
            });
            
            $("#login-btn").click(function() {
                $('#register-box').hide();
                $('#login-box').show();
            });
            
            $("#forgot-btn").click(function() {
                $("#login-box").hide();
                $("#forgot-box").show();
            });
            
            $("#back-btn").click(function() {
                $("#forgot-box").hide();
                $("#login-box").show();
            });
            
            $("#login-frm").validate();
            $("#register-frm").validate({
                rules: {
                    cpass: {
                        equalTo: "#pass",
                    }
                    }
                });
                $("#forgot-frm").validate();
                
//                submit form without refresh ----------------------------
                $("#register").click(function(e){
                    if(document.getElementById('register-frm').checkValidity()){
                        e.preventDefault();
                        $("#loader").show();
                        $.ajax({
                            url:'action.php',
                            method:'post',
                            data:$("#register-frm").serialize()+'&action=register',
                            success: function(response){
                                $("#alert").show();
                                $("#result").html(response);
                                $("#loader").hide();
                            }
                        });
                    }
                    return true;
                });
            
                $("#login").click(function(e){
                    if(document.getElementById('login-frm').checkValidity()){
                        e.preventDefault();
                        $("#loader").show();
                        $.ajax({
                            url:'action.php',
                            method:'post',
                            data:$('#login-frm').serialize()+'&action=login',
                            success:function(response){
                                if(response==="Ok"){
                                    window.location='profile.php';
                                }
                                else{
                                    $("#alert").show();
                                    $("#result").html(response);
                                    $("#loader").hide();
                                }
                            }
                        });
                    }
                    return true;
                });
            
                $("#forgot").click(function(e){
                    if(document.getElementById('forgot-frm').checkValidity()){
                        e.preventDefault();
                        $("#loader").show();
                        $.ajax({
                            url:'action.php',
                            method:'post',
                            data:$('#forgot-frm').serialize()+'&action=forgot',
                            success:function(response){
                                $("#alert").show();
                                $("#result").html(response);
                                $("#loader").hide();
                            }
                        });
                    }
                    return true;
                });
            
            });
    </script>
</body>
</html>