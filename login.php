<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Growth App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login-styles.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class = "container">
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.png" alt="logo">
                </a>
            </div>

            <div class="main-menu">
                <ul>
                    <li>
                        <a href="index.php">HOME</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a class ="btn btn-light" href="login.php">
                            <i class="fas fa-user">Log in</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Hero-->
    <section class="hero">
        <div class="container-login">
            <div class="box form-box">
                <?php
                    include("php/config.php");
                    if(isset($_POST['submit'])){
                      $email = mysqli_real_escape_string($conn,$_POST['email']);
                      $password = mysqli_real_escape_string($conn,$_POST['password']);
      
                      $result = mysqli_query($conn,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                      $row = mysqli_fetch_assoc($result);
      
                      if(is_array($row) && !empty($row)){
                          $_SESSION['valid'] = $row['Email'];
                          $_SESSION['username'] = $row['Username'];
                          $_SESSION['age'] = $row['Age'];
                          $_SESSION['id'] = $row['Id'];
                      }else{
                          echo "<div class='Nmessage'>
                            <p>Wrong Username or Password</p>
                             </div> <br>";
                         echo "<a href='login.php'><button class='btn'>Go Back</button>";
               
                      }
                      if(isset($_SESSION['valid'])){
                          header("Location: loggedin.php");
                      }
                    }else{
                
                ?>

                <header class="heading text-center text-med">Login</header>
                <form action="" method="post">
                    <div class="field input">
                        Email<input type="text" name="email" id="email" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="field btn-log log-btn">
                    <input type="submit" name="submit" value="Login" required>
                    </div>
                    <div class="links">
                        Don't have account?  <a href="register.php">Sign Up Now</a>
                    </div>
                </form>
            </div>
            <?php }; ?>
        </div>
    </section>
    
</body>
</html>