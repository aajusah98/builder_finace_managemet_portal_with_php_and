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
			$sql ="SELECT client_data.*,office_data.* FROM client_data,office_data WHERE office_data.bank_id='". $_POST["bankid"] ."' AND office_data.client_id=client_data.client_id";
		  $result = $conn->query($sql);
		?>
		<?php while ($row=mysqli_fetch_array($result)):;?>
		<option value="<?php echo $row['client_id'];?>"  > <?php echo $row['client_name']; ?> </option>
		<?php endwhile ?>
	</body>
</html>
