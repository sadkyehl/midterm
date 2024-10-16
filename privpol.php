<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Privacy Policy</title>
</head>
<body>
	<?php
	include ".php";
	include ".php";
	session_start();
	echo "<form action='#' method='post'>";
	echo "<div class='____'>";
	echo "<h2>Privacy Policy</h2>";
	echo "</div>";
	echo "<p>We at Central Colleges of the Philippines (CCP) respect your privacy and are strongly committed to keeping secure any information we obtain from or about you.</p>";
	//echo "<p>our Privacy Policy consists of your data integrated into our system, you are responsible for the data that you provide but such specific data will be necessary in order to use our services.</p>";
	//echo "<p>included information such as:</p>";
	echo "<p>Personal Information we collect: </p>";
	echo "<p>Account Information</p>";
	echo "<p>your personal data hihihihi</p>";
	if (!isset($_SESSION['logged'])) {
	echo "<script>alert('Please Login first.')</script>";
	echo "<script>window.location.href='____'</script>";
}
 if (isset($_POST['back'])) {
	//unset($_SESSION['logged']);
	echo "<script>window.location.href='____'</script>";
	session_destroy();
	} 

	echo "<div class='____'>";
	echo "<input type='submit' name='back' value ='Back'>";
	echo "</div>";
echo "</form>";
	?>


</body>
</html>