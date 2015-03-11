<?php
include 'template.php';

$content = "";

if(isset($_GET['productId'])) {

	if(isset($_POST['name'])) {
		$query = "
			UPDATE products
			SET name = '{$_POST['name']}',
			price = '{$_POST['price']}',
			description = '{$_POST['description']}'
			WHERE productID = {$_GET['productId']} 
		";

		$conn->query($query);

		echo "Produkten har uppdaterats";
	}

	$query = "
		SELECT * FROM products
		WHERE productID = {$_GET['productId']}
	";

	$result = $conn->query($query);

	if($result->num_rows > 0) {
			$row = $result->fetch_object();
			$content .= "
			<form id='form' method='post' action='edit_product.php?productId={$row->productID}'>
				<input class='form-control' type='text' name='name' placeholder='Produktnamn' value='{$row->name}'><br>
				<input class='form-control' type='text' name='price' placeholder='Pris' value='{$row->price}'><br>
				<textarea class='form-control' name='description' placeholder='Beskrivning'>{$row->description}</textarea><br>
				<input class='btn btn-primary' type='submit' value='Uppdatera produkt'>
			</form>
			";
	}
}



echo $navigation;
echo $content;
?>