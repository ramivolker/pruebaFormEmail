<?php

$name = $_POST["name"];
$email = $_POST["email"];

$mailheader = "From:".$name."<".$email.">"\r\n;

$recipient = "ramiro.volker@hotmail.com";

mail($recipient,"Programación","Hola Bro", $mailheader);
or die("Error!");

echo 
'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
    <title>Pruebas FormSubmit</title>
</head>
<body>

    <h1>Correctamente enviado!</h1>
</body>
</html>'
?>