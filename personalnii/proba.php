<?php
session_start();



$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$email = $_POST['email'];
$password = $_POST['password'];
$text = $_POST['text'];
 
//pravimo konekciju

$servername = "localhost";
$username = "makson";
$sifra= "makson7!";
$dbname = "personalni_trener";

$con = new mysqli($servername,$username,$sifra,);

mysqli_select_db($con,'personalni_trener');

$s = "SELECT * FROM registrovani WHERE email = '$email'";
                                                                                                                                  
$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
  echo"Vec se koristi email";
}else{
  $reg = "INSERT INTO registrovani(ime,prezime,email,password,text) 
  VALUES ('$ime','$prezime','$email','$password','$text')";

  mysqli_query($con,$reg);

  echo"Uspesna Registracija!";
  header('Location:login.html');
}

//provera konekcije


/*
$s = "select * from registrovani WHERE email = '$email'";

$result = mysqli_query($conn,$s);

$num = mysqli_num_rows($result);

if($num==1){
  echo "Email se vec koristi.";
}else{

  */
$sql = "INSERT INTO registrovani(ime,prezime,email,password,text) 
VALUES ('$ime','$prezime','$email','$password','$text')";








//zatvaranje konekcije
$con->close();

?>