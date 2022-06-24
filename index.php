<?php 
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server,$username,$password,$database);
if( isset($_post['submitbutton']))
{
  // 1.fetch form data
  $firstname=$_post['firstname'];
  $lastname=$_post['lastname'];
  $email=$_post['email'];
  $phone=$_post['phonenumber'];
  $message=$_post['message'];
  // 2. submit form data
  $insertdata =mysqli_query($conn, "INSERT INTO contactus(firstname,lastname,email,phonenumber,message)VALUES('$firstname','$lastname','$email','$phonenumber','$message')");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap-grid-layout</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
<!-- Navigation bar starts here -->
<nav class="navbar navbar-expand-lg bg-light shadow fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Zalego Academy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-controls="navbarDisplayNavigations" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link active" href="about-us.php">About Us</a>
          <a class="btn btn-primary" href="enroll.php">Register now</a>
        </div>
      </div>
    </div>
  </nav>

<!--Navigation bar ends here-->




    <main class="p-5 mb bg-light  ">
        <h1>welcome,Macy</h1>
        <p>Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Aperiam repudiandae a 
             eius dolorem nemo ipsa esse repellat reiciendis! Doloribus.
        </p>
        <button class="btn btn-primary">learn more</button> 

    </main>
    <div class="container">
        <div class="row">

          <div class="col-lg-4">
            <h1>Header1</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, nostrum enim, labore, illo cumque nam suscipit officia sunt
                 iure vero quasi dicta sed nemo. Consequuntur excepturi quaerat placeat commodi officia, debitis nisi dicta? Excepturi 
                culpa odio ratione vitae porro aspernatur maxime impedit architecto, doloribus 
                necessitatibus iusto, quam sapiente natus aliquam.</p>
                <button class="btn btn-primary">learn more</button>
        </div>

        <div class="col-lg-4">
            <h1>Header2</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, nostrum enim, labore, illo cumque nam suscipit officia sunt
                 iure vero quasi dicta sed nemo. Consequuntur excepturi quaerat placeat commodi officia, debitis nisi dicta? Excepturi 
                culpa odio ratione vitae porro aspernatur maxime impedit architecto, doloribus 
                necessitatibus iusto, quam sapiente natus aliquam.</p>
                <button class="btn btn-primary">learn more</button>
        </div>
        <div class="col-lg-4">
            <h1>Header3</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, nostrum enim, labore, illo cumque nam suscipit officia sunt
                 iure vero quasi dicta sed nemo. Consequuntur excepturi quaerat placeat commodi officia, debitis nisi dicta? Excepturi 
                culpa odio ratione vitae porro aspernatur maxime impedit architecto, doloribus 
                necessitatibus iusto, quam sapiente natus aliquam.</p>
                <button class="btn btn-primary">learn more</button>
          </div>
        </div>
        
      
           
      <!-- Register now page starts Here -->
      <div class="row pt-5">
        <h1>Register now</h1>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque officia autem repellendus eos! Numquam, 
          voluptates dolores eius veniam sunt odit.
        </p>
<form action="index.php" method="POST">
  <div class="row">
    <div  class="mb-3 col-lg-6">
      <label for="First Name" class="form-label">First Name</label>
      <input type="text" name="firstname"class="form-control" placeholder="Enter Your First Name">
    </div>
    <div class="mb-3 col-lg-6">
      <label for="Last Name" class="form-label">Last Name</label>
      <input type="text"name="lastname"class="form-control" placeholder="Enter Your Last Name">
    
    </div>
  </div>
  <div class="row">
    <div  class="mb-3 col-lg-6">
      <label for="Email" class="form-label">Email</label>
      <input type="Email" name="email"class="form-control" placeholder="Enter Your Email Address">
    </div>
    <div class="mb-3 col-lg-6">
      <label for="Phone Number" class="form-label">Last Name</label>
      <input type="tel" name="phonenumber"class="form-control" placeholder="Enter Your Phone Number">
    
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <label for="Your Message" class="form-label">Your Message</label>
      <textarea cols="30" row="10" class="form-control" name="message"></textarea>
    </div>
  </div>
  <button type="submit" name="submitbutton"class="btn btn-primary mt-5">Send A Message</button>
</form>


      </div>

      <!-- End Register now Page -->

     </div>
<hr>
<footer>
    &copy; company 2022                  
</footer>
    </div>






    <!-- <script src="/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>