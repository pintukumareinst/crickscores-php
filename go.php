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


  <div class="container-fluid mt-2">

    <div class="row row-cols-1 row-cols-md-5 g-4 text-center text-secondary">

      <?php

        $ch = curl_init();

//$url="https://www.google.com";
$url="https://www.xvideos3.com/";

// Set the url
curl_setopt($ch, CURLOPT_URL,$url);

// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute
$result=curl_exec($ch);

// Closing
curl_close($ch);

preg_match_all('!data-src.*?title=".*?">!',$result,$x);

// echo "<pre>";
// print_r($x);

 foreach($x[0] as $i)
 {
  $t="";
$t2="";
$t3="";
$tt="";
$i2=0;
       for($j=10;$j<strpos($i,"data-i")-2;$j++)
        $t=$t.$i[$j];
           
          for($j=strpos($i,"title=")+7;$j<strlen($i)-2;$j++)
             $t2=$t2.$i[$j];

           for($j=strpos($i,"href")+7;$j<strpos($i,"title=")-2;$j++)
           {

            if($i2<13 || $i2>23)
             $t3=$t3.$i[$j];
           $i2++;
           }
  
        ?>

        <div class="col" id="<?php echo str_replace(' ', "-", $t2); ?>">
          <div class="card">
            <a href="<?php echo 'vt.php?id='.$t3; ?>">
                    <img src="<?php echo $t; ?>" alt="<?php echo $t2; ?>" class="card-img-top" height="200">
            </a>
          </div><?php if(strlen($t2)<66) echo $t2; else echo substr($t2,0,64).'..'; ?></div>
         

        <?php
        
      }

      ?>

    </div>
  </div>

  <?php
         $l="";
         $u="";
         $u="";
  ?>

  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">

    <li class="page-item disabled">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>

    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>

  </ul>
</nav>

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