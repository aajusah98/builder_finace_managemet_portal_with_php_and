<?php
include "db/logic.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADB_Offical_Work</title>
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
    <style media="screen">
    #officefld
    {
      border: 2px double blue !important;
      margin-bottom: 20px;
      xmin-width: 0;
      padding: 10px;
      position: relative;
      border-radius:4px;
      background-color:#f5f5f5;
      padding-left:10px!important;
    }

    .cr {
        position: relative;
        display: inline-block;
        border: 1px solid #a9a9a9;
        border-radius: .25em;
        width: 1.9em;
        height: 1.9em;
        float: left;
        margin-right: .5em;
      }
      label
      {
      font-family:'Lora';
      font-size:17px;
      color: #0008ff;
      }

      table,tr,th{

    border-top: 0px !important;

    font-family:'Lora';
    font-size:19px;
    color: #0008ff;
    font-weight: bold;



      }
      table,tr,td{

        border-top: 0px !important;
      }

  section{

    margin-top: 5%;
  }

    </style>
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="welcome.php?bname=Nepal%20Investment%20Bank%20Ltd">ALKA DESIGNERS AND BUILDERS</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="welcome.php?bname=Nepal%20Investment%20Bank%20Ltd"><span class="glyphicon glyphicon-list-alt" > IDE</span></a></li>
            <li class="active"><a href="secondpage.php"><span class="glyphicon glyphicon-list-alt" > FDE</span></a></li>
              <li><a href="users_display.php"><span class="glyphicon glyphicon-print"> PID</span></a></li>
              <li><a href="final_official_display.php"><span class="glyphicon glyphicon-print"> PFD</span></a></li>
              <li><a href="Update.php"><span  class="glyphicon glyphicon-pencil"> UPDATE</span></a></li>
            <li><a href="statement.php"><span  class="glyphicon glyphicon-th-list">  STATEMENT</span></a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DATA ENTRY <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="welcome.php?bname=Nepal%20Investment%20Bank%20Ltd">INITIAL DATA ENTRY</a></li>
                <li><a href="secondpage.php">FINAL DATA ENTRY</a></li>
              </ul>
            </li> -->
            <ul class="nav navbar-nav navbar-right" style="margin-left:100px;">
              <li style="color:red; font-size: 15px; font-family: 'Martel'; margin-top:19px;text-align:center; text-transform:uppercase;">WELCOME TO ADB</li>
              <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-in"></span>Logout</a></button> </li>
            </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>



    <?php
    if (isset($_GET['id'])) {
    $id=$_GET['id'];

$que="SELECT
  client_data.*,
  office_data.*
FROM
  client_data,
  office_data
WHERE
  client_data.client_id =$id AND client_data.client_id=office_data.client_id";

    // $q1="SELECT * FROM office_data where office_data.client_id='$id'";
    $res=mysqli_query($conn,$que);
    $a=mysqli_fetch_array($res);
    }
    ?>




<section>
<div class="container-fluid">
<div class="panel panel-primary">
  <div class="panel-heading"><p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:25px; margin:5px; color:black ;">ALKA DESIGNERS AND BUILDERS (OFFICIAL FINAL)</p></div>
    <div class="panel-body">
      <form method="post" action="db/update_logic.php?fid=<?php echo "$id"; ?>">
        <fieldset id="officefld">
        <p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:#ff4700;">ADB OFFICE WORK</p>
          <hr style="border-top: 1px  solid blue; margin:0px;">
          <div class="table-responsive">
              <table class="table table-borderless">
                    <tr>
                      <th>
                        <label for="Party_Name">Bank Name:</label>
                      </th>
                      <td>
                        <?php
                           $sql = "SELECT * FROM bank";
                            $result = $conn->query($sql);
                          ?>
                          <!-- <script type="text/javascript">

                        function getclient(val) {
                          	$.ajax({
                          	type: "POST",
                          	url: "Ajax_files/get_clients_acc_back.php",
                          	data:'bankid='+val,
                          	success: function(data){
                          		$("#clientid").html(data);
                          	}
                          	});
                          }
                          </script> -->


                        <SELECT class="form-control" id="banklist" name="bank_id" onChange="getclient(this.value);">

                             <option value="0">SELECT BANK NAME</option>
                             <?php while($row = mysqli_fetch_array($result)):;?>
                            <option value="<?php echo $row[0]; ?>"   <?php if ($row[0]==$a['bank_id']){
                              echo "selected";
                            } ?>   ><?php echo $row[1];?></option>
                                <?php endwhile;?>
                        </SELECT>
                      </td>
                      <th>
                        <label >Client Name:</label>
                      </th>
                      <td>
                        <?php
                        $query="SELECT * FROM client_data";
                        $result=mysqli_query($conn,$query);
                         ?>
                           <select name="client_id" id="clientid"  onchange="take(this.value)" class="form-control" >

                               <option value="0">SELECT CLIENT NAME</option>
                                <?php while ($row=mysqli_fetch_array($result)):;?>
                             <option value="<?php echo $row['client_id'];?>"   <?php if ($row['client_id']==$a['client_id']){
                               echo "selected";
                             } ?> > <?php echo $row['client_name']; ?> </option>
                           <?php endwhile;?>
                           </select>
                      </td>
                    </tr>
                    <tr>

                      <th>
                           <label>Field Visited By :</label>
                      </th>
                      <td>
                        <input type="text"    value="<?php echo $a['field_visitor']; ?>" name="field_visitor" placeholder="Enter Field Visiter Name"  class="form-control">
                      </td>

                      <th>
                       <label>ADB Visited Date:</label>
                      </th>
                      <td>
                        <input  type="date" value="<?php echo $a['adb_visited_date']; ?>"  class="form-control"  name="adb_visited_date" >
                      </td>
                    </tr>
                    <tr>
                      <th>
                           <label>Initial Report Sent Date:</label>
                      </th>
                      <td>
                        <input type="date" name="ini_rep_sent_date" value="<?php echo $a['ini_rep_sent_date']; ?>" class="form-control">
                      </td>
                      <th>
                       <label>Initial Report Prepared By:</label>
                      </th>
                      <td>
                        <input  type="text"   class="form-control" value="<?php echo $a['ini_rep_pre_by']; ?>" placeholder="Enter Your Name" name="ini_rep_pre_by" >
                      </td>
                    </tr>
                    <tr>
                      <th>
                           <label>Final Report Sent Date:</label>
                      </th>
                      <td>
                        <input type="date" value="<?php echo $a['final_rep_pre_date']; ?>" name="final_rep_pre_date"  class="form-control">
                      </td>
                      <th>
                       <label>Final Report Prepared By:</label>
                      </th>
                      <td>
                        <input  type="text"  class="form-control" value="<?php echo $a['final_rep_pep_by']; ?>" placeholder="Enter Your Name" name="final_rep_pep_by" >
                      </td>
                    </tr>



<script type="text/javascript">
function Amount() {
  var f=parseFloat(document.getElementById("tolamnt").value);
  var d=parseFloat(document.getElementById("disamnt").value);
  var advance_amount=parseFloat(document.getElementById("advance_amount").value);
  var a=f-(d+advance_amount);
document.getElementById("adv").value=a;
}

function take(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","Ajax_files/get_adv_acc_client.php?q="+str,true);
  xmlhttp.send();
}

</script>


                    <tr>
                      <th>
                           <label>Total Amount:</label>
                      </th>
                      <td>
                        <input type="number" id="tolamnt"    value="<?php echo $a['total_amount']; ?>"    name="total_amount" placeholder="Enter Total Amount" class="form-control">
                      </td>

                      <th>
                           <label>Advance Amount:</label>
                      </th>


                      <td>
                        <div id="txtHint">
                        <input type="text" id="advance_amount" name="adv_amount" class="form-control" readonly required  value="<?php echo $a['advance_amount']; ?>">
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <th>
                           <label>Discount Amount:</label>
                      </th>
                      <td>
                        <input type="number" id="disamnt" value="<?php echo $a['discount_amount']; ?>" name="discount_amount"  value="<?php echo $a['discount_amount']; ?>" placeholder="Enter Discount Amount" class="form-control">
                      </td>

                      <th>
                           <label>Discounted By:</label>
                      </th>
                      <td>
                        <select class="form-control" name="dicounter_name">
                          <option value="Engineer Atmaram"   <?php if ($a['dicounter_name']=="Engineer Atmaram") {
                            echo "selected";
                          } ?> >Engineer Atmaram</option>
                          <option value="Engineer Sanjay"  <?php if ($a['dicounter_name']=="Engineer Sanjay") {
                            echo "selected";
                          } ?> >Engineer Sanjay</option>
                          <option value="No Discount"  <?php if ($a['dicounter_name']=="No Discount") {
                            echo "selected";
                          } ?> >No Discount</option>
                        </select>
                     </td>
                    </tr>
                    <tr>
                      <th>
                           <label>Payment Recived By:</label>
                      </th>
                      <td>
                        <input type="text"   value="<?php echo $a['payment_rec_by']; ?>"   name="payment_rec_by" placeholder="Enter Your Name" class="form-control">
                      </td>
                      <th>
                       <label>Payment Method:</label>
                      </th>
                      <td>
                        <select class="form-control" name="payment_method">
                          <option value="CASH"  <?php if ($a['payment_method']=="CASH") {
                            echo "selected";}?>>CASH</option>
                          <option value="ACCOUNT" <?php if ($a['payment_method']=="ACCOUNT") {
                            echo "selected";}?>>ACCOUNT</option>
                        </select>
                     </td>
                   </tr>
                   <tr>
                     <th><label>Form Fille By:</label></th>
                     <td ><input type="text" name="form_filled_by" value="<?php echo $a['form_filled_by']; ?>" placeholder="Enter Your Name" class="form-control" required></td>
                     <th>
                          <label>ADB Ref No(Take From Register):</label>
                     </th>
                     <td>
                       <input type="text" name="adb_ref_no" value="<?php echo $a['adb_ref_no']; ?>"  placeholder="ADB Reference Number" class="form-control">
                     </td>
                   </tr>
                   <tr>
                     <th>
                      <label><button onclick="Amount()" type="button">Actuacl Amount Is:</button></label>
                     </th>
                     <td>
                       <input type="text" name="final_payment_recived" id="adv" value="<?php echo $a['final_payment_recived'];?>" class="form-control" readonly required >
                     </td>
                     <th>
                      <label>Payment Status:</label>
                     </th>
                     <td>
                       <select class="form-control" name="payment_status">
                         <option value="DUE"   <?php if ($a['payment_status']=="DUE") {
                           echo "selected";}?>>DUE</option>
                         <option value="PAID"  <?php if ($a['payment_status']=="PAID") {
                           echo "selected";}?>>PAID</option>
                       </select>
                    </td>
                    </tr>
                    <tr>
                      <th><label>Bill Number:</label></th>
                      <td ><input type="text" name="bill_num" value="<?php echo $a['bill_num']; ?>" placeholder="Enter Bill Number" class="form-control"> </td>
                    </tr>
                    </table>
                    </div>

        </fieldset>
        <div class="col text-center">
       <button type="submit" name="final_office_submit" style="background-color: #00f300;" class="btn btn-default"><p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:blue ;">Submit</p></button>
         </div>
      </form>
      </div>
    </div>
</div>

</section>

</html>
