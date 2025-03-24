<?php

// STAP 1 & 8 - Is het een POST-request, nee dan redirect naar fout page (laatste is OPTIONEEL)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
   // The request is using the POST method
   header('Location: ../../index.php');   // Geen fout page dus
   exit();
}
// STAP 2 - Ophalen ingetikte gegevens in vars en beveiligen
$firstname = htmlentities($_POST['firstname']);
$prefixes = htmlentities($_POST['prefixes']);
$lastname = htmlentities($_POST['lastname']);
$street = htmlentities($_POST['street']);
$house_number = htmlentities($_POST['housenumber']);
$email = htmlentities($_POST['email']);
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];




require_once '../Database/Database.php';

$sql = "
   INSERT INTO `customers`(`firstname`, `prefixes`, `lastname`, `street`, `house_number`, `addition`, `zipcode`, `city`, `email`, `password`)
   VALUES(:firstname, :prefixes, :lastname, :street, :house_number, :addition, :zipcode, :city, :email, :password)
";
$placeholders = [
   ':firstname' => $firstname,
   ':prefixes' => $prefixes,
   ':lastname' => $lastname,
   ':street' => $street,
   ':house_number' => $house_number,
   ':email' => $email,
   ':password' => password_hash($password, PASSWORD_DEFAULT),
];
Database::query($sql, $placeholders);

header('Location: ../../index.php');
exit();

