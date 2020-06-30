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
function client(d) {
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
            <li><a href="secondpage.php"><span class="glyphicon glyphicon-list-alt" > FDE</span></a></li>
              <li><a href="users_display.php"><span class="glyphicon glyphicon-print"> PID</span></a></li>
              <li class="active"><a href="final_official_display.php"><span class="glyphicon glyphicon-print"> PFD</span></a></li>
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

<section>
  <div class="container-fluid">
    <div class="panel panel-primary">
      <div class="panel-heading"> <label for="ClientName">SELECT CLINT NAME FOR PRINTING FINAL OFFICIAL ENTRY </label>  </div>
        <div class="panel-body">
        <table class="table">
  <tr>
    <td>
            <form  method="post">
              <div class="form-group">
                <?php
                $query="SELECT * FROM client_data";
                $result=mysqli_query($conn,$query);
                 ?>
                <select name="final" class="form-control">
                  <option value="">SELECT CLIENT</option>
                  <?php while ($row=mysqli_fetch_array($result)):;?>
                  <option value="<?php echo $row[0];?>"> <?php echo $row[7]; ?> </option>
                <?php endwhile;?>
                </select>
              </div>
    </td>
    <td> <button type="submit" value="hh" name="finalentry" class="btn btn-success">OK</button></form></td>

    <td><form  method="post">
      <div class="form-group">
        <?php
        $query="SELECT * FROM client_data";
        $result=mysqli_query($conn,$query);
         ?>
        <select name="final" class="form-control">
          <option value="">SELECT OWNER</option>
          <?php while ($row=mysqli_fetch_array($result)):;?>
          <option value="<?php echo $row[0];?>"> <?php echo $row[8]; ?> </option>
        <?php endwhile;?>
        </select>
      </div>
    </td>

    <td><button type="submit" value="hh" name="finalentry" class="btn btn-success">OK</button>
    </form></td>
  </tr>
</table>
    </div>
    </div>
    </div>

    <?php
    if (isset($_POST['finalentry'])) {
      $id=$_POST['final'];
      $query="SELECT
        client_data.*,
        bank.*,
        office_data.*
    FROM
        client_data,
        bank,
        office_data
    WHERE
        client_data.client_id =$id AND bank.bank_id = client_data.bank_id AND client_data.client_id=office_data.client_id;";
      $result=mysqli_query($conn,$query);
      $arr=mysqli_fetch_assoc($result);
    }
    else {
      $query="SELECT
        client_data.*,
        bank.*,
        office_data.*
    FROM
        client_data,
        bank,
        office_data
    WHERE
        client_data.client_id =1 AND bank.bank_id = client_data.bank_id AND client_data.client_id=office_data.client_id;";
      $result=mysqli_query($conn,$query);
      $arr=mysqli_fetch_assoc($result);

    }
    ?>
  <!-- left panel view -->
    <div class="container-fluid">
      <div class="panel panel-primary" >
        <div class="panel-heading" ><b> You Are Getting Data Of</b>  <label for="ClientName"><?php echo $arr['client_name']; ?></label></div>
          <div class="panel-body  d-print-block" id="div3">
              <div class="table-responsive" style="margin-top:20px;">


                <h1 id="test" style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:25px; margin-top:10px; margin-bottom:10px;color:black ;">ALKA DESIGNERS AND BUILDERS</h1>
                <hr style="border-top: 2px  solid black;  margin:0px;">
                 <table class="table table-bordered" id="clientTbl">
                         <tr>
                           <th>
                           <label for="Party_Name">Bank Name :</label>
                           </th>
                           <td>
                             <?php echo $arr['Bank_Name']; ?>
                           </td>
                           <th>
                           <label>Client Name :</label>
                           </th>
                           <td>
                             <?php echo $arr['client_name']; ?>
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
                           <label for="Party_Name">Advance Amount :</label>
                           </th>
                           <td>
                             <?php echo $arr['adv_amount']; ?>
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
  <button onclick="client('div3')" type="submit" name="client_submit" style="background-color: #00f300;" class="btn btn-default"><p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:blue ;">Print</p></button>
</div>
          </div>

          </div>
    </div>
  <!-- end of left panel view -->

  </div>
</div>

</section>


  </body>
</html>
