<!DOCTYPE html>
<?php
include "db/connect.php";
include "db/logic.php"
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
<script>
function clint(d) {
  var d=document.getElementById(d).innerHTML;
  document.body.innerHTML=d;
  window.print();
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

  @media print {
  div  {
border: 1px solid black;

    }
  }

  table,tr,th{

border-top: 0px !important;
color: #0008ff;

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
          <li><a href="users_display.php">PRINT DATA</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li style="color:red;"><?php echo $_SESSION["user"]; ?></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
          </div>
      </div>
    </nav>

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
          <select name="cl" class="form-control">
            <?php while ($row=mysqli_fetch_array($result)):;?>
            <option value="<?php echo $row[0];?>" > <?php echo $row[7]; ?> </option>
          <?php endwhile;?>
          </select>
        </div>
        <button type="submit" value="hh" name="de" class="btn btn-default"> GET CLINT DATA</button>
      </form>
    </div>
</div>
</div>

<!-- fetching_clint_details_from_database -->
    <?php
    if (isset($_POST['de'])) {
      $id=$_POST['cl'];
      $query="SELECT clint_data.*,bank.* FROM clint_data,bank WHERE clint_data.clint_id=$id AND bank.bank_id=clint_data.bank_id;";
      $result=mysqli_query($conn,$query);
      $arr=mysqli_fetch_assoc($result);
    }
    else {
      $query="SELECT clint_data.*,bank.* FROM clint_data,bank WHERE clint_data.clint_id=1 AND bank.bank_id=clint_data.bank_id;";
      $result=mysqli_query($conn,$query);
      $arr=mysqli_fetch_assoc($result);


    }
   ?>
<!-- end of fetcing clint data -->


  <!-- left panel view -->
    <div class="container-fluid">
      <div class="panel panel-primary" >
        <div class="panel-heading" ><b> You Are Getting Data Of</b>  <label for="ClintName"><?php echo $arr['clint_name']; ?></label></div>
          <div class="panel-body  d-print-block" id="div3">
              <div class="table-responsive" style="margin-top:20px;">
                 <table class="table table-bordered" id="clintTbl">
                         <tr>
                           <th>
                           <label for="Party_Name">Bank Name :</label>
                           </th>
                           <td>
                             <?php echo $arr['Bank_Name']; ?>
                           </td>
                           <th>
                           <label for="Party_Name">Bank Phone No. :</label>
                           </th>
                           <td>
                             <?php echo $arr['bank_tel_num']; ?>
                           </td>
                         </tr>
                         <tr>
                           <th>
                           <label for="Party_Name">Bank Staff Name:</label>
                           </th>
                           <td>
                             <?php echo $arr['bank_staff_name']; ?>
                           </td>
                           <th>
                           <label for="Party_Name">Bank Staff Phone No:</label>
                           </th>
                           <td>
                             <?php echo $arr['bank_staff_phone']; ?>
                           </td>
                         </tr>
                         <tr>
                           <th>
                           <label for="Party_Name">Bank Issue Date:</label>
                           </th>
                           <td>
                             <?php echo $arr['bank_issue_date']; ?>
                           </td>
                           <th  >
                           <label for="Party_Name">Bank Reference Number:</label>
                           </th>
                           <td style="margin-left:200px;" >
                             <?php echo $arr['bank_ref_num']; ?>
                           </td>
                         </tr>
                         <tr>
                           <th>
                           <label for="Party_Name">Clint Name :</label>
                           </th>
                           <td>
                             <?php echo $arr['clint_name']; ?>
                           </td>
                           <th>
                           <label for="Party_Name">Owner Name :</label>
                           </th>
                           <td>
                             <?php echo $arr['owner_name']; ?>
                           </td>
                         </tr>
                         <tr>
                           <th>
                           <label for="Party_Name">Clint Phone No :</label>
                           </th>
                           <td>
                             <?php echo $arr['clint_phone']; ?>
                           </td>
                           <th>
                           <label for="Party_Name">Clint LandLine Number :</label>
                           </th>
                           <td>
                             <?php echo $arr['clint_tel_num']; ?>
                           </td>
                         </tr>
                 </table>
                  <p><label>Temporary Address :</label> <?php echo $arr['temp_address']; ?></p>
                  <p><label>Permanent Address :</label> <?php echo $arr['perm_address']; ?></p>
                  <p><label>Available Documents :</label>  <?php echo $arr['docs']; ?></p>
                  <p><label>Advance Amount:</label> <?php echo $arr['advance_amount']; ?></p>
                  <p><label>Advance Reciver Name :</label> <?php echo $arr['advance_reciver_name']; ?></p>
                  <p><label>Form Filled By :</label> <?php echo $arr['form_filled_by']; ?></p>


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
