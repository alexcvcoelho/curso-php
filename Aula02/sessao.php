<?php
session_start();
$_SESSION["cont"] += 1;
echo $_SESSION["cont"];

echo "<br>";
//SERIALIZE
$array = array("banana", "maçã");
$_SESSION['array'] = serialize($array);
var_dump($_SESSION['array']);
echo "<br>";
var_dump(unserialize($_SESSION['array']));
//session_destroy();
?>
