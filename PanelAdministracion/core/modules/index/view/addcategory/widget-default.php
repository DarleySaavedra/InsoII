<?php

$grade = new CategoryData();
$grade->name = $_POST["name"];
$grade->add();


header("Location: index.php?view=categories");

?>
