<?php

include("../header.php");

    $n=$_POST['name'];

   $e=$_POST['email'];
   $m=$_POST['message'];

   $to = "pintukumareinst@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: pintukumareinst3@gmail.com" . "\r\n";
//"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);

?>

    <section class="form form--bg">
      <div class="container">
        <div class="page-section">
          <div class="text-center">
            <h2 class="page-section__title page-section__title--white">Contact us</h2>
            <div class="form__title-style">
              <span class="first-line"></span>
              <span class="second-line"></span>
            </div>
            <p class="page-section__subtitle page-section__subtitle--white">Enjoy Live Score for International and Local Matches, also get upcoming live matches calender and much more..</p>
          </div>

  

           <?php
              
                  echo '<div class="alert alert-success" role="alert">
  We have received your request
</div>';

          ?>

        </div>
      </div>
    </section>

     <footer class="footer footer--bg">
      <div class="container">
        <div class="row">
          <div class="col-md-4 footer__left">
            <center>
              <img src="../assets/images/logo.png">
            <!-- <a class="navbar-brand" href="#" style="float:center;"></a> -->
            <!-- <p>Copyright <span>&copy;</span> Dart themes 2017</p>
 -->          </center>
          </div>
          <div class="col-md-2 footer__link">
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Feedback</a></li>
        
          </div>
          <div class="col-md-2 footer__link">
            <li><a href="#">Live</a></li>
            <li><a href="#">Results</a></li>
            <li><a href="#">Calendar</a></li>
  
          </div>
          <div class="col-md-4 footer__social-icons">
            <center>
            <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
            <li><a href="#"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
            <li><a href="#"><i class="flaticon-google-plus"></i></a></li>
            <li><a href="#"><i class="flaticon-pinterest-logo"></i></a></li>
          </center>
          </div>
        </div>
      </div>
    </footer>

  </div>






  <script src="assets/jquery/jquery-3.2.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- <script src="assets/owl-slider/owl.carousel.min.js"></script> -->

  <script>
    $(document).ready(function() {
      
      $('button').click( function(e) {
        $('.collapse').collapse('hide');
      });


      
    });
  </script>
</body>
</html>