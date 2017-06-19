<?php

$to = "sourav93.ghosh@gmail.com";
$from = $_POST["email"];
$headers = "From: " . $from;
$subject = $_POST["name"] . ":" . $_POST["subject"];
$message = $_POST["message"];
mail($to,$subject,$message,$headers);
header('location: home.html');

?>