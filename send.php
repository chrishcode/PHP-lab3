<?php
include 'template.php';
if(isset($_POST)) {
	$name = $_POST['name'];
	$msg = $_POST['msg'];
	$content = "
	<h3>Ditt meddelande har skickats!</h3>
	Namn: $name
	<br>
	Meddelande: $msg
	<br><br>
	<a href='index.php'>Tillbaka till startsidan</a>
	";

	$to = "chrwoh14@student.hh.se";
	$subject = "Mail från formulär - PHP Lab 1";
	$headers = "Från:" . " " . $name;
	mail($to,$subject,$msg,$headers);
}

echo $content;

?>