<?php
if (isset($_POST['naslov']))
{
 $naslov=$_POST['naslov'];
}
if (isset($_POST['sazetak']))
{
 $sazetak=$_POST['sazetak'];
}

if (isset($_POST['kategorija']))
{
 $kategorija=$_POST['kategorija'];
}
if (isset($_POST['slika']))
{
 $slika=$_POST['slika'];
}
if (isset($_POST['objava']))
{
 $objava=$_POST['objava'];
}

?>
<div class="container">
<div class="phpi">
<section role="main">
<div class="row">
<p class="category">
<?php
echo $kategorija;
?>
</p>
 <h1 class="title"><?php
 echo $naslov;
 ?></h1>
 </div>
 <section class="slika">
 <?php
 echo "<img src='img/$slika'";
 ?>
 </section>
 <section class="objava">
 <p>
 <?php
 echo $sazetak;
 ?>
 </p>
 </section>
 <section class="kategorija">
 <p>
 <?php
echo $objava;
 ?>
 </p>
</div>
</div>
 </section>
 </section>

 <?php
 $dbc = mysqli_connect('localhost', 'root', '', 'projekt_baza') or
die('Error connecting to MySQL server.'. mysqli_connect_error());

$query = "INSERT INTO novosti (naslov, sazeto, kategorija, arhiva) 
VALUES ('$naslov', '$sazetak', '$kategorija', '$objava')";

$result = mysqli_query($dbc, $query) or die('Error querying databese.');

mysqli_close($dbc);

?>