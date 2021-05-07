<?php
include("../header.php");

$id= $_GET['id'];
?>
      

  <div id="content-wrapper">
    <header class="header header--bg">
      <div class="container">
               

    <div class="row">
          <div class="col-lg-5">
            <img class="img-responsive" src="../test_player.svg" alt="">
          </div>
          <div class="col-lg-7 header__content text-center">

            <h6 class="title">Score<span class="title-style"></span></h6>

<iframe id="iframe" src="<?php echo 'iframe.php?id='.$id; ?>" width="100%" frameborder="0" allowfullscreen></iframe>

<script>
        window.setInterval(function() {
            reloadIFrame()
        }, 5000);

        function reloadIFrame() {
            console.log('reloading..');
            document.getElementById('iframe').contentWindow.location.reload();
        }
    </script>


          </div>
        </div>
      </div>
    </header>
  </div>


  <!--   <header class="header header--bg">
      <div class="container">
               
    <div class="row">
          <div class="col-lg-5">
            <img class="img-responsive" src="../bot_player_banner.svg" alt="">
          </div>
          <div class="col-lg-7 header__content text-center">

            <h6 class="title">Pool<span class="title-style"></span></h6>



<a href="../localmatch">
<div class="card bg-info">
  <div class="card-body">
Under Development
  </div>
</div>
</a>
  

          </div>
        </div>
      </div>
    </header> -->

  <?php

include("../footer.php");
?>