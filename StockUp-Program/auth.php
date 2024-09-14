<?php
$login_message = isset($_GET['login_message']) ? htmlspecialchars($_GET['login_message']) : '';
$signup_message = isset($_GET['signup_message']) ? htmlspecialchars($_GET['signup_message']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN SIGN UP</title>
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- STYLE -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

   <div class="form-container">
    <div class="col col-1"> 
        <div class="image-layer">
            <img src="assets/img/logo cloud.png" class="form-image-main"">
        
            
        </div>
        <p class="featured-words">Copyright<span>@STOCK UP</span> By Code Benders, <span>"Just give me my package"</span>
        </p>
    </div>
    

         <div class="col col-2">
            <div class="btn-box">
                <button class="btn btn-1" id="login">Login</button>
                <button class="btn btn-2" id="register">Signup</button>
            </div>
            <!-- Log In form na  -->

            <div class="login-form">
                <div class="form-title">
                    <span>Login</span>
                </div>
                
                <?php if ($login_message) echo "<div class='message error'>$login_message</div>"; ?>
                <div class="form-inputs">
                <form method = "POST" action = "authproc.php">
                    <div class="input-box">
                    <input type="text" class="input-field" id="login_username" placeholder = "Username/ID" name="login_username" required>
                        <i class="bx bx-user icon"></i>
                    </div>
                    <div class="input-box">
                    <input type="password" class = "input-field"id="login_password" placeholder = "Password" name="login_password" required>
                        <i class="bx bx-lock-alt icon"></i>
                    </div>
                    <div class="forgot-pass">
                        <a href="#"> forgot password</a>
                    </div>
                    <div class="input-box">
                        <button class="input-submit" type=" submit" name ="login">
                            <span>Login</span>
                            <i class="bx bx-right-arrow-alt"></i>
                        </button>
                    </div>
                    </form>
                    
                      <div class="Sign_link">
                        <p>Do not have an account yet? <a href="#">Sign Up Here</a></p>
                    </div>  
                </div>
            </div>

                        

              <!-- SIGN UP NA  -->
                <div class="register-form">
                <div class="form-title">
                    <span>Create an Account</span>
                </div>

                <?php if ($signup_message) echo "<div class='message error'>$signup_message</div>"; ?>
                <div class="form-inputs">
                    <form method = "POST" action = "authproc.php">
                    <div class="input-box">
                        <input type="text" class="input-field" id="full_name" placeholder = "Full name" name="full_name" required>
                        <i class="bx bx-user icon"></i>
                    </div>

                    <div class="input-box">
                        <input type="text" id="username" class = "input-field" placeholder="Username/ID" name="username" required>
                        <i class='bx bx-id-card icon'></i>
                    </div>

                    <div class="input-box">
                    <input type="email" id="email" class = "input-field" placeholder = "Email" name="email" required>
                        <i class='bx bx-id-card icon'></i>
                    </div>

                    <div class="input-box">
                    <input type="password" id="password" class="input-field" placeholder = "Password" name = "password" required>
                        <i class="bx bx-lock-alt icon"></i>
                    </div>
                   
                    <div class="input-box">
                        <button class="input-submit" type="submit" name="signup">
                            <span> Register</span>
                            <i class="bx bx-right-arrow-alt"></i>
                        </button>
                    </div>
                    </form>
                </div>
            </div>

             <?php $signup_message = isset($_GET['signup_message']) ? htmlspecialchars($_GET['signup_message']) : ''?>
                </div>
            </div>
         </div>
    </div>
   
    <script src="assets/js/main.js"></script>
</body>
</html>