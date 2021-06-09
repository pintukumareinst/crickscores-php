<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body>


<?php

$servername="aaipgog9kcml1f.cvyxg5vrhddj.ap-south-1.rds.amazonaws.com";
$username="username";
$pass="password";
$db="ebdb";

$con=mysqli_connect($servername,$username,$pass,$db);

if (!$con) {
  echo "Connection failed";
} else {
  $sel = "SELECT * FROM three";

  $res = mysqli_query($con, $sel);

?>


  <div class="container-fluid mt-2">

    <div class="row row-cols-1 row-cols-md-5 g-4 text-center text-secondary">

      <?php
      while ($row = mysqli_fetch_array($res)) {

$ch = curl_init();

// Set the url
curl_setopt($ch, CURLOPT_URL,$row['link']);

// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute
$result=curl_exec($ch);

// Closing 
curl_close($ch);

preg_match('!setVideoTitle(.*);!',$result,$x);
// preg_match('!setVideoUrlHigh.*?;!',$result,$y);
preg_match('!setThumbUrl(.*).jpg!',$result,$z);

$t="";
//$t2="";
$t3="";

for($i=15;$i<strpos($x[0],"');");$i++)
{
       $t=$t.$x[0][$i];
}

for($i=13;$i<strpos($z[0],".jpg");$i++)
{
       $t3=$t3.$z[0][$i];
}



        ?>

        <div class="col" id="<?php echo str_replace(' ', "-", $t); ?>">
          <div class="card">
            <a href="<?php echo "matv.php?id=".$row['link'] ; ?>">
              <img src="<?php echo $t3.'.jpg'; ?>" alt="<?php echo $t; ?>" class="card-img-top" height="200">
            </a>
          </div><?php if(strlen($t)<66) echo $t; else echo substr($t,0,64).'..'; ?></div>

      <?php
      
      }


      ?>

    </div>
  </div>



<?php
  mysqli_close($con);
}
?>
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