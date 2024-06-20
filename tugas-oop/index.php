<?php
require_once('C:/xampp/htdocs/Tugas-9/Tugas-9-OOP/tugas-oop/animal.php');
require_once('C:/xampp/htdocs/Tugas-9/Tugas-9-OOP/tugas-oop/frog.php');
require_once('C:/xampp/htdocs/Tugas-9/Tugas-9-OOP/tugas-oop/ape.php');

//Release 0
$sheep = new animal("shaun");
echo "Release 0: <br>";
echo "Name: " . $sheep->get_name() . "<br>"; //shaun
echo "Legs: " . $sheep->get_legs() . "<br>"; //4
echo "Cold blooded: " . $sheep->get_cold_blooded() . "<br>"; // "no"
echo "<br>";

//Release 2
$kodok = new frog("buduk");
echo "Release 1: <br>";
echo "Name: " . $kodok->get_name() . "<br>"; //buduk
echo "Legs: " . $kodok->get_legs() . "<br>"; // 4 (turunan dari animal)
echo "Cold blooded: " . $kodok->get_cold_blooded() . "<br>"; // "no"
echo "Jump: ";
$kodok->jump(); //"hop hop"
echo "<br>";  

//Release 1
$sungokong = new ape("kera sakti");
echo "Release 1: <br>";
echo "Name: " . $sungokong->get_name() . "<br>"; // kera sakti
echo "Legs: " . $sungokong->get_legs() . "<br>"; // 2
echo "Cold blooded: " . $sungokong->get_cold_blooded() . "<br>"; //"no"
echo "Yell: ";
$sungokong->yell(); // "Auooo"

?>