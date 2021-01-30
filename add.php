<?php 
	include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
	<link id="theme-style" rel="stylesheet" href="assets/css/style.css">
	<link id="theme-style" rel="stylesheet" href="assets/css/bootstrap.css">

	<title>Birthday | Adding Data</title>
</head>
<body style="background-image: url('assets/images/colored_floating_baloons.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">

<div class="bg-light col-md-6 mx-auto w-50 rounded pl-3 pr-3 pt-3 pb-3 ml-5 mr-5 mb-5 mt-5 text-center" >


<?php
if( isset($_POST['Submit'])){
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$birthday = mysqli_real_escape_string($mysqli, $_POST['birthday']);

	if( empty($name) || empty($birthday) ){

		if(empty($name)){
			echo "<font color='red'> Name field is empty. </font><br/>";
		}

		if(empty($birthday)){
			echo "<font color='red'> Birthdate field is empty. </font><br/>";
		}

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

	} else {

		$result = mysqli_query($mysqli, "INSERT INTO birthdays(name, birthday) VALUES ('$name', '$birthday')");
		echo "<font color='green'> Data Added Successfully.";
		echo "<br/><a href='indexbd.php'> View Result </a>";
	}


}
?>
</div>	

	<script src="./js/jquery-3.5.1.slim.min.js" ></script>
    <script src="./js/bootstrap.bundle.min.js" ></script>

</body>
</html>