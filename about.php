
<?php
include 'template.php';

$content = <<< END
<h1>Om min affär!</h1>
<p>Min affär grundades en mörk höstkväll i Halmstad</p>

<h3>Skicka ett meddelande</h3>
<form id="form" action="send.php" method="post">
	<input class="form-control" type="text" name="name" placeholder="Namn">
	<br>
	<textarea class="form-control" name="msg" placeholder="Meddelande" rows="5"></textarea>
	<br>
	<input class="btn btn-primary" type="submit" value="Skicka">
</form>
END;

echo $navigation;
echo $content;
?>

<meta charset="uft-8">