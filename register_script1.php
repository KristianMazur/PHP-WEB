<?php

require_once("Connection.php");

$isEmpty = false;
$hasPasswordCertainLenght = true;
$hasPasswordAtLeastOneNumber = true;
$passwordAreSame = true;

// Vypisat si $_POST
print_r($_POST);
echo "<br/>";
print_r($_POST['email']);
echo "<br/>";

$meno = $_POST["username"];
$email = $_POST["email"];
$priezvisko = $_POST["surname"];
$heslo = $_POST["password"];
$passwordVerify = $_POST["passwordVerify"];

$hashed_password = password_hash($heslo, PASSWORD_DEFAULT);

// 2. Skontrolovať či su všetky vstupy zadané 

if( empty($_POST["email"])){
  $isEmpty = true;
}
if( empty($_POST["username"])){
  $isEmpty = true;
}
if( empty($_POST["surname"])){
  $isEmpty = true;
}
if( empty($_POST["password"])){
  $isEmpty = true;
}
if( empty($_POST["passwordVerify"])){
  $isEmpty = true;
}

if($isEmpty == true){
  echo " Nieco si nezadal";
}
else{
  echo " Zadal si vsetko";
}

$sql = "INSERT INTO registration (Email, Meno, Priezvisko, Heslo) VALUES ('$email','$meno','$priezvisko','$hashed_password')";

if(strlen($heslo) >= 5){
  if(preg_match('@[0-9]@', $heslo)){
      if ($heslo == $passwordVerify){
        
         
          if ($conn->query($sql) === TRUE){
              echo " Novy zaznam bol vytvoreny";
          } 
          else{
              echo "Chyba: " . $sgl . "<br>" . $conn->error;
          
          }
      }
      else{
          echo " Hesla sa nezhoduju";
      }
  }
  else{
      echo " V tvojom hesle musi byt cislo ";
      
  }
}
else{
  echo " Tvoje heslo je moc kratke. Musi obsahovat minimalne 5 znakov. ";
}



$conn->close();
?>
