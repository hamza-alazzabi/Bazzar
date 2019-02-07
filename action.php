<?php
    require 'config.php';
    if(isset($_POST['action']) && $_POST['action'] == 'register'){
       $name = check_input($_POST['name']);
       $uname = check_input($_POST['uname']);
       $email = check_input($_POST['email']);
        $pass = check_input($_POST['pass']);
        $cpass = check_input($_POST['cpass']);
        $pass = sha1($pass);
        $cpass = sha1($cpass);
        $created = date('Y-m-d');
        
        if($pass!=$cpass){
            echo 'password did not matched';
            exit();
        }
        else{
            $sql=$conn->prepare("SELECT username,email FROM users WHERE username=? OR email=?");
            $sql->bind_param("ss",$uname,$email);
            $sql->execute();
            $result=$sql->get_result();
            $row=$result->fetch_array(MYSQLI_ASSOC);
            
            if($row['username']==$uname){
                echo 'username not available try different!';
            }
            elseif($row['email']==$email){
                echo 'Email is alread registered try different!';
            }
            else{
                $stmt=$conn->prepare("INSERT INTO users (name,username,email,pass,created) VALUES (?,?,?,?,?)");
                $stmt->bind_param("sssss",$name,$uname,$email,$pass,$created);
                if($stmt->execute()){
                    echo 'Registered Successfully. Login Now!';
                }
                else{
                    echo 'Something went wrong. Please try again!';
                }
            }
        }
    }

    if(isset($_POST['action']) && $_POST['action'] == 'login'){
        session_start();
        
        $username=$_POST['username'];
        $password=sha1($_POST['password']);
        
        $stmt_l=$conn->prepare("SELECT * FROM users WHERE username=? AND pass=?");
        $stmt_l->bind_param("ss",$username,$password);
        $stmt_l->execute();
        $user=$stmt_l->fetch();
        
        if($user!=null){
            $_SESSION['username']=$username;
            echo 'Ok';
            
            if(!empty($_POST['rem'])){
                setcookie("username",$_POST['username'],time()+(10*365*24*60*60));
                setcookie("password",$_POST['password'],time()+(10*365*24*60*60));
            }
            else{
                if(isset($_COOKIE['username'])){
                    setcookie("username","");
                }
                if(isset($_COOKIE['password'])){
                    setcookie("password","");
                }
            }
        }
        else{
            echo 'Login Failed! Check your username and password';
        }
    }
    
    if(isset($_POST['action']) && $_POST['action'] == 'forgot'){
        
        $femail=$_POST['femail'];
        //connect to database
        $stmt_p=$conn->prepare("SELECT id FROM users WHERE email=?");
        $stmt_p->bind_param("s",$femail);
        $stmt_p->execute();
        $res=$stmt_p->get_result();
        
        // check if the insert same email or not
        if($res->num_rows>0){
            //roundome carhacter
            $token="qwertyuiopasdfghjklzxcvbnm1234567890";
            $token=str_shuffle($token);
            //token only from 0 to 10
            $token=substr($token, 0,10);
            
            // give you 5 minute to change your password
            
            $stmt_i=$conn->prepare("UPDATE users SET token=?, tokenExpire=DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE email=?");
            $stmt_i->bind_param("ss",$token,$femail);
            $stmt_i->execute();
            
//            error_reporting(E_ALL); ini_set('display_errors', '1');
            require 'phpmailer/PHPMailerAutoload.php';
            $mail= new PHPMailer;
            
            $mail->Host='smtp.gmail.com';
            $mail->Port = 587;
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            
            $mail->Username = "bazaar.store311@gmail.com";
            $mail->Password = "bazaarstore3110";
            
            $mail->addAddress($femail);
            $mail->setFrom('bazaar.store311@gmail.com','Bazaar');
//            $mail->FromName = 'Mailer';
            $mail->Subject = 'Reset Password';
            $mail->isHTML(true);
            $mail->addReplyTo('bazaar.store311@gmail.com');
            
            $mail->Body ="<h3>Click the below link to reset your password.</h3><br><a href='http://localhost/final-pro-copy/resetPassword.php?email=$femail&token=$token'>http://localhost/final-pro-copy/resetPassword.php?email=$femail&token=$token</a><br><h3>Regards<br>Bazaar<h3>";
            
            if(!$mail->send()){
                echo 'We have Send you the reset link in your email ID, please check your email.';
            }
            else{
                echo 'Something went wrong please try again later.';
            }
            
        }
    }
    
    function check_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
?>