<?php 
	include_once("config.php");


if( isset($_POST['update']))
{
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
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

		$result = mysqli_query($mysqli, "UPDATE birthdays set name='$name', birthday='$birthday' WHERE id=$id");
		header("Location: indexbd.php");
	}
}
?>



<?php 

	$id = $_GET['id'];

	$result = mysqli_query($mysqli,"SELECT * FROM birthdays WHERE id=$id");

	while($res = mysqli_fetch_array($result))
	{
		$name = $res['Name'];
		$birthday = $res['birthday'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
	<link id="theme-style" rel="stylesheet" href="assets/css/style.css">
	<link id="theme-style" rel="stylesheet" href="assets/css/bootstrap.css">

	<title>Birthday | Edit Data</title>
</head>
<body style="background-image: url('assets/images/colored_floating_baloons.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">

<div class="col-md-6 mx-auto w-50 rounded pl-3 pr-3 pt-3 pb-3 ml-5 mr-5 mb-5 mt-5" style="background-color: #ffffff;">

	<form name="form1" method="post" action="edit.php">

		<table class="w-100">
			<tr>
				<td>Name</td>
				<td><input class="w-100 mb-2" type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr>
				<td>Birthdate</td>
				<td><input class="w-100 mb-2" type="date" name="birthday"  value="<?php echo $birthday;?>"></td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
				</td>
				<td><input class="btn btn-primary btn-block" type="submit" name="update" value="Update"></td>
			</tr>
		</table>

	</form>
</div>

	<script src="./js/jquery-3.5.1.slim.min.js" ></script>
    <script src="./js/bootstrap.bundle.min.js" ></script>
	
</body>
</html>