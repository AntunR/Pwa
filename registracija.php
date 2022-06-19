<form enctype="multipart/form-data"  action="" method="post">

  <div class="container">
    <label for="ime"><b>Ime:</b></label>
    <input type="text" name="ime" required><br>

    <label for="prezime"><b>Prezime:</b></label>
    <input type="text" name="prezime" required><br>

    <label for="username"><b>Username:</b></label>
    <input type="text" name="username" required><br>

    <label for="lozinka"><b>Password:</b></label>
    <input type="password" name="lozinka" required><br>

    <button type="submit">Login</button>
  </div>

  
</form>

<?php
 $dbc = mysqli_connect('localhost', 'root', '', 'projekt_baza') or
 die('Error connecting to MySQL server.'. mysqli_connect_error());

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$username = $_POST['username'];
$lozinka = $_POST['lozinka'];
$hashed_password = password_hash($lozinka, CRYPT_BLOWFISH);
$razina = 0;
$registriranKorisnik = '';


//Provjera postoji li u bazi već korisnik s tim korisničkim imenom
$sql = "SELECT username FROM korisnici WHERE username = ?";
$stmt = mysqli_stmt_init($dbc);
if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
 }


if(mysqli_stmt_num_rows($stmt) > 0){
 $msg='Korisničko ime već postoji!';
}else{
 // Ako ne postoji korisnik s tim korisničkim imenom - Registracija korisnika u bazi pazeći na SQL injection
 $sql = "INSERT INTO korisnici (ime, prezime,username, lozinka, razina)VALUES (?, ?, ?, ?, ?)";
 $stmt = mysqli_stmt_init($dbc);
 if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_bind_param($stmt, 'ssssd', $ime, $prezime, $username, $hashed_password, $razina);
    mysqli_stmt_execute($stmt);
 $registriranKorisnik = true;
 }
}
mysqli_close($dbc);
?>
