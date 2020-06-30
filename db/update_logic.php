<?php
include 'connect.php';

    if (isset($_POST['client_submit'])) {
      $id=$_GET['id'];
    $Bankid=$_POST['bankid'];
    $bank_branch=$_POST['bank_branch'];
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

      $sql="UPDATE  client_data SET bank_id='$Bankid',bank_branch='$bank_branch',bank_staff_name='$bank_staff_name',bank_staff_phone='$bank_staff_phone',bank_issue_date='$bank_issue_date',bank_ref_num='$bank_ref_num',client_name='$client_name',owner_name='$owner_name',client_phone='$client_phone',client_tel_num='$client_tel_num',temp_address='$temp_address',perm_address='$perm_address',docs='$comma_separated_doc',advance_amount='$advance_amount',advance_reciver_name='$advance_reciver_name',form_filled_by='$form_filled_by' WHERE client_id=$id";
      $result=mysqli_query($conn,$sql);

    if ($result) {

    function function_alert($message) {
      global $id;
            // Display the alert box
        echo "<script>alert('$message');

        document.location='../editing_page.php?id=$id';

        </script>";
    }
    // Function call
    function_alert("USER DATA UPDATED");

    }
    else {

      echo "error";
      echo mysqli_error($conn);
    }
    }

if (isset($_POST['final_office_submit'])){

$fid=$_GET['fid'];

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

$sql="UPDATE  office_data SET bank_id='$bank_id',client_id='$client_id',adb_ref_no='$adb_ref_no',field_visitor='$field_visitor',adb_visited_date='$adb_visited_date',ini_rep_sent_date='$ini_rep_sent_date',ini_rep_pre_by='$ini_rep_pre_by',final_rep_pre_date='$final_rep_pre_date',final_rep_pep_by='$final_rep_pep_by',total_amount='$total_amount',dicounter_name='$dicounter_name',final_payment_recived='$final_payment_recived',discount_amount='$discount_amount',adv_amount='$adv_amount',bill_num='$bill_num',payment_rec_by='$payment_rec_by',payment_method='$payment_method',form_filled_by='$form_filled_by',payment_status='$payment_status' WHERE client_id=$fid";
$result=mysqli_query($conn,$sql);
if ($result) {

function function_alert($message) {
  global $fid;
        // Display the alert box
    echo "<script>alert('$message');

    document.location='../final_editting_page.php?  id=$fid';

    </script>";
}
// Function call
function_alert("USER DATA UPDATED");

}
else {

  echo "error";
  echo mysqli_error($conn);
}

}






























 ?>
