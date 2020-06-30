<?php include 'db/connect.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<body>
		<?php
    $cid=$_POST['clientid'];
    $query="SELECT * FROM client_data WHERE client_id=$cid";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result);

		?>
	     <option value="<?php echo $row['client_id'];?>" <?php if ($row['client_id']==$cid) {
         echo "selected";
       } ?> > <?php echo $row['client_name']; ?> </option>
	</body>
</html>
