<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message=$_SESSION['message'];
    echo "<script type='text/javascript'>
    alert('$message');

    </script>";
}


?>



<!DOCTYPE html>
<html>
<head>
    <meta CHARSET="UTF-8">
    <title>Home Tutor Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <label class="logo">Home Tutor Management System</label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
</ul>
</nav>
    <div class="section1">
        <label class="img_text"> We Teach Students With Care </label>
        <img class="main_img" src="school_management.jpg">
    </div>  
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="welcome_img" src="school2.jpg">
                
            </div>
            <div class="col-md-8">
                <h1>Welcome to Home Tutoring System</h1>
                <p1>MEMS has been committed to global learning long before it became an indispensable feature of contemporary education. Established in 1997, we proudly stand as the 1st English medium school in Bangladesh to adopt both Pearson Edexcel and Cambridge curriculum (in O and A levels), drawing together students in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated. MEMS has been committed to global learning long before it became an indispensable feature of contemporary education. Established in 1997, we proudly stand as the 1st English medium school in Bangladesh to adopt both Pearson Edexcel and Cambridge curriculum (in O and A levels), drawing together students in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated. </p1>
            </div>
            
        </div>
        <center>
            <h1>Our Teachers </h1>
        </center>
        <div class="container">
            <div class="row">
                <div class="col-md-4"> 
                    <img class="teacher" src="teacher1.jpg">
                    <p> In a vibrant, academicaly challenging and encouraging environment where manifold viewpoints are prized and celebrated</p>

                </div>
                <div class="col-md-4"> 
                    <img class="teacher" src="teacher2.jpg">
                    <p> In a vibrant, academicaly challenging and encouraging environment where manifold viewpoints are prized and celebrated</p>
                </div>
                <div class="col-md-4"> 
                    <img class="teacher" src="teacher3.jpg">
                    <p> In a vibrant, academicaly challenging and encouraging environment where manifold viewpoints are prized and celebrated</p>
                </div>
            </div>
        </div>
        
    </div>


    <center>
            <h1>Our Courses </h1>
        </center>
        <div class="container">
            <div class="row">
                <div class="col-md-4"> 
                    <img class="teacher" src="web.jpg">
                    <h3>Web Development </h3>
                    

                </div>
                <div class="col-md-4"> 
                    <img class="teacher" src="graphic.jpg">
                    <h3> Graphics Design</h3>
                    
                </div>
                <div class="col-md-4"> 
                    <img class="teacher" src="marketing.png">
                    <h3>Marketing</h3>
                    
                </div>
            </div>
        </div>
        
    </div>

    <center>
        <h1 class="adm">Admission Form</h1>
    </center>
    <div align="center" class="admission_form">
        <form action="data_check.php" method="POST">
            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_deg" type="" name="name">
            </div>
            <div class="adm_int">
                <label class="label_text">E-mail</label>
                <input class="input_deg" type="" name="email">
            </div>
            <div class="adm_int">
                <label class="label_text">Phone</label>
                <input class="input_deg" type="" name="phone">
            </div>
            <div class="adm_int">
                <label class="label_text">Message</label>
                <textarea class="input_txt" name="message"></textarea>
            </div>
            <div class="adm_int">
            
                <input class="btn btn-primary" id="submit" type="Submit" value="apply" name="apply">
            </div>
        </form>
        
    </div>
    <footer>
        <h3 class="footer_text">This site is bulid by Musfiq Ahmed Marfy</h3>
    </footer>
</body>
</html>