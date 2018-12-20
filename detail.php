<?php

$id = $_GET['id'];


$bdd = new PDO ("mysql:host=localhost;dbname=games;charset=utf8", "root", "m1456m1456");
$request = "SELECT id, content FROM game WHERE id = :id";
$r = $bdd->prepare($request);
$r->bindValue(':id', $id , PDO::PARAM_INT);
$r->execute();



$game = $r->fetch(PDO::FETCH_ASSOC);

include("header.php");
echo $game['content'];

