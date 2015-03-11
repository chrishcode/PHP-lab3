<?php
include 'template.php';

$content = "<h2>Böcker i lager</h2><br>";

$query = "
	SELECT * FROM products
	ORDER BY created_at DESC
";

$result = $conn->query($query);

if($result->num_rows > 0) {
	while($row = $result->fetch_object()) {

		if(isset($_SESSION['userID'])){
			$content .= <<< END
				<div id='products'>
					<h4>{$row->name}</h4>
					<h5 class='price'>{$row->price} kr</h5>
					<a href='product_details.php?productId={$row->productID}'>Mer info</a><br>
					<a href='delete_product.php?productId={$row->productID}' onclick="return confirm('Är du säker på att du vill ta bort denna produkten?');">Radera produkt</a><br>
					<a href='edit_product.php?productId={$row->productID}'>Ändra produkt</a>
					<hr>
				</div>
END;
		} else {
			$content .= "
				<div id='products'>
					<h4>{$row->name}</h4>
					<h5 class='price'>{$row->price} kr</h5>
					<a href='product_details.php?productId={$row->productID}'>Mer info</a>
					<hr>
				</div>
			";
		}

	}
}

echo $navigation;
echo $content;
?>