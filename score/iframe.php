<?php

$id= $_GET['id'];

    //$api_url  = "http://cricapi.com/api/matches?apikey=FtFQ4cpD56RFXhJNHuR1RgWPICG3";
    $api_url="https://cricapi.com/api/cricketScore?apikey=FtFQ4cpD56RFXhJNHuR1RgWPICG3&unique_id=".$id;
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

$data=json_decode($result,true);

// echo "<pre>";
// print_r($data);

// Closing
curl_close($ch);

$teama="team-1";
$teamb="team-2";

date_default_timezone_set('Asia/Kolkata');

$date= strtotime($data["provider"]["pubDate"]);

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Crick Score</title>
  <meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">

  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/fonts/flat-icon/flaticon.css">
  <link rel="stylesheet" href="../css/style.css">



</head>
<body class="bg-info">



<div class="card text-center">
  <div class="card-body">
    <h5 class="text-danger"><?php echo date("l jS F Y", $date)." - ".date("h:i:s a", $date); ?></h5>

            <h4 class="text-primary"><?php echo "<strong>".$data["team-1"]."</strong> vs <strong>".$data["team-2"]."</strong>"; ?></h4>

<?php
$flag="";

if(isset($data["score"]))
    $flag=1;
else
  $flag=0;

  
  if($flag==1)
            echo '<h3 class="text-primary">'.$data["score"].'</h3>
                  <button onClick="window.location.reload();" type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-refresh"></span> Auto Refresh Enabled
        </button>';
          else
            echo "Match cancelled<br>";
          ?>
      
  </div>
</div>



  <script src="../assets/jquery/jquery-3.2.1.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- <script src="assets/owl-slider/owl.carousel.min.js"></script> -->
</body>
</html>  

