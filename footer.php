
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

          <form action="../contact/" method="post">
            

            <div class="form-group">
              <input class="form-control" type="text" placeholder="Name" name="name" required>
            </div>
            <div class="form-group">
              <input class="form-control" type="email" placeholder="Email" name="email" required>
            </div>
            <div class="form-group">
               <textarea class="form-control" rows="5" placeholder="Message" name="message" required></textarea>
            </div>
            <div class="row">
              <div class="col-md-6 checkbox">
                <input type="checkbox" id="checkbox-1">
                <label for="checkbox-1"> Subscribe to newslatter</label>
              </div>
              <div class="col-md-6 form-button">
                <center>
                <input class="button--form" type="submit" value="SEND">
              </center>
              </div>
            </div>
          </form>

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

