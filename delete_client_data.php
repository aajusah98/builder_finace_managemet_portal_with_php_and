<?php
include 'db/connect.php';
if (isset($_GET['id'])) {
$delid=$_GET['id'];
$query="DELETE client_data.* FROM client_data WHERE client_data.client_id=$delid";
$resulte=mysqli_query($conn,$query);
if ($resulte) {
  function function_alert($message) {
      echo "<script>alert('$message');
      document.location='Update.php'
      </script>";
  }


  // Function calls
  function_alert("Data Has Been Deleted Successfully");
}
else {
  echo "Record Not Found";
}
}

?>
