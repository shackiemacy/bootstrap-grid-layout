<?php

$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server,$username,$password,$database);
$email=$_POST['email'];
if(isset($_post['submit']))

{
    // submit form data
    $insertdata =mysqli_query($conn,"INSERT INTO subscribers(email)VALUES('$email')");

    if($insertdata)
    {
        echo"submitted";

    }
    else{
        echo"failed to submit";
    } 


}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
    <title>assignment-003-bootstrap5</title>

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">ZALEGO ACADEMY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavigation" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavigation">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link active">Home</a>
                    <a href="#" class="nav-link active">About us</a>
                    <a href="#" class="nav-link">Register now</a>
                </div>
            </div>
        </div>
    </nav>


    <main class="p-5">
        <h1>About Us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur explicabo nobis maiores at. Tempora iste cumque blanditiis molestias veniam sed.</p>

    </main>
    <div class="container">
       <div class="content pt-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Our Program</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem eius molestiae quam velit id vel non rerum, placeat minus obcaecati, voluptate magni possimus expedita error at nostrum? Nam facilis reprehenderit suscipit minima quam adipisci illum?
                    </p>

                </div>
                <div class="col-lg-6">
                <img class="sky"  src="images/stephen-bellocillo-Ce1KymDEzyM-unsplash.jpg" alt="sky">
                </div>
            </div>
       </div>
        <div class="row">
            <h2 class="pt-5">The Programs</h2>
            <div class="col-lg-4 pt-5">
                <h3>Skill Discovery</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum id ex eius error tenetur facilis veniam commodi quasi praesentium. Sed, aliquam. Eveniet ad explicabo minima?</p>
                <button class="btn btn-primary" type="button">
                View Details  
                </button>
            </div>
            <div class="col-lg-4 pt-5">
                <h3>Upskilling Program</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum id ex eius error tenetur facilis veniam commodi quasi praesentium. Sed, aliquam. Eveniet ad explicabo minima?</p>
                <button class="btn btn-primary" type="button">
                View Details  
                </button>
            </div>
            <div class="col-lg-4 pt-5">
                <h3>Pathfinding Program</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum id ex eius error tenetur facilis veniam commodi quasi praesentium. Sed, aliquam. Eveniet ad explicabo minima?</p>
                <button class="btn btn-primary" type="button">
                View Details  
                </button>
            </div>


        </div>
        <p class="subscribe">subsribe to get more information, latest news about Zalego Academy</p>
        <form action="about-us.php"method="POST">

        
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" placeholder="Your Email Address"  name= "email"class="form-control mb-2">
                </div>
               <div class="col-lg-6 mt-2" >
                <button class="btn btn-primary mt-4" type="submit" name="submit">submit</button>

            </div>

            </div>
        </form>
        <hr>
        &COPY;Company 2022
    </div>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
    
</body>
</html>
