<?php
require_once "animal.php";
require_once "frog.php";
require_once "ape.php";

// ANIMAL
$sheep = new Animal("shaun", 4, "no");
echo "Name : " . $sheep->getName() . "<br>";
echo "Legs : " . $sheep->getLegs() . "<br>";
echo "Cold_Blooded : " . $sheep->getColdBlooded() . "<br><br>";

// FROG
$frog = new Frog("buduk", 4, "no");
echo "Name : " . $frog->getName() . "<br>";
echo "Legs : " . $frog->getLegs() . "<br>";
echo "Cold_Blooded : " . $frog->getColdBlooded() . "<br>";
echo "Jump : " . $frog->jump() . "<br><br>";

// APE
$sungokong = new Ape("Kera Sakti", 2, "no");
echo "Name : " . $sungokong->getName() . "<br>";
echo "Legs : " . $sungokong->getLegs() . "<br>";
echo "Cold_Blooded : " . $sungokong->getColdBlooded() . "<br>";
echo "Yell : " . $sungokong->yell() . "<br><br>";