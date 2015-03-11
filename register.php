<?php

include 'template.php';

if(isset($_POST['username'])) {
	$query = "
		INSERT INTO users (userID, username, password, email)
		VALUES ('', '{$_POST['username']}', '{$_POST['password']}', '{$_POST['email']}')
	";

	$conn->query($query);
	echo "
		<h4>Du är registrerad</h4>
		<a href='index.php'>Gå till startsidan</a>
	";
}


$content = "
	<h4>Registrera dig</h4>
	<form id='form' method='post' action='register.php'>
		<input class='form-control' type='text' name='username' placeholder='Användarnamn'><br>
		<input class='form-control' type='password' name='password' placeholder='Lösenord'><br>
		<input class='form-control' type='text' name='email' placeholder='Email'><br>
		<input class='btn btn-primary' type='submit' value='Registrera'>
	</form>
";

echo $navigation;
echo $content;

?>