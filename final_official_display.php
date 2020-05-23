<!DOCTYPE html>
<?php
include "db/logic.php";
?>
<html lang="en" dir="ltr">
  <head>
    <title>AlkaBuilder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Martel">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
      <script type="text/javascript" src="bootstrap/jquery-3.5.1.min.js"></script>
<script>
function clint(d) {
  var d=document.getElementById(d).innerHTML;
  document.body.innerHTML=d;
  window.print();
  window.location = "./final_official_display.php";
}

</script>
<style media="screen">

#userdatafld

{
  border: 2px double #0008ff !important;
  margin-top:20px;
  margin-bottom: 20px;
  xmin-width: 0;
  padding: 10px;
  position: relative;
  border-radius:4px;
  background-color:#f5f5f5;
  padding-left:10px!important;
}

#docstbl{

  font-family: arial, sans-serif;
  border-collapse: collapse;

margin-left: 300px;
}
#doccell1
{
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
#doccell2
{
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
#docrow{
    border: 1px solid black;
}
  @media print {
  div  {
border: 1px solid black;

    }
  }

  table,tr,th{

border-top: 0px !important;

  }
  table,tr,td{

    border-top: 0px !important;
    font-family:'Lora';
    font-size:19px;
    color: black;
  }
  label
  {
  font-family:'Lora';
  font-size:20px;
  color: black;
  }

  p{

    font-family:'Lora';
    font-size:20px;
    color: black;
  }
  .table-bordered>tbody>tr>th
  {

        border: 1px solid #555;
  }

.table-bordered>tbody>tr>td
{
  border: 1px solid #555;

}
</style>

  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="welcome.php?bname=Nepal%20Investment%20Bank%20Ltd">ALKA DESIGNERS AND BUILDERS</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        </div>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav">
          <li class="active"><a href="welcome.php?bname=Nepal%20Investment%20Bank%20Ltd">Home</a></li>
                <li><a href="secondpage.php">OFFICIAL FORM</a></li>
          </li>
          <li><a href="users_display.php">PRINT INITIAL DATA</a></li>
            <li><a href="final_official_display.php">PRINT FINAL DATA</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li style="color:red; font-size: 15px; font-family: 'Martel'; margin-top:19px;text-align:center; text-transform:uppercase;">WELCOME TO ADB</li>
          <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-in"></span>Logout</a></button> </li>
        </ul>
          </div>
      </div>
    </nav>


    <div class="container-fluid">
    <div class="panel panel-primary">
      <div class="panel-heading"> <label for="ClintName">SELECT CLINT NAME FOR PRINTING FINAL OFFICIAL ENTRY </label>  </div>
        <div class="panel-body">
          <form  method="post">
            <div class="form-group">
              <?php
              $query="SELECT * FROM clint_data";
              $result=mysqli_query($conn,$query);
               ?>
              <select name="final" class="form-control">
                <?php while ($row=mysqli_fetch_array($result)):;?>
                <option value="<?php echo $row[0];?>" > <?php echo $row[7]; ?> </option>
              <?php endwhile;?>
              </select>
            </div>
            <button type="submit"  name="finalentry" class="btn btn-default"> GET CLINT DATA</button>
          </form>
        </div>
    </div>
    </div>


    <?php
    if (isset($_POST['finalentry'])) {
      $id=$_POST['final'];
      $query="SELECT
        clint_data.*,
        bank.*,
        office_data.*
    FROM
        clint_data,
        bank,
        office_data
    WHERE
        clint_data.clint_id =$id AND bank.bank_id = clint_data.bank_id AND clint_data.clint_id=office_data.clint_id;";
      $result=mysqli_query($conn,$query);
      $arr=mysqli_fetch_assoc($result);
    }
    else {
      $query="SELECT
        clint_data.*,
        bank.*,
        office_data.*
    FROM
        clint_data,
        bank,
        office_data
    WHERE
        clint_data.clint_id =1 AND bank.bank_id = clint_data.bank_id AND clint_data.clint_id=office_data.clint_id;";
      $result=mysqli_query($conn,$query);
      $arr=mysqli_fetch_assoc($result);

    }
    ?>

  <!-- left panel view -->
    <div class="container-fluid">
      <div class="panel panel-primary" >
        <div class="panel-heading" ><b> You Are Getting Data Of</b>  <label for="ClintName"><?php echo $arr['clint_name']; ?></label></div>
          <div class="panel-body  d-print-block" id="div3">
              <div class="table-responsive" style="margin-top:20px;">


                <h1 id="test" style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:25px; margin-top:10px; margin-bottom:10px;color:black ;">ALKA DESIGNERS AND BUILDERS</h1>
                <hr style="border-top: 2px  solid black;  margin:0px;">
                 <table class="table table-bordered" id="clintTbl">
                         <tr>
                           <th>
                           <label for="Party_Name">Bank Name :</label>
                           </th>
                           <td>
                             <?php echo $arr['Bank_Name']; ?>
                           </td>
                           <th>
                           <label>Clint Name :</label>
                           </th>
                           <td>
                             <?php echo $arr['clint_name']; ?>
                           </td>
                         </tr>
                         <tr>
                           <th>
                           <label>Field Visitor Name :</label>
                           </th>
                           <td>
                             <?php echo $arr['field_visitor']; ?>
                           </td>
                           <th>
                           <label for="Party_Name">ADB Visited Date :</label>
                           </th>
                           <td>
                             <?php echo $arr['adb_visited_date']; ?>
                           </td>
                         </tr>
                         <tr>
                           <th>
                           <label for="Party_Name">Initial Report Sent Date :</label>
                           </th>
                           <td>
                             <?php echo $arr['ini_rep_sent_date']; ?>
                           </td>
                           <th  >
                           <label for="Party_Name">Initial Report Prepared By :</label>
                           </th>
                           <td >
                             <?php echo $arr['ini_rep_pre_by']; ?>
                           </td>
                         </tr>
                         <tr>
                           <th>
                           <label for="Party_Name">Final Report Sent Date :</label>
                           </th>
                           <td>
                             <?php echo $arr['final_rep_pre_date']; ?>
                           </td>
                           <th>
                           <label for="Party_Name">Final Report Prepared By :</label>
                           </th>
                           <td>
                             <?php echo $arr['final_rep_pep_by']; ?>
                           </td>
                         </tr>
                         <tr>
                           <th>
                           <label for="Party_Name">Total Amount :</label>
                           </th>
                           <td>
                             <?php echo $arr['total_amount']; ?>
                           </td>
                           <th>
                           <label for="Party_Name">Due Amount :</label>
                           </th>
                           <td>
                             <?php echo $arr['due_amount']; ?>
                           </td>
                         </tr>
                         <tr>
                           <th>
                           <label for="Party_Name">Discount Amount</label>
                           </th>
                           <td>
                             <?php echo $arr['discount_amount']; ?>
                           </td>
                           <th>
                           <label for="Party_Name">Discounted By</label>
                           </th>
                           <td>
                             <?php echo $arr['dicounter_name']; ?>
                           </td>
                         </tr>
                         <tr>
                           <th>
                           <label for="Party_Name">Final Amount Recived</label>
                           </th>
                           <td>
                             <?php echo $arr['final_payment_recived']; ?>
                           </td>
                           <th>
                           <label for="Party_Name">Bill Number :</label>
                           </th>
                           <td>
                             <?php echo $arr['bill_num']; ?>
                           </td>

                         </tr>


                         <tr>
                           <th>
                           <label for="Party_Name">Payment Recived By :</label>
                           </th>
                           <td>
                             <?php echo $arr['payment_rec_by']; ?>
                           </td>
                           <th>
                           <label for="Party_Name">Payment Method :</label>
                           </th>
                           <td>
                             <?php echo $arr['payment_method']; ?>
                           </td>
                         </tr>

                         <tr>
                           <th>
                           <label for="Party_Name">Form Fille By :</label>
                           </th>
                           <td>
                             <?php echo $arr['form_filled_by']; ?>
                           </td>
                           <th>
                           <label for="Party_Name">ADB Ref No(Take From Register) :</label>
                           </th>
                           <td>
                             <?php echo $arr['adb_ref_no']; ?>
                           </td>
                         </tr>
                       </table>

                       <p style="text-decoration:overline; text-align:center; margin-top:40px;">Checked By</p>
         </div>
            </div>
              <div class="col text-center">
  <button onclick="clint('div3')" type="submit" name="clint_submit" style="background-color: #00f300;" class="btn btn-default"><p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:blue ;">Print</p></button>
</div>
          </div>

          </div>
    </div>
  <!-- end of left panel view -->

  </div>
</div>












<div class="container-fluid">
<div class="panel panel-primary">
<div class="panel-heading"> <label for="ClintName">SELECT CLINT NAME</label>  </div>
  <div class="panel-body">
    <form  method="post">
      <div class="form-group">
        <?php
        $query="SELECT * FROM clint_data";
        $result=mysqli_query($conn,$query);
         ?>
        <select name="del" class="form-control">
          <?php while ($row=mysqli_fetch_array($result)):;?>
          <option value="<?php echo $row[0];?>" > <?php echo $row[7]; ?> </option>
        <?php endwhile;?>
        </select>
      </div>
      <button type="submit"  name="dele" class="btn btn-default">DELETE</button>
    </form>
    <?php
    if (isset($_POST['dele'])) {
    $delid=$_POST['del'];

    $query="DELETE clint_data.*,office_data.* FROM clint_data INNER JOIN office_data ON clint_data.clint_id=office_data.clint_id WHERE clint_data.clint_id=$delid";
    $resulte=mysqli_query($conn,$query);
    if ($resulte) {
      function function_alert($message) {

          echo "<script>alert('$message');</script>";
      }


      // Function call
      function_alert("Clint Data Has Been Deleted Successfully");
    }
    else {
      echo "Record Not Found";
    }
    }

     ?>

  </div>
</div>
</div>


  </body>
</html>
