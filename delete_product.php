<?php
include 'template.php';
if(isset($_SESSION['userID'])){
	if(isset($_GET['productId'])) {
		$query = "
			DELETE FROM products
			WHERE productID = {$_GET['productId']}
		";

		$conn->query($query);
		echo "<script>window.location = 'products.php';</script>";
	}
} else {
	echo "Du måste vara inloggad för att ta bort böcker från lagret!";
}

echo $navigation;
?>