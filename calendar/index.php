<?php

include("../header.php");

    $api_url  = "https://cricapi.com/api/matchCalendar?apikey=FtFQ4cpD56RFXhJNHuR1RgWPICG3";
//  $api_url  = "http://cricapi.com/api/fantasySummary?apikey=<apikey>&unique_id=<unique_id>"

//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$api_url);
// Execute
$result=curl_exec($ch);

$data=json_decode($result);


// echo "<pre>";
// print_r($data);

// Closing
curl_close($ch);

$count=count($data->data);

$page=$_GET['page'];

$u=$page*5;
$l=$u-5;

?>


  <div id="content-wrapper">
    <header class="header header--bg">
      <div class="container">
               

    <div class="row">
          <div class="col-lg-5">
            <img class="img-responsive" src="../test_player.svg" alt="">
          </div>
          <div class="col-lg-7 header__content text-center">

            <h6 class="title">Calendar<span class="title-style"></span></h6>

  <?php
            date_default_timezone_set('Asia/Kolkata');

      for($i=$l;$i<$u;$i++) {

                $date= strtotime($data->data[$i]->date);

?>

<div class="card bg-info">
  <div class="card-body">

    <h5 class="text-danger"><?php echo date("l jS F Y", $date); ?></h5>

    <h3 class="text-primary"><?php echo $data->data[$i]->name; ?></h3>
          
  </div>
</div>

<?php
}
$pl=$page-1;
$pu=$page+1;
?>

<nav aria-label="Page navigation example" class="">
  <ul class="pagination justify-content-center">
    <li class="page-item">
<?php
      if($page==1)
        echo '<a class="page-link" href="#" aria-label="Previous">';
      else
        echo '<a class="page-link" href="../calendar?page='.$pl.'" aria-label="Previous">';
?>
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
<?php
      if($page==1)
        echo '<li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="../calendar?page=2">2</a></li>
              <li class="page-item"><a class="page-link" href="../calendar?page=3">3</a></li>';
      else
        echo '<li class="page-item"><a class="page-link" href="../calendar?page='.$pl.'">'.$pl.'</a></li>
              <li class="page-item active"><a class="page-link" href="#">'.$page.'</a></li>
              <li class="page-item"><a class="page-link" href="../calendar?page='.$pu.'">'.$pu.'</a></li>';
?>
    <li class="page-item">
      <a class="page-link" href="<?php echo "../calendar?page=".$pu; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>


          </div>
        </div>
      </div>
    </header>

       <?php

include("../footer.php");
?>