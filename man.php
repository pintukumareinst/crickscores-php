<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

if($_POST['pin']=="69")
{
$link = $_POST['link'];

$servername="aaipgog9kcml1f.cvyxg5vrhddj.ap-south-1.rds.amazonaws.com";
$username="username";
$pass="password";
$db="ebdb";

$con=mysqli_connect($servername,$username,$pass,$db);
  if (!$con)
       echo "Connection failed";
  else
  {

    $sql = "SELECT * FROM desk_link WHERE link='$link' limit 1";

    $res = mysqli_query($con, $sql);

    if (mysqli_num_rows($res) == 0) 
    {
      $query = "insert into desk_link(link) values ('$link')";

      $putdata = mysqli_query($con, $query) or die(mysqli_error($con));

      echo "<script>
      alert('Link added');
      </script>";

    } else {

      echo "<script>
      alert('Link already exist');
      </script>";
    }
    mysqli_close($con);
  }

}
else
  echo "<script>
      alert('W');
      </script>";
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

    <title>Admin</title>
  </head>
  <body>

 <!--    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Name</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
      </ul>
      <div class="d-flex">
        <button class="btn btn-outline-success me-2" type="submit">Search</button>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </div>
    </div>
  </div>
</nav>
 -->

<div class="container-fluid mt-2">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

  <input type="text" class="form-control" name="link" required>
  <button type="submit" class="btn btn-primary">Add</button>
   <input type="text" class="form-control" name="pin" required>
</form>
</div>


<!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <input type="text" name="link" required><br>
  <input type="text" name="pin" required>
  <button type="submit">A</button>
</form> -->




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
