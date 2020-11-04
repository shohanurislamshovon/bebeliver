<?php

include 'conn.php';

if(isset($_POST['done'])){

 $username = $_POST['name'];
 $email =$_POST['email'];
 $number = $_POST['number'];
 $address = $_POST['address'];
 $pay = $_POST['pay'];
 $service = $_POST['service'];
 $q = " INSERT INTO `order`(`username`, `email`, `number`, `address`, `pay`, `service`) VALUES ( '$username', '$email', '$number', '$address' ,'$pay' ,'$service')";

 $query = mysqli_query($con,$q);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!--Fav Icon-->
    <link rel="shortcut icon" href="fav/favicon.ico" type="image/x-icon">

    <!--Font awesome 4.7-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--link google font is here-->
    <link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
    <!--font-family: 'Squada One', cursive-->

    <!--link google font is here-->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!--font-family: 'Pacifico', cursive;-->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <!--add other files here-->

    <!--Style.css file link here-->
   



    <style>
      #service{
    border: none;
    outline: none;
    background: rgb(192, 192, 192);
    padding: 10px;
    float: left;
    width:100%;
    margin-bottom: 20px;
    margin-left: 0px;
}

#serviceTwo{
    margin-left: px;
    border: none;
    
    outline: none;
    background: rgb(192, 192, 192);
    padding: 10px;
    float: left;
    margin-bottom: 20px;
    width:100%;
}

.form-area{
  margin-top: 150px;
}
.form-area input{
  border: none;
  outline: none;
  border-bottom: 1px solid blue;
}
.form-area input[type=submit]{
  width: 200px;
  border-bottom: none;
  padding: 10px 25px;
  margin: 10px auto;
  margin-bottom: 30px;
}

.btnlength{
  width:100%;
  
}

    </style>

    <title>Order Online ! Clean Mama !</title>
  <body>








    

    <section>
     
      <div class="container register form-area">
        <div class="row">
            <div class="col-md-12">
                    <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Order Now - Submit Your Full Information</h3>
                        <div class="row register-form">
                            <div class="col-md-12">
                                
                                
                                <!--Form Start from here -->
                                <form method="POST"  encytype="mediapart/formdata">
                                  
                                    <marquee behavior="" direction="" class="bg-secondary text-light">
                                    <div class="spinner-grow spinner-grow-sm" role="status">
                                    <span class="sr-only">Loading...</span>
                                  </div>
                                    জুলাই আগস্ট মাস পর্যন্ত সকল সার্ভিসে থাকছে ৩০% পর্যন্ত ডিসকাউন্ট । তাই আর দেরি কেনো এখনি অর্ডার করুন <a href="order.php">Order Now</a> অথবা কল করুন +8801642960944 || Up to 30% discount on all services till July-August. So why not order now or call +8801642960944</marquee>
                                    
                                    
                                    
                                    <marquee behavior="" direction="" class="bg-secondary text-light">
                                      <div class="spinner-grow spinner-grow-sm" role="status">
                                      <span class="sr-only">Loading...</span>
                                    </div>
                                    Please submit your correct information upon request. Otherwise your submitted information will be canceled. You will be contacted within 5 to 24 hours of submitting the information. For this, wait for some time without getting annoyed by submitting the information.
                                  </marquee>
                                    
                                    
                                    
                                    
                                    
                                    <div class="notice" style="width: 80%; margin: 0 auto;color: red;">
                                      <p> <div class="spinner-grow spinner-grow-sm" role="status">
                                        <span class="sr-only">Loading...</span>
                                      </div>
                                       অনুগ্রহ পূর্বক আপনি আপনার সঠিক তথ্য জমা করবেন । অন্যথায় আপনার জমাকৃত তথ্য বাতিল করা হবে ।  তথ্য জমা করার ৫ থেকে ২৪ঘন্টা এর মধ্যে আপনার সাথে যোগাযোগ করা হবে ।  এজন্য তথ্য জমা করেই বিরক্ত না হয়ে কিছু সময় অপেক্ষা করবেন । ধন্যবাদ </p>
                                    </div>
 
                                  
                                   <div class="form-group">
                                        <input type="hidden" name="Date" class="btnSubmit btn-block shadow" value="<?php echo date("d/m/Y h:i:s:a ")?>" onclick="submit()"    />
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" required="" id="name" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" required="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="number" class="form-control" placeholder="Your Contact Number *" value="" required=""/>
                                    </div>
                                    <div class="form-group">
                                      <input type="text" name="address" class="form-control" placeholder="Your Full Address *" value="" required=""/>
                                  </div>



 <!--Service mathod data start from here -->                        
                         
                                  <div class="form-group">
                                    <select name="service" id="service" value="" required="" class="btn  dropdown-toggle drpdwn" >
                                      <div class="options dropdown-menu dropdown-menu-right">
                                        <option value="" name="">-Select Your Service-</option>
                                        <option value="FLOOR CLEAN 4BDT PER SQR FEET">-FLOOR CLEAN (4BDT PER SQR FEET)-</option>
                                        <option value="CARPET CLEAN MIN 1000BDT" name="CARPET CLEAN MIN 1000BDT">-CARPET CLEAN (Minimum 1000BDT)-</option>
                                        <option value="SOFA CLEAN 400BDT Per Sit" name="SOFA CLEAN 400BDT Per Sit">-SOFA CLEAN (400BDT Per Sit)-</option>
                                        <option value="DEEP CLEAN (After details)" name="DEEP CLEAN (After details)">-DEEP CLEAN (After details)-</option>
                                        <option value="PEST CONTROL Minimum 1000BDT" name="PEST CONTROL Minimum 1000BDT">-PEST CONTROL (Minimum 1000BDT)-</option>
                                        <option value="BUILDING COLOR (After Contact)" name="BUILDING COLOR (After Contact)">-BUILDING COLOR (After Contact)-</option>
                                        <option value="RELOCATION WORKERS Minimum 2000BDT (4)" name="RELOCATION WORKERS Minimum 2000BDT (4)">-RELOCATION WORKERS (Minimum 2000BDT 4P)-</option>
                                        <option value="BY THE HOUR Minimum 100BDT" name="BY THE HOUR Minimum 100BDT">-BY THE HOUR (Minimum 100BDT)-</option>
                                        <option value="SHOP AT HOME 100BDT Per Person" name="SHOP AT HOME 100BDT Per Person">-SHOP AT HOME (100BDT Per Person)-</option>
                                        <option value="DECORATE THE HOUSE MIN 1000BDT (2)" name="DECORATE THE HOUSE MIN 1000BDT (2)">-DECORATE THE HOUSE (MIN 1000BDT 2P )-</option>
                                        <option value="DEVICE CLEAN 100BDT PER DEVICE" name="DEVICE CLEAN 100BDT PER DEVICE">-DEVICE CLEAN (100BDT PER DEVICE)-</option>
                                        <option value="" name=""></div>
                                        <div class="spinner-border" role="status">
                                        <span class="sr-only">-New Offers Loading...</span>
                                        </div>
                                      </option>
                                    </select>
                                </div>

                             
<!--Payment mathod data start from here -->
                                <div class="form-group" >
                                  <select name="pay" id="serviceTwo" value="" required="" class="btn  dropdown-toggle drpdwn drpdwnpay form-group ">
                                    <option value="" name="">-Payment Method-</option>
                                    <option value="Advance Bkash Payment 5% OFF" name="Advance Bkash Payment 5% OFF">-Advance Bkash Payment 5% OFF-</option>
                                    <option value="Cash after work advance 50%" name="Cash after work advance 50%">-Cash after work advance 50%-</option>
                                    <option value="Cash After Work with extra charges" name="Cash After Work with extra charges">-Cash After Work with extra charges-</option>
                                    
                                  </select>
                              </div>


                            
                            
<br>
<br>
<br>
<br>
                                    <div class="form-group">
                                    <button class="btn btn-secondary btnlength" type="submit" name="done"> Submit </button><br>
                                    </div>
                                    
                                    <br>
<br>
                                   
                                  
                                   <div class="animate" style="text-align: center;">
                                    <div class="spinner-grow text-primary" role="status">
                                      <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-secondary" role="status">
                                      <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-success" role="status">
                                      <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-danger" role="status">
                                      <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-warning" role="status">
                                      <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-info" role="status">
                                      <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-success" role="status">
                                      <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-dark" role="status">
                                      <span class="sr-only">Loading...</span>
                                    </div>
                                   </div>
                              
                              

                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
      





  </body>
</html>


