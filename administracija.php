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
        <a href="index.php" class="link-dark">Home</a>
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
<?php
$dbc = mysqli_connect('localhost', 'root', '', 'projekt_baza') or
die('Error connecting to MySQL server.'. mysqli_connect_error());

$query = "SELECT * FROM novosti";
$result = mysqli_query($dbc, $query);
while($row = mysqli_fetch_array($result)) {
    echo'
<div class="container">
    <div class="row">
        <div class="col">
            <div class="prog">
            '.$row['naslov'].'<br>
            <img src="https://ip.index.hr/remote/indexnew.s3.index.hr/caf13b9c-e052-4561-a31a-4808a453b955.jpg?width=765&height=402" alt="hrv-fra" class="img-fluid" >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="container">
                <div class="clanak mx-auto">
                '.$row['sazeto'].'
                </div>
                <div class="clanak mx-auto">
                '.$row['kategorija'].'
                '.$row['id'].'
                <form action="administracija.php" name="Izbrisi" method="POST">
                <button type="button" class="btn btn-primary">Izbriši</button>
                </form>
                <form action="administracija.php" name="Izmjeni" method="POST">
                <button type="button" class="btn btn-primary">Izmjeni</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
  <p>Antun Rupčić arupcic@tvz.hr 2022.</p>
</footer>
</div>
</body>
</html>';
}

if(isset($_POST['Izbrisi'])){
    $id=$_POST['id'];
    $query = "DELETE FROM novosti WHERE id=$id ";
    $result = mysqli_query($dbc, $query);
   }
   
   if(isset($_POST['izmjeni'])){
    $naslov=$_POST['naslov'];
    $sazeto=$_POST['sazeto'];
    $kategorija=$_POST['kategorija'];
    $id=$_POST['id'];
    if(isset($_POST['archiva'])){
     $archive=1;
    }else{
     $archive=0;
    }
    $id=$_POST['id'];
    $query = "UPDATE vijesti SET naslov='$naslov', sazeto='sazeto', kategorija='$kategorija',
    WHERE id=$id ";
    $result = mysqli_query($dbc, $query);
    }
