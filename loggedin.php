<?php
    session_start();
    include("php/config.php");
    if(!isset($_SESSION['valid'])){
        header("Location: login.php");
    }

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
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="container">
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
                        <a class ="btn btn-light" href="logout.php">
                            <i class="fas fa-user">Log Out</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($conn,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
    ?>
    <h1 class="text-xl">
        <?php 
            echo "Welcome Back! $res_Uname";
        ?>  
    </h1>
    <!--Hero-->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-heading text-xxl">
                    A powerful solution to grow your startup. Fast!
                </h1>
                <p class="hero-text">
                    Organise, collaborate, and track progress seamlessly with our one-stop-shop startup growth tool.
                </p>
                <div class="hero-buttons">
                    <a href="#" class="btn"><i class="fas fa-laptop"></i>Become a seller</a>
                </div>
            </div>
        </div>
    </section>
    <!--Video Section-->
    <section class="video bg-black">
        <div class="container-sm">
            <h2 class="video-heading text-xl text-center">
                See how it works and get started in less than 2 minutes
            </h2>
            <div class="video-content">
                <a href="#">
                    <img src="images/video-preview.png" alt="video" class="video-preview">
                </a>

                <a href="#" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </section>
    <!--Testimonials-->
    <div class="testimonials bg-dark">
        <div class="container">
            <h3 class="testimonials-headings text-xl">
                Don't just take our word for it, see the success  stories from businesses just like yours.
            </h3>
            <div class="testimonials-grid">
                <div class="card">
                    <p>
                        “Our business has seen a significant increase in productivity since we started using the Growth app.  
                    </p>

                    <p>
                        Katherine Smith
                    </p>

                    <p>
                        Capodopera
                    </p>
                </div>
                <div class="card">
                    <p>
                        “As a small business owner, it's important to have a tool that can help me keep track of everything. The Growth app has been a lifesaver for me, allowing me to manage my contacts, schedule appointments, and track progress all in one place.”
                    </p>

                    <p>
                        Jonathan Lee
                    </p>

                    <p>
                        Red Bolt
                    </p>

                </div>
                <div class="card">
                    <p>
                        “The dashboards and reporting feature has provided valuable insights into our performance and helped us make data-driven decisions. It's a game changer for us.”
                    </p>

                    <p>
                        David Willson
                    </p>

                    <p>
                        Slide
                    </p>
                </div> 
            </div>
        </div>
    </div>
    <!--Pricing-->
    <section class="pricing">
        <div class="container-sm">
            <h3 class="pricing-heading text-xl text-center">
                Pricing
            </h3>
            <p class="pricing-subheading text-md text-center">
                Start free and scale while you grow.No hidden fees. Unlimited users for free.
            </p>
            <div class="pricing-grid">
                <!--pricing card 1-->
                <div class="card bg-light">
                    <div class="pricing-card-header">
                        <h4 class="pricing-heading text-xl">
                            Simple
                        </h4>
                        <p class="pricing-card-subheading">
                            Keep track of your contacts, gain valuable insights, analyse live data and performance metrics.
                        </p>
                        <p class="pricing-card-price">
                            <span class="text-xl">
                                free
                            </span>
                            #No credit card needed.
                        </p>
                    </div>
                    <div class="pricing-card-body">
                        <ul>
                            <li>
                                <i class="fas fa-check">Real-times Monitoring</i>
                            </li>
                            <li>
                                <i class="fas fa-check">Track Key Performance Indicators</i>
                            </li>
                            <li>
                                <i class="fas fa-check">Schedule Appointments</i>
                            </li>
                            <li>
                                <i class="fas fa-check">Organize, delegate and keep track of tasks</i>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-block">Get started</a>
                    </div>
                </div>
                 <!--pricing card 2-->
                 <div class="card bg-black">
                    <div class="pricing-card-header">
                        <h4 class="pricing-heading text-xl">
                            Premium
                        </h4>
                        <p class="pricing-card-subheading">
                            Keep track of your contacts, gain valuable insights, analyse live data and performance metrics.
                        </p>
                        <p class="pricing-card-price">
                            <span class="text-xl">
                                $49
                            </span>
                            /month
                        </p>
                    </div>
                    <div class="pricing-card-body">
                        <p>
                            Everything from the free plan plus:
                        </p>
                        <ul>
                            <li>
                                <i class="fas fa-check">Data-driven decisions</i>
                            </li>
                            <li>
                                <i class="fas fa-check">Data visualisation</i>
                            </li>
                            <li>
                                <i class="fas fa-check">Schedule Appointments</i>
                            </li>
                            <li>
                                <i class="fas fa-check">Store and organise contact information</i>
                            </li>
                            <li>
                                <i class="fas fa-check">Teal-time communication tools for messaging and video conferencing</i>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-block">Get started</a>
                    </div>
                </div>
            </div>
            <p class="pricing-footer text-center">All prices are in USD and charged per month with applicable taxes added at checkout.</p>
        </div>
    </section>

    <!--FAQ-->
    <section class="faq bg-light">
        <div class="container-sm">
            <h3 class="text-xl text-center">
                Frequently Asked Questions
            </h3>
            <ul class="faq-menu">
                <li class="active">All</li>
                <li>Getting Started</li>
                <li>Pricing</li>
            </ul>
            <div class="faq-content">
                <div class="faq-group">
                    <div class="faq-group-header">
                        <h4 class="text-md">
                            How does the contact management feature help me keep track of clients and partners?
                        </h4>
                        <i class="fas fa-minus"></i>
                    </div>
                    <div class="faq-group-body open">
                        <p>
                            Keep track of your contacts, gain valuable insights, analyse live data and performance metrics.
                        </p>
                    </div>
                </div>

                <div class="faq-group">
                    <div class="faq-group-header">
                        <h4 class="text-md">
                            Can I customize the dashboards and reporting feature to display the metrics that are most important to my business?
                        </h4>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-group-body">
                        <p>
                            Keep track of your contacts, gain valuable insights, analyse live data and performance metrics.
                        </p>
                    </div>
                </div>

                <div class="faq-group">
                    <div class="faq-group-header">
                        <h4 class="text-md">
                            How does the task management feature help me delegate tasks to my team and track progress?
                        </h4>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-group-body">
                        <p>
                            Keep track of your contacts, gain valuable insights, analyse live data and performance metrics.
                        </p>
                    </div>
                </div>

                <div class="faq-group">
                    <div class="faq-group-header">
                        <h4 class="text-md">
                            Can I collaborate with my team in real-time using all tools?
                        </h4>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-group-body">
                        <p>
                            Keep track of your contacts, gain valuable insights, analyse live data and performance metrics.
                        </p>
                    </div>
                </div>

                <div class="faq-group">
                    <div class="faq-group-header">
                        <h4 class="text-md">
                            Is the app available on all devices?
                        </h4>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-group-body">
                        <p>
                            Keep track of your contacts, gain valuable insights, analyse live data and performance metrics.
                        </p>
                    </div>
                </div>

                <div class="faq-group">
                    <div class="faq-group-header">
                        <h4 class="text-md">
                            How does the app help me stay compliant when working with freelancers and contractors?
                        </h4>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="faq-group-body">
                        <p>
                            Keep track of your contacts, gain valuable insights, analyse live data and performance metrics.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--FOOTER-->
    <footer class="footer bg-black">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <a href="index.html">
                        <img src="images/logo-white.png" alt="logo">
                    </a>
                    <div class="card">
                        <h4>Subscribe to Newsletter</h4>
                        <p class="text-sm">
                            Subscribe now to receive  tips on how to take your business to the next level.
                        </p>
                        <form>
                            <input type="email" id="email" placeholder="Enter Your Email">
                            <button type="submit" class="btn btn-primary btn-block">Subscribe</button>
                        </form>
                    </div>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-twitter"></i>
                </div>
                <div>
                    <h4>Company</h4>
                    <ul>
                        <li>
                            <a href="#">About us</a>
                        </li>

                        <li>
                            <a href="#">Our Process</a>
                        </li>
                        
                        <li>
                            <a href="#">Join Our Team</a>
                        </li>
                        
                    </ul>
                </div>

                <div>
                    <h4>Resources</h4>
                    <ul>
                        <li>
                            <a href="#">News</a>
                        </li>

                        <li>
                            <a href="#">Research</a>
                        </li>
                        
                        <li>
                            <a href="#">Recent Projects</a>
                        </li>
                        
                    </ul>
                </div>

                <div>
                    <h4>Contact</h4>
                    <ul>
                        <li>
                            <a href="#">hello@growthapp.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="js/main.js"></script>
</body>
</html>