<?php
include 'template.php';

$content = "";

if(isset($_GET['productId'])) {
	$query = "
		SELECT * FROM products
		WHERE productID = {$_GET['productId']}
	";

	$result = $conn->query($query);

	if($result->num_rows > 0) {
		while($row = $result->fetch_object()) {
			$content .= "
			<div id='products'>
				<h4>{$row->name}</h4>
				<h5 class='price'>{$row->price} kr</h5>
				<p>{$row->description}</p>
				<p class='gray'>Produktnummer: {$row->productID}</p>
				<p class='gray'>I lager sedan: {$row->created_at}</p>
				<hr>
			</div>
			";
		}
	}
}



echo $navigation;
echo $content;
?>