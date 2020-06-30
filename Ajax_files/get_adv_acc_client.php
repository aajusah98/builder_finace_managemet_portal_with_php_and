<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Martel">
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="fontawesome/css/all.min.css">
      <script type="text/javascript" src="bootstrap/jquery-3.5.1.min.js"></script>
  </head>
  <body>
    <?php
    include "../db/connect.php";
    $q = intval($_GET['q']);
    $sql="SELECT advance_amount FROM client_data WHERE client_id = '".$q."'";
    $result = mysqli_query($conn,$sql);
    $arr=mysqli_fetch_assoc($result);
     ?>
<input type="text" id="advance_amount" name="adv_amount" class="form-control" readonly required  value="<?php echo $arr['advance_amount']; ?>">






</body>
</html>
