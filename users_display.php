<!DOCTYPE html>
<?php
include "db/connect.php";
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
	window.location = "./users_display.php";

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
              <li class="active"><a href="users_display.php"><span class="glyphicon glyphicon-print"> PID</span></a></li>
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

    <script>
    $(document).ready(function(){
        $("#client").change(function(){
            var selectedCountry = $(this).children("option:selected").val();
        });
    });



   //
   //  $(function () {
   //    $("#client").change(function () {
   //       var selectedText = $("#client").find("option:selected").text();
   //       var selectedValue = $("#client").val();
   // document.location='users_display.php?id='+selectedValue;
   //     alert(selectedValuey);
   //    });
   //  });

    </script>

    <section>
<div class="container-fluid">
<div class="panel panel-primary">
  <div class="panel-heading"> <label for="ClientName">CLINT </label>  </div>
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
                 <!-- <script type="text/javascript">

                      $(function () {
                        $("#data").click(function () {
                           var selectedText = $("#client").find("option:selected").text();
                           var selectedValue = $("#client").val();
                           document.location='users_display.php?id='+selectedValue;
                        });
                      });
                 </script> -->
                <select name="cl"  class="form-control" id="client">
                  <option value="">SELECT CLIENT</option>
                  <?php while ($row=mysqli_fetch_array($result)):;?>
                  <option value="<?php echo $row[0];?>"  > <?php echo $row[7]; ?> </option>
                <?php endwhile;?>
                </select>
              </div>
    </td>
    <td> <button type="submit"  id="data"  value="hh" name="de" class="btn btn-success">OK</button></form></td>

    <td><form  method="post">
      <div class="form-group">
        <?php
        $query="SELECT * FROM client_data";
        $result=mysqli_query($conn,$query);
         ?>
        <select name="cl" class="form-control">
          <option value="">SELECT OWNER</option>
          <?php while ($row=mysqli_fetch_array($result)):;?>
          <option value="<?php echo $row[0];?>"> <?php echo $row[8]; ?> </option>
        <?php endwhile;?>
        </select>
      </div>
    </td>

    <td><button type="submit" value="hh" name="de" class="btn btn-success">OK</button>
    </form></td>
  </tr>
</table>
</div>
</div>
<!-- fetching_client_details_from_database -->
    <?php
    if (isset($_POST['de'])) {
      $id=$_POST['cl'];
      $query="SELECT client_data.*,bank.* FROM client_data,bank WHERE client_data.client_id=$id AND bank.bank_id=client_data.bank_id;";
      $result=mysqli_query($conn,$query);
      $arr=mysqli_fetch_assoc($result);
    }

    else {
      $query="SELECT client_data.*,bank.* FROM client_data,bank WHERE client_data.client_id=1 AND bank.bank_id=client_data.bank_id;";
      $result=mysqli_query($conn,$query);
      $arr=mysqli_fetch_assoc($result);
    }
   ?>
<!-- end of fetcing client data -->


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
                           <label for="Party_Name">Branch Name :</label>
                           </th>
                           <td>
                             <?php echo $arr['bank_branch']; ?>
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
                           <label for="Party_Name">Client Name :</label>
                           </th>
                           <td>
                             <?php echo $arr['client_name']; ?>
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
                           <label for="Party_Name">Client Phone No :</label>
                           </th>
                           <td>
                             <?php echo $arr['client_phone']; ?>
                           </td>
                           <th>
                           <label for="Party_Name">Client LandLine Number :</label>
                           </th>
                           <td>
                             <?php echo $arr['client_tel_num']; ?>
                           </td>
                         </tr>

                 </table>
                  <p style="text-align:center; margin-bottom:0px;"><label>Available Documents :</label></p>
                <table class="table table-bordered" id="clientTbl">
                  <hr style="border-top: 1px  solid black;  margin:0px;">
                                      <tr>
                                         <th>Sn.</th>
                                         <th>Document</th>
                                         <th>Sn.</th>
                                         <th>Document</th>
                                       </tr>
                                       <?php
                      $docs=explode(',', $arr['docs']);
                      $c=count($docs);
                      $d=$c;
                      $i=0;
                      $k=round($c/2);
                        foreach ($docs as $key => $value):   ?>
                        <tr>
                          <?php if (round($c/2)>$i): ?>
                          <td>
                            <?php echo $i+1; ?>
                          </td>
                          <td>
                            <?php echo $docs[$i];
                            $i++;
                             ?>
                          </td>
                              <?php endif; ?>
                                <?php
                                if ($d>round($c/2)): ?>
                          <td>
                        <?php
                        echo $k+1;
                        $k++;
                         ?>
                          </td>
                          <td>
                            <?php echo $docs[$d-1];
                            $d--;
                             ?>
                          </td>
                          <?php endif; ?>
                        </tr>
                      <?php endforeach; ?>
                </table>
<?php
$kitta=explode(',', $arr['kitta']);
$sqm=explode(',', $arr['area_sqm']);
$sqf=explode(',', $arr['area_sqf']);
$c=count($sqm);
$i=0;
 ?>

<table table class="table table-bordered" id="clientTbl">
        <hr style="border-top: 1px  solid black;  margin:0px;">
<tr>
  <th>Kitta</th>
  <th>Area(sq.m)</th>
  <th>Area(sq.f)</th>
</tr>
<?php while ($i<$c):; ?>
<tr>
<td><?php echo $kitta[$i]; ?></td>
<td><?php echo $sqm[$i]; ?></td>
<td><?php echo $sqf[$i]; ?></td>
</tr>
<?php $i++;  endwhile; ?>
</table>

<hr style="border-top: 2px  solid black;  margin:0px;">
 <table class="table table-bordered" id="clientTbl">
         <tr>
           <th>
           <label>Staff Name :</label>
           </th>
           <td>
             <?php echo $arr['name_per_Ee']; ?>
           </td>
           <th>
           <label for="Party_Name">Personal Expenditure :</label>
           </th>
           <td>
             <?php echo $arr['amt_per_Ec']; ?>
           </td>
         </tr>
         <tr>
           <th>
           <label>Staff Name :</label>
           </th>
           <td>
             <?php echo $arr['name_off_Ee']; ?>
           </td>
           <th>
           <label>Office Expenditure :</label>
           </th>
           <td>
             <?php echo $arr['amt_off_Ee']; ?>
           </td>
         </tr>
         <tr>
           <th>
           <label>Advance Collection(Total) :</label>
           </th>
           <td>
             <?php echo $arr['totl_adv_col']; ?>
           </td>
           <th>
           <label>Remaining Advance Collection :</label>
           </th>
           <td>
             <?php echo $arr['rem_adv_amt']; ?>
           </td>
         </tr>


</table>
                   <p><label>Temporary Address :</label> <?php echo $arr['temp_address']; ?></p>
                   <p><label>Permanent Address :</label> <?php echo $arr['perm_address']; ?></p>
                  <p><label>Advance Amount:</label> <?php echo $arr['advance_amount']; ?></p>
                  <p><label>Advance Reciver Name :</label> <?php echo $arr['advance_reciver_name']; ?></p>
                  <p><label>Form Filled By :</label> <?php echo $arr['form_filled_by']; ?></p>
                  <p style="text-decoration:overline; text-align:center; margin-top:20px;">Checked By</p>
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
