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
  $sel = "SELECT * FROM desk_link";

  $res = mysqli_query($con, $sel);

?>


  <div class="container-fluid mt-2">

    <div class="row row-cols-1 row-cols-md-5 g-4 text-center text-secondary">

      <?php
      while ($row = mysqli_fetch_array($res)) {  

        $ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$row['link']);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result=curl_exec($ch);

curl_close($ch);

preg_match('!ellipsis">.*?<!',$result,$t);
preg_match('!https://a6.o-hentai.com/pool/pub/[^\s]*?x-image-process=style/m!',$result,$im);

$p="";
for($i=10;$i<strlen($t[0])-1;$i++)
{
    $p=$p.$t[0][$i];
}
$link="video.php?id=".$row['id'];

        ?>

        <div class="col" id="<?php echo str_replace(' ', "-", $p); ?>">
          <div class="card">
            <a href="<?php echo $link; ?>">
              <img src="<?php echo $im[0]; ?>" alt="<?php echo $p; ?>" class="card-img-top" height="200">
            </a>
          </div><?php if(strlen($p)<35) echo $p; else echo substr($p,0,34).'..'; ?></div>

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
