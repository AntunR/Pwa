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
        <a href="unos.html" class="link-dark">Unos</a>
      </div>
    </div>
  </div>
  
</nav>

<hr>
</header>
</div class="conatiner">
    <div class="row">
        <div class="col">
            <div class="forma">
                <form action="skripta.php" name="forma" method="POST">
                    <label for="naslov">Naslov:</label><br>
                    <input type="text" id="naslov" name="naslov"><br>
                    <label for="sazetak">Sažeto:</label><br>
                    <textarea id="sazetak" name="sazetak" rows="4" cols="50"></textarea><br>
                    
                    <label for="kategorija">Izaberite kategoriju:</label>
                    <select name="kategorija" id="kategorija" name="kategorija">
                      <option value="Sport">Sport</option>
                      <option value="Vijesti iz Hrvatske">Vijesti iz Hrvatske</option>
                      <option value="Vremenske nepogode">Vremenske nepogode</option>
                    </select><br><br>
                    <label for="slika">Odaberite sliku:</label>
                    <input type="file" id="slika" name="slika"><br><br>
                    <input type="checkbox" id="objava" name="objava" value="da">
                    <label for="objava">Želite li objaviti vijest</label><br><br>

                    <input type="submit" value="Submit" id="submit">
                </form>
            </div>  
        </div>
    </div>
</div>

<footer>
  <p>Antun Rupčić arupcic@tvz.hr 2022.</p>
</footer>
</div>

<script type="text/javascript">
    document.getElementById("submit").onclick = function(event) {
var slanjeForme = true;
var poljenaslov = document.getElementById("naslov");
 var naslov = document.getElementById("naslov").value;
 if (naslov.length < 5 || naslov.length > 30) {
 slanjeForme = false;
 poljenaslov.style.border="1px dashed red";
 document.getElementById("naslov").innerHTML="Naslov vjesti mora imati između 5 i 30 znakova!<br>";
 } else {
 poljenaslov.style.border="1px solid green";
 document.getElementById("naslov").innerHTML="";
 }

 var poljesazetak = document.getElementById("sazetak");
 var sazetak = document.getElementById("sazetak").value;
 if (sazetak.length < 10 || sazetak.length > 100) {
 slanjeForme = false;
 poljesazetak.style.border="1px dashed red";
 document.getElementById("sazetak").innerHTML="Kratki sadržaj mora imati između 10 i 100 znakova!<br>";
 } else {
 poljesazetak.style.border="1px solid green";
 document.getElementById("sazetak").innerHTML="";
 }

 var poljeslika = document.getElementById("slika");
 var slika = document.getElementById("slika").value;
 if (slika.length == 0) {
 slanjeForme = false;
 poljeslika.style.border="1px dashed red";
 document.getElementById("slika").innerHTML="Slika mora biti unesena!<br>";
 } else {
 poljeslika.style.border="1px solid green";
 document.getElementById("slika").innerHTML="";
 }

 var poljekategorija = document.getElementById("kategorija");
 if(document.getElementById("kategorija").selectedIndex == 0) {
 slanjeForme = false;
 poljekategorija.style.border="1px dashed red";

document.getElementById("kategorija").innerHTML="Kategorija mora biti odabrana!<br>";
 } else {
 poljekategorija.style.border="1px solid green";
 document.getElementById("kategorija").innerHTML="";
 }
 if (slanjeForme != true) {
 event.preventDefault();
 }




 

};
</script>
</body>
</html>
