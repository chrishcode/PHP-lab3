<?php
if(isset($_POST['username'])) {
	$query = <<< END
		SELECT userID, username, password FROM users
		WHERE username = '{$_POST['username']}'
		AND password = '{$_POST['password']}'
END;

	$result = $conn->query($query);

	if($result->num_rows > 0) {
		$row = $result->fetch_object();
		$_SESSION["username"] = $row->username;
		$_SESSION["userID"] = $row->userID;
		//echo "<script>window.location = 'index.php';</script>";
		header("Location:index.php");
	} else {
		echo "Fel användarnamn eller lösenord.";
	}

}
?>