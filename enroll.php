<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <title>Register now</title>
</head>
<body>
      <!--Navigation bar starts here -->
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
          <a class="btn btn-primary" href="enroll.php active">Register now</a>
        </div>
      </div>
    </div>
  </nav>

<!-- Navigation bar ends here -->


<main class="p-5">
    <h1>JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
    <P>20th July 2022</P>
    <p>Zalego Academy,
        Devan plaza
    </p>
</main>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p>
             Looking forward to kickstart your career in technology?
             Whether  you are a local ,new in town or just cruising 
            through we've got you.
            </p>
        </div>
    </div>
  
    <p class="sign"><b>Sign up today?</b></p>
    <form action="enroll.php"method="POST">

    <div class="row">
    <div  class="mb-3 col-lg-6">
      <label for="Full Name" class="form-label">Full Name</label>
      <input type="text" name="Full Name"class="form-control" placeholder="Enter Your Full Name">
    </div>
    <div class="mb-3 col-lg-6">
      <label for="Phone Number" class="form-label">Phone Number</label>
      <input type="text"name="Phone Number"class="form-control" placeholder="+2547......">
    
    </div>
  </div>
  <div class="row">
    <div  class="mb-3 col-lg-6">
      <label for="Email Address" class="form-label">Email</label>
      <input type="Email" name="Email Address"class="form-control" placeholder="Please enter your email">
    </div>
    <div class="mb-3 col-lg-6">
      <label for="Gender" class="form-label">Gender</label>
      <input class type="tel" name="Gender"class="form-control" placeholder="--select your gender--">
    
    </div>
  </div>
        </form>
        <p>
          In order to complete your registration to the  bootcamp ,
          you are required to select one course you will be undertaking .
          Pleaqse NOTE that this will be your learning track during the 2-weeks
           immersion.
        </p>
        

    






    <hr>
        &COPY;Company 2022
</div>
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>