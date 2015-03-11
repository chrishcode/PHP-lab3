
<?php
include 'template.php';
session_unset();
session_destroy();



$content = <<< END
<h1>Du har loggats ut!</h1>
<a href="index.php">Gå till startsidan</a>
END;

echo $content;

?>
<meta charset="uft-8">