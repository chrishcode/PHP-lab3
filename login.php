 
<?php

include 'template.php';
session_start();

if(isset($_POST['username'])) {
	$query = <<< END
		SELECT userID, username, password FROM users
		WHERE username = '{$_POST['username']}'
		AND password = '{$_POST['password']}'
END;

	$result = $conn->query($query);

	if($result->num_rows > 0) {
		$row = $result->fetch_object();
		$_SESSION['userName'] = $row->username;
		$_SESSION['userID'] = $row->userID;
		echo "<script>window.location = 'index.php';</script>";
		//header("Location:index.php");
	} else {
		echo "Fel användarnamn eller lösenord.";
	}

}


$content = <<< END
	<h1>Logga in</h1>
	<form id="login-form" method="post" action="login.php">
		<input class="form-control" type="text" name="username" placeholder="Användarnamn"><br>
		<input class="form-control" type="password" name="password" placeholder="Löserord"><br>
		<input class="btn btn-primary" type="submit" value="Logga in">
	</form>
END;

echo $navigation;
echo $content;

// if(isset($_SESSION['userID'])) {
// 	echo "<p>Du är inloggad som {$_SESSION['userName']}</p>";
// 	$navigation = <<< END
// 		<nav>
// 			<a href="index.php">Hem</a>
// 			<a href="about.php">Om oss</a>
// 			<a href="logout.php">Logga ut</a>
// 		</nav>
// END;
// }




?>

<meta charset="uft-8">