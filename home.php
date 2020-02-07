<?php
session_start();
if (!isset($_SESSION['username'])) {
	# code...
	header('location:login.php');

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	 <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="container">


	<a class="float-right" href="logout.php">Logout</a>

	<h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
</div>

</body>
</html>