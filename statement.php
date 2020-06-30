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
        window.location = "./statement.php";
      }

      </script>

      <style>
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
              <li><a href="final_official_display.php"><span class="glyphicon glyphicon-print"> PFD</span></a></li>
              <li><a href="Update.php"><span  class="glyphicon glyphicon-pencil"> UPDATE</span></a></li>
              <li class="active"><a href="statement.php"><span  class="glyphicon glyphicon-th-list">  STATEMENT</span></a></li>

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
      <div class="panel-heading"><center> <label for="ClientName">GET STATEMENT</label></center>  </div>
        <div class="panel-body">
          <form  method="post" class="form-inline">
          <span><b>START :</b></span>    <input type="date"  name="ini_date" class="form-control">
            <span   style="margin-left:50px;"><b>END :</b></span>     <input type="date"  name="final_date" class="form-control">
            <?php
               $sql = "SELECT * FROM bank";
                $result = $conn->query($sql);
              ?>
         <SELECT class="form-control" name="bank_id" style="margin-left:50px;"  >
                 <option value="0">SELECT BANK NAME</option>
                 <?php while($row = mysqli_fetch_array($result)):;?>
                <option value="<?php echo $row[0]; ?>"><?php echo $row[1];?></option>
                    <?php endwhile;?>
            </SELECT>
            <button type="submit"  name="data"  style="margin-left:50px;"class="btn btn-default">SEARCH</button>
          </form>
        </div>
    </div>
    </div>

    <?php
    if(isset($_POST['data']))
    {
    $ini_date=$_POST['ini_date'];
    $final_date=$_POST['final_date'];
    $bank_id=$_POST['bank_id'];
    $que1="SELECT
    client_name,
    owner_name,
    Bank_Name,
    advance_amount,
    final_payment_recived,
    adb_visited_date,
    total_amount,
    payment_method,
    payment_status,
    discount_amount
FROM
    client_data c,
    office_data o,
    bank b
WHERE
    c.client_id = o.client_id AND c.bank_id = b.bank_id AND o.adb_visited_date BETWEEN '$ini_date' AND  '$final_date' AND c.bank_id =$bank_id";
    $result=mysqli_query($conn,$que1);
    }
     ?>


     <div class="container-fluid">
       <div class="panel panel-primary" >
         <div class="panel-heading" ><b><center>MONTHLY STATEMENT<center></b></div>
           <div class="panel-body  d-print-block" id="div3">

                 <h1 id="test" style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:25px; margin-top:10px; margin-bottom:10px;color:black ;">ALKA DESIGNERS AND BUILDERS</h1>



<table  class="table table-bordered table-responsive">
  <tr>
    <th>Bank Name</th>
    <th>Client Name</th>
    <th>Owner Name</th>
    <th>Total Amount</th>
    <th>Advance Amount</th>
    <th>Discount Amount</th>
    <th>Remaining Amount</th>
    <th>Payment Method</th>
    <th>Payment Status</th>
    <th>ADB Visited Date</th>


    </tr>
<?php while ($row = mysqli_fetch_array($result)):;?>
<tr>
  <td><?php echo $row['Bank_Name']; ?></td>
  <td><?php echo $row['client_name']; ?></td>
  <td><?php echo $row['owner_name']; ?></td>
  <td><?php echo $row['total_amount']; ?></td>
  <td><?php echo $row['advance_amount']; ?></td>
  <td><?php echo $row['discount_amount']; ?></td>
  <td><?php echo $row['final_payment_recived']; ?></td>
   <td><?php echo $row['payment_method']; ?></td>
   <td><?php echo $row['payment_status']; ?></td>
  <td><?php echo $row['adb_visited_date']; ?></td>
</tr>
<?php endwhile ?>
</table>


   </div>
     <div class="col text-center">
<button onclick="client('div3')" type="submit" name="client_submit" style="background-color: #00f300;" class="btn btn-default"><p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:blue ;">Print</p></button>
</div>
 </div>

 </div>

</section>


  </body>
</html>
