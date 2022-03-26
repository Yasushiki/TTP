<?php

$mysqli = new mysqli("localhost", "root", "", "ttp");

$sql = "DELETE FROM ". $_GET["classe"] ." WHERE id=". $_GET["id"];
$mysqli->query("$sql");

header("location: index.php");

?>
