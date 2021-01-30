
<?php 
	include_once("config.php");

	$result = mysqli_query($mysqli, "SELECT * FROM birthdays ORDER BY ID");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
	<link id="theme-style" rel="stylesheet" href="assets/css/style.css">
	<link id="theme-style" rel="stylesheet" href="assets/css/bootstrap.css">

	<title>Birthday | Homepage</title>
</head>
<body style="background-image: url('assets/images/colored_floating_baloons.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">

	<div class="container mx-auto rounded pl-5 pr-5 pt-5 pb-5 ml-5 mr-5 mb-5 mt-5" style="background-color: #ffffff;">

	<h1><?php echo "Famous Birthday List"; ?></h1>
	<a class="btn btn-primary rounded" href="add.html">Add New Data</a><br/><br/>

	<table>
		<tr bgcolor='#cccccc'>
			<td class="pl-2">ID </td>
			<td class="pl-2">Name </td>
			<td class="pl-4">Birthday </td>
			<td class="pl-5">Created</td>
			<td class="pl-5">Update</td>
		</tr>


		<?php 

		while( $res = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td class='pl-2'>".$res['ID']."</td>";

			echo "<td class='pl-2'>".$res['Name']."</td>";

			echo "<td class='pl-4'>".$res['birthday']."</td>";

			echo "<td class='pl-5'>".$res['created_at']."</td>";

			echo "<td class='pl-5'><a href=\"edit.php?id=$res[ID]\">Edit</a> | <a href=\"delete.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a></td>";
			echo "</tr>";
		} 

		?>

	</table>
	
	<nav class="btn btn-success blog-nav nav nav-justified my-5">
		<a class="text-white nav-link-prev nav-item nav-link rounded" href="index.php"><strong>EXIT</strong><i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
	</nav>
	
	</div>
 	
 	<script src="./js/jquery-3.5.1.slim.min.js" ></script>
    <script src="./js/bootstrap.bundle.min.js" ></script>
	
</body>
</html>