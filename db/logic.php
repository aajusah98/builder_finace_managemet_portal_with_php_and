<?php

include 'connect.php';
if (isset($_POST['client_submit'])) {
$Bankid=$_POST['bankid'];
$bank_branch=$_POST['bank_tel_num'];
$bank_staff_name=$_POST['bank_staff_name'];
$bank_staff_phone=$_POST['bank_staff_phone'];
$bank_issue_date=$_POST['bank_issue_date'];
$bank_ref_num=$_POST['bank_ref_num'];
$client_name=$_POST['client_name'];
$owner_name=$_POST['owner_name'];
$client_phone=$_POST['client_phone'];
$client_tel_num=$_POST['client_tel_num'];
$temp_address=$_POST['temp_address'];
$perm_address=$_POST['perm_address'];
$doc=$_POST['doc'];
$comma_separated_doc = implode(" , ", $doc);
$advance_amount=$_POST['advance_amount'];
$advance_reciver_name=$_POST['advance_reciver_name'];
$form_filled_by=$_POST['form_filled_by'];


  $sql="INSERT INTO client_data (bank_id,	bank_branch,bank_staff_name,bank_staff_phone,bank_issue_date,bank_ref_num,client_name,owner_name,client_phone,client_tel_num,temp_address,perm_address,docs,advance_amount,advance_reciver_name,form_filled_by)VALUES('{$Bankid}','{$bank_branch}','{$bank_staff_name}','{$bank_staff_phone}','{$bank_issue_date}','{$bank_ref_num}','{$client_name}','{$owner_name}','{$client_phone}','{$client_tel_num}','{$temp_address}','{$perm_address}','{$comma_separated_doc}','{$advance_amount}','{$advance_reciver_name}','{$form_filled_by}')";
$result=mysqli_query($conn,$sql);



if ($result) {

function function_alert($message) {

    // Display the alert box
    echo "<script>alert('$message');</script>";


}

function_alert("Your Client Data Is Saved Successfully");
}
else {

  echo "error";
  echo mysqli_error($conn);
}
}


if (isset($_POST['new_bnk_submit']))
{
$Bank_Name=$_POST['newbank'];
$sql="INSERT INTO bank (Bank_Name)VALUES('{$Bank_Name}')";
$result=mysqli_query($conn,$sql);

if ($result) {
  function function_alert($message) {

      // Display the alert box
      echo "<script>alert('$message');</script>";
  }


  // Function call
  function_alert("Bank Is Added Successfully.....");
  }

  else {
    echo "error";
      echo mysqli_error($conn);
  }

}

if (isset($_POST['office_submit'])) {
$final_payment_recived=$_POST['final_payment_recived'];
$dicounter_name=$_POST['dicounter_name'];
$discount_amount=$_POST['discount_amount'];
$adv_amount=$_POST['adv_amount'];
$bank_id=$_POST['bank_id'];
$client_id=$_POST['client_id'];
$adb_ref_no=$_POST['adb_ref_no'];
$adb_visited_date=$_POST['adb_visited_date'];
$ini_rep_sent_date=$_POST['ini_rep_sent_date'];
$ini_rep_pre_by=$_POST['ini_rep_pre_by'];
$final_rep_pre_date=$_POST['final_rep_pre_date'];
$final_rep_pep_by=$_POST['final_rep_pep_by'];
$total_amount=$_POST['total_amount'];
$bill_num=$_POST['bill_num'];
$payment_rec_by=$_POST['payment_rec_by'];
$payment_method=$_POST['payment_method'];
$form_filled_by=$_POST['form_filled_by'];
$field_visitor=$_POST['field_visitor'];
$payment_status=$_POST['payment_status'];

$sql="INSERT INTO office_data (bank_id,client_id,adb_ref_no,field_visitor,adb_visited_date,ini_rep_sent_date,ini_rep_pre_by,final_rep_pre_date,final_rep_pep_by,total_amount,dicounter_name,final_payment_recived,discount_amount,adv_amount,bill_num,payment_rec_by,payment_method,form_filled_by,payment_status) VALUES ('{$bank_id}','{$client_id}','{$adb_ref_no}','{$field_visitor}','{$adb_visited_date}','{$ini_rep_sent_date}','{$ini_rep_pre_by}','{$final_rep_pre_date}','{$final_rep_pep_by}','{$total_amount}','{$dicounter_name}','{$final_payment_recived}','{$discount_amount}','{$adv_amount}','{$bill_num}','{$payment_rec_by}','{$payment_method}','{$form_filled_by}','{$payment_status}')";
$result=mysqli_query($conn,$sql);
if ($result) {
  function function_alert($message) {

      // Display the alert box
      echo "<script>alert('$message');</script>";


  }


  // Function call
  function_alert("Your Client Doc Is Saved Successfully");
  }

  else {
    echo "error";
      echo mysqli_error($conn);
  }
}

$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
if(empty($_POST['user']) || empty($_POST['pass'])){
$error = "Username or Password is Invalid";
}
else
{
//Define $user and $pass
$user=$_POST['user'];
$pass=$_POST['pass'];
$query = mysqli_query($conn, "SELECT * FROM admin WHERE password='$pass' AND username='$user'");
$rows = mysqli_num_rows($query);

if($rows == 1){

              session_start();
          $_SESSION['logon'] = true;
          header("Location: welcome.php?bname=Nabil Bank Ltd");
          die();
      }
else
{
$error = "Username of Password is Invalid";
}
mysqli_close($conn); // Closing connection
}
}






?>
