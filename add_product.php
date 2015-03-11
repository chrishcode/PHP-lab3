<?php

include 'template.php';

if(isset($_POST['name'])) {
	$query = "
		INSERT INTO products (name,price,description)
		VALUES ('{$_POST['name']}', '{$_POST['price']}', '{$_POST['description']}')
	";

	$conn->query($query);
	echo "<p>Produkt tillagt!</p>";
}


$content = "
	<h4>Lägg till ny produkt</h4>
	<form id='form' method='post' action='add_product.php'>
		<input class='form-control' type='text' name='name' placeholder='Produktnamn'><br>
		<input class='form-control' type='text' name='price' placeholder='Pris'><br>
		<textarea class='form-control' name='description' placeholder='Beskrivning'></textarea><br>
		<input class='btn btn-primary' type='submit' value='Lägg till'>
	</form>
";

echo $navigation;
echo $content;

?>