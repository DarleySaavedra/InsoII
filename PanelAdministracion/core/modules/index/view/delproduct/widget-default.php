<?php

	$product = ProductData::getById($_GET["id"]);
	$product->del();
	header("Location: index.php?view=products");
	
?>
