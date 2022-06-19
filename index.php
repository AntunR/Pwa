<?php
 $dbc = mysqli_connect('localhost', 'root', '', 'projekt_baza') or
 die('Error connecting to MySQL server.'. mysqli_connect_error());


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Novosti</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid">

<header>
  <h1>Novosti</h1>
 
<nav>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col">
        <a href="administracija.php" class="link-dark">Home</a>
      </div>
      <div class="col">
        <a href="kategorija.php?kategorija=Sport" class="link-dark">Sport</a>
      </div>
      <div class="col">
        <a href="kategorija.php?kategorija=Vijesti iz Hrvatske" class="link-dark">Vijesti iz Hrvatske</a>
      </div>
      <div class="col">
        <a href="unos.php" class="link-dark">Unos</a>
      </div>
    </div>
  </div>
  
</nav>

<hr>

</header>
<section>
<div class="container">
  <div class="row">
    <h3>Novosti iz Hrvatske</h3><br><br>
  </div>
  <div class="row">
    <div class="col">
      <img src="https://img.24sata.hr/RH6T3O7uGPazjhEbSfAFxTpcydI=/1243x700/smart/media/images/2022-24/screenshot-2022-06-18-at-15-47-04.png" alt="požar" class="img-fluid">
      <p><a href="clanak.php" class="link-dark">
      <?php
        $query = "SELECT * FROM novosti WHERE arhiva='' AND kategorija='Vijesti iz Hrvatske' LIMIT 1";
        $result = mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($result)) {
        echo $row['naslov'] . ' ' . $row['sazeto'] .'<br />';
        }?></a></p>
    </div>
    <div class="col">
      <img src="https://img.24sata.hr/TlFPHUxghbB02CSc4K3WHSFLDi8=/1243x700/smart/media/images/2022-24/dizajn-bez-naslova-96.jpg" alt="požar2" class="img-fluid">
      <p><a href="clanak.php" class="link-dark">
      <?php
        $query = "SELECT * FROM novosti WHERE arhiva='' AND kategorija='Vijesti iz Hrvatske' LIMIT 1";
        $result = mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($result)) {
        echo $row['naslov'] . ' ' . $row['sazeto'] .'<br />';
        }?></a></p>
    </div>
    <div class="col">
      <img src="https://img.24sata.hr/mjXTfVfM4626h6d57erHbArXiHI=/1243x700/smart/media/images/2022-24/pxl-180622-94123804.jpg" alt="eksplozija" class="img-fluid">
      <p><a href="clanak.php" class="link-dark">
      <?php
        $query = "SELECT * FROM novosti WHERE arhiva='' AND kategorija='Vijesti iz Hrvatske' LIMIT 1";
        $result = mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($result)) {
        echo $row['naslov'] . ' ' . $row['sazeto'] .'<br />';
        }?></a></p>
    </div>
    <div class="col">
      <img src="https://img.24sata.hr/mk1hLzOl4GY71VPGWl23lFOzKLo=/516x290/smart/media/images/2022-24/dizajn-bez-naslova-91.jpg" alt="tuča" class="img-fluid">
      <p><a href="clanak.php" class="link-dark">
      <?php
        $query = "SELECT * FROM novosti WHERE arhiva='' AND kategorija='Vijesti iz Hrvatske' LIMIT 1";
        $result = mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($result)) {
        echo $row['naslov'] . ' ' . $row['sazeto'] .'<br />';
        }?> </a></p>
    </div>
    <div class="col">
      <img src="https://img.24sata.hr/0RkcCaqH1ain7kj-RMYOI0FOD8A=/240x160/smart/media/images/2022-24/dizajn-bez-naslova-76_EdCNQki.jpg" alt="dvorac" class="img-fluid">
      <p><a href="clanak.php" class="link-dark">
      <?php
        $query = "SELECT * FROM novosti WHERE arhiva='' AND kategorija='Vijesti iz Hrvatske' LIMIT 1";
        $result = mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($result)) {
        echo $row['naslov'] . ' ' . $row['sazeto'] .'<br />';
        }?> </a></p>
    </div>
  </div>
</div>
</section>
<hr>
<section>
<div class="container">
  <div class="row">
    <h3>Sport</h3><br><br>
  </div>
  <div class="row">
    <div class="col">
      <img src="https://ip.index.hr/remote/indexnew.s3.index.hr/caf13b9c-e052-4561-a31a-4808a453b955.jpg?width=765&height=402" alt="hrv-fra" class="img-fluid" >
      <h5><a href="clanak.php" class="link-dark">
        <?php
        $query = "SELECT * FROM novosti WHERE arhiva='' AND kategorija='Sport' LIMIT 1";
        $result = mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($result)) {
        echo $row['naslov'] . ' ' . $row['sazeto'] .'<br />';
        }?>
        </a></h5>
    </div>
    <div class="col">
      <img src="https://static.jutarnji.hr/images/slike/2021/08/31/f_7288521_1024.jpg?2021-08-31-20-10-14" alt="gri" class="img-fluid" >
      <h5><a href="clanak.php" class="link-dark">
      <?php
        $query = "SELECT * FROM novosti WHERE arhiva='' AND kategorija='Sport' LIMIT 2";
        $result = mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($result)) {
        echo $row['naslov'] . ' ' . $row['sazeto'] .'<br />';
        }?></a></h5>
    </div>
    <div class="col">
      <img src="https://telesport.telegram.hr/wp-content/uploads/sites/2/2022/05/pxl-260522-93727943-840x530.jpg" alt="gri" class="img-fluid" >
      <h5><a href="clanak.php" class="link-dark">
      <?php
        $query = "SELECT * FROM novosti WHERE arhiva='' AND kategorija='Sport' LIMIT 2";
        $result = mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($result)) {
        echo $row['naslov'] . ' ' . $row['sazeto'] .'<br />';
        }?></a></h5>
    </div>
    <div class="col">
      <img src="https://hns-cff.hr/files/images/_resized/0000037918_685_375_cut.jpeg" alt="gri" class="img-fluid" >
      <h5><a href="clanak.php" class="link-dark">
      <?php
        $query = "SELECT * FROM novosti WHERE arhiva='' AND kategorija='Sport' LIMIT 2";
        $result = mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($result)) {
        echo $row['naslov'] . ' ' . $row['sazeto'] .'<br />';
        }?></a> </h5>
    </div>
  </div>
</div>
</section>
<footer>
  <p>Antun Rupčić arupcic@tvz.hr 2022.</p>
</footer>
</div>
</body>
</html>

