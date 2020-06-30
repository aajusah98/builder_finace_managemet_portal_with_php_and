<?php include '../db/connect.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<body>
		<?php
			$sql ="SELECT * FROM client_data WHERE bank_id='". $_POST["bankid"] ."'";
		  $result = $conn->query($sql);
		?>
		<?php while ($row=mysqli_fetch_array($result)):;?>
		<option value="<?php echo $row['client_id'];?>"  > <?php echo $row['client_name']; ?> </option>
		<?php endwhile ?>
	</body>
</html>
