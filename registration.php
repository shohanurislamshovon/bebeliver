<?php

include 'conn.php';

if(isset($_POST['done'])){

 $username = $_POST['name'];
 $email =$_POST['email'];
 $number = $_POST['mobile'];
 $address = $_POST['fulladdress'];
 $nid = $_POST['nid'];
 $fblink = $_POST['fblink'];
 $profession = $_POST['profession'];
 $exprience = $_POST['exprience'];
 $whichcourse =$_POST['whichcourse'];

 $gender = $_POST['gender'];

 $q = " INSERT INTO `registration`(`username`, `email`, `number`, `address`, `nid`, `fblink`, `profession`, `exprience`, `whichcourse`, `gender`) VALUES ( '$username', '$email', '$number', '$address', '$nid', '$fblink', '$profession', '$exprience', '$whichcourse', '$gender')";

 $query = mysqli_query($con,$q);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <!--bootstrap linked here cdn-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
     <!--jquery link here cdn-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--fontawesome linked here cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!--google font linked here-->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!--favIcon linked here-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!--stylesheet link here-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="reg.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">


    <title>Be Beliver Official</title>
</head>
<body>



    <div class="full-body-area">
   
   <?php
    include 'navbar.php';
  ?>
        
          <form class="inputs-form" method="POST" id="form" >
            <div class="form-group">
              <label for="formGroupExampleInput">Enter Your Full Name</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="full name" name="name" value="">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Enter Your Email</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="valid email" name="email">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Enter Your Mobile</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="valid number" name="mobile">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Enter Your Address</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="full address" name="fulladdress">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">ENTER NID NUMBER</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="nid number" name="nid">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">FACEBOOK LINK FOR ADD GROUP</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="facebook id link" name="fblink">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">ENTER YOUr Profession </label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="your profession" name="profession" VALUES="">
              </div>
             
              <fieldset >
                
                <div class="form-group">
                  <label for="">Which Course you want to do ?</label>
                  <select id="" class="form-control"  name="whichcourse" >
                    <option  value="WEB DESIGN">WEB DESIGN AVAILABLE ONLY</option>
                    <option  value="GRAPHICS DESIGN">GRAPHICS DESIGN</option>
                  </select>
                </div>
          
                <div class="form-group">
                  <label for="">Please select your gender</label>
                  <select id="" class="form-control"  name="gender" >
                    <option  value="male">Male</option>
                    <option  value="female">Female</option>
                    <option  value="other">Other</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Have you any exprience in it ??</label>
                  <select id="" class="form-control"  name="exprience" >
                    <option  value="yes">Yes</option>
                    <option  value="no">No</option>
                  </select>
                </div>
                
              </fieldset>

     
             
     




       
              <br>
              

              <br>

              <button type="submit" class="btn btn-primary" name="done">SUBMIT YOUR FORM</button>
          </form>
       



          <!-- Footer -->
<footer class="page-footer font-small unique-color-dark footer-links">

  <div style="background: #314755;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #26a0da, #314755);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #26a0da, #314755); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  ">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5 ">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Company name</h6>
        <hr class=" accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Products</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">MDBootstrap</a>
        </p>
        <p>
          <a href="#!">MDWordPress</a>
        </p>
        <p>
          <a href="#!">BrandFlow</a>
        </p>
        <p>
          <a href="#!">Bootstrap Angular</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="#!">Your Account</a>
        </p>
        <p>
          <a href="#!">Become an Affiliate</a>
        </p>
        <p>
          <a href="#!">Shipping Rates</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@example.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
       
    </div>



</body>

</html>
