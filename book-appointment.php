<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hospital Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    
  <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg bg-white navbar-white pt-4 fixed-top shadow">
  <div class="container">
    <a class="navbar-brand" href="#">Hospital Website</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mx-sm-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Contact Us</a>
        </li>
       </ul>
       <a href="book-appointment.php" class="btn btn-lg btn-primary">Appointment</a>
    </div>
  </div>
</nav>
<!---end navbar-->

<!-- Hero Section-->
<div id="hero" class="min-vh-100 d-flex align-items-center text-center">
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-12 pt-5 my-5">
    <h1>We Have Best Medical Option Plans for You</h1>
    <h4 class="pt-2 mb-3">Lorem ipsum dolor sit amet consectetuer<br> adipiscing elit Aenean commodo ligula </h4>
    <a href="/" class="btn btn-primary my-2">BOOK APPOINTMENT</a>
   </div>
 </div>
 </div>
</div>


<div class="container">
<div class="row d-flex justify-content-center mt-5">
  <div class="col-md-8 align-items-center pt-4">
   <div class="card shadow min-vh-50">
    
    <div class="card-body text-center">
     <form action="#" method="POST">
      <h4 class="pt-2 mb-2" style="font-family: bookman; color: blue;" >Book Appointment</h4>
      <div class="input-group pt-3">
        <label>FIRST NAME</label>
        <input type="text" name="firstname" class="form-control ms-2" placeholder="Enter Your First Name">
      </div>
        <div class="input-group pt-3">
        <label>LAST NAME</label>
        <input type="text" name="lastname" class="form-control ms-2" placeholder="Enter Your Last Name">
      </div>
        <div class="input-group pt-3">
        <label>EMAIL ADDRESS</label>
        <input type="text" name="firstname" class="form-control ms-2" placeholder="Enter Your Email Address">
      </div>
        <div class="input-group pt-3">
        <label>DOCTORS</label>
        <select name="" class="form-select ms-1">
        <option value="">Select Doctor</option>
        <option value="Doe Garry">Doe Garry</option>
         <option value="Garry Leo">Garry Leo</option>
         <option value="Sam Smith">Sam Smith</option>
         <option value="Harry John">Harry John</option>
         <option value="Jack Parker">Jack Parker</option>
        </select>
      </div>
        <div class="input-group pt-4">
        <label>MESSAGE</label>
        <textarea rows="5" class="form-control ms-1"></textarea>
      </div>

     <div class="row d-flex justify-content-center ">
     <div class="col-md-12 align-items-center">
     <input type="submit"  class="btn btn-lg btn-success my-4 col-sm-12 col-md-8" value="Book Appointment">
     </div>
     </div>


     </form>

    </div>
   </div>
  </div>
</div>
</div>


<!--FOOTER-->
<footer class="bg-dark text-white" style="margin-top: 100px;">
   <div class="container footer-top p-4">
    <div class="row p-3">
      <div class="col-md-5">
        <h3 class="pb-3 mt-3">GET IN TOUCH</h3>
        <p class="text-white-50">P: (+234 707 245 6378)</p>
         <p class="text-white-50">lukmanafolabi2018@gmail.com</p>
         <p class="text-white-50">N0 32 Abuja road Abujia 45665</p>
      </div>
    <div class="col-md-3">
       <h5 class="mb-3 mb-lg-4 mt-3">Quick Links</h5>
         <p><a href="#" class="link text-white-50">About Us</a></p>
         <p><a href="#" class="link text-white-50">Services</a></p>
         <p><a href="#" class="link text-white-50">Portfolio</a></p>
         <p><a href="#" class="link text-white-50">Contact Us</a></p>     
      </div>      
      <div class="col-md-3">
       <h5 class="mb-3 mb-lg-4 mt-3">Our Services</h5>
         <p><a href="#" class="link text-white-50">Work Injuries</a></p>
         <p><a href="#" class="link text-white-50">Sport Injuries</a></p>
         <p><a href="#" class="link text-white-50">Massage Therapy</a></p>
         <p><a href="#" class="link text-white-50">Physiotherapy</a></p> 
         <p><a href="#" class="link text-white-50">Chiropratic Therapy</a></p>         
      </div>
 </div>
<div class="footer-bottom mt-2 pt-2 p-2">
  <div class="row justify-content-between">
    <hr>
  <div class="col-auto"><p class="">Copyright text goes here</p></div>
 <div class="col-auto"><p class="">Design from Scratch By <a href="#" class="text-white-50">OKOCHATECH</a></p></div>
  </div>
 </div>
<!--END FOOTER-->


<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="js/app.js"></script>
<script type="smooth-scroll.js"></script>
 <script>
  var scroll = new SmoothScroll('a[href*="#"]');
</script>
<script src="js/scroll.js"></script>
</body>
</html>