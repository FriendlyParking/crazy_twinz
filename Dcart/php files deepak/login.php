<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location:welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scal=1.0">
    <title> All products-Dcart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;1,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body> 
   
    <div class="container">
        <div class="navbar">
            <div class="logo">
            <img src="https://i.ibb.co/S7G8tcF/LOPO-2-removebg-preview.png"width="130px">
            </div>
            <nav>
                <ul id="menuitems">
                   <li><a href="">HOME</a></li>
                   <li><a href=""> OUR PRODUCTS</a></li>
                   <li><a href="">ABOUT</a></li>
                   <li><a href="">CONTACT</a></li>
            </u1>
            </nav>
            <img src="https://cdn-icons-png.flaticon.com/512/891/891462.png" width="30px" height="30px">
            <img src="https://cdn-icons-png.flaticon.com/512/1828/1828859.png" class="menu-icon"
            onclick="menutoggle()">
        </div>
       
        </div>
    </div>

   <!--------------account-page----------------->

<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="https://i.ibb.co/rdf9VxN/my-style-removebg-preview.png"width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">


                    <form action="" method="POST" class="login_email">
                        <p class="login-text" style="font-size: 2rem; font-weight: 400;">Login</p>
                      
                        
                        <div class="input-group">
                            <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                        </div>
                        <div class="input-group">
                            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                        </div>
                        <div class="input-group">
                            <button name="submit" class="btn">Login</button>
                        </div>
                        <p class="login-register-text">Have a not account? <a href="register.php">Register Here</a>.</p>
                        <p class="login-text" style="font-size: 2rem; font-weight: 100;">Note</p>
                        
                        <p> *pls enter correct<br> email and password</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>





    
    
    
    <!-------footer------->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Andriod and ios mobile phone.</p>
                    <img src="https://i.ibb.co/rFXhHCB/playvb-2-removebg-preview.png"width="200">
                </div>
                    <div class="footer-col-2">
                        <img src="https://i.ibb.co/S7G8tcF/LOPO-2-removebg-preview.png"width="100">
                       
                </div>
                <div class="footer-col-3">
                    <h3>use full link</h3>
                    <ul>
                        <li>coupons</li>
                        <li>Blog post</li>
                        <li>Return Policy</li>
                        <li> Jion us </li>
                    </ul>
                </div>
                <div class="footer-col-3">
                    <h3>follw us</h3>
                    <ul>
                        <li>facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li> youtube </li>
                    </ul>
                </div>
    
           </div>
        </div>
    </div>
    
    <!------js for toggle menu------->
    <script>
        var menuitems =document.getElementById("menuitem");
        menuitems.style.maxHeight = "0px"
        function menutoggle(){
            if(menuitems.style.maxHeight == "0px")
            {
                menuitems.style.maxHeight = "200px";
            }
            else
            {
                menuitems.style.maxHeight= "0px"
            }
        }
    </script>
    
    
    <!----------js for toggle Form------------>
    
    <script>
       var LoginForm = document.getElementById("LoginForm");
       var RegForm = document.getElementById("RegForm");
       var Indicator = document.getElementById("Indicator");
           
            function register(){
                RegForm.style.transform = "translatex(0px)";
                LoginForm.style.transform = "translatex(0px)";
                Indicator.style.transform = "translatex(100px)";
            }
            function login(){
                RegForm.style.transform = "translatex(400px)";
                LoginForm.style.transform = "translatex(400px)";
                Indicator.style.transform = "translatex(0px)";
            }
    
    
    
    
    
    </script>
    
    
    
    </body>