<?php

$ch = curl_init();

$l2="";
for($i=0;$i<strlen($_GET['id']);$i++)
    if($i>24)
$l2=$l2.$_GET['id'][$i];
// Set the url
curl_setopt($ch, CURLOPT_URL,"https://www.xvideos3.com/".$l2);

// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
// Execute
$result=curl_exec($ch);

// Closing 
curl_close($ch);

preg_match('!setVideoTitle(.*);!',$result,$x);
preg_match('!setVideoUrlHigh(.*);!',$result,$y);
preg_match('!setThumbUrl(.*).jpg!',$result,$z);

$t="";
$t2="";
$t3="";

for($i=15;$i<strpos($x[0],"');");$i++)
{
       $t=$t.$x[0][$i];
}

for($i=17;$i<strpos($y[0],";")-2;$i++)
{
       $t2=$t2.$y[0][$i];
}

for($i=13;$i<strpos($z[0],".jpg");$i++)
{
       $t3=$t3.$z[0][$i];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title><?php echo $t." - Name"; ?></title>
  </head>
  <body>


<div class="container-fluid mt-2">
    <h4><?php echo $t; ?></h4>


  <div class="row justify-content-md-center">
   <!--  <div class="col-md-4">
      1 of 3
    </div> -->
    <div class="col-md-4">
      
      <video width="100%" height="100%" controls poster="<?php echo $t3.'.jpg'; ?>">
  <source src="<?php echo $t2; ?>" type="video/mp4">
  <source src="<?php echo $t2; ?>" type="video/ogg">
    <?php echo $t; ?> 
</video>

    </div>
    <!-- <div class="col-md-4">
      3 of 3
    </div>
 -->  </div>
    

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>