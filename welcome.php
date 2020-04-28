<!DOCTYPE html>
<?php
session_start();
include "db/connect.php";
?>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <title>AlkaBuilder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
function pritdoc(q) {

  var w=document.getElementById(q).innerHTML;
  document.body.innerHTML=w;
  window.print();

}



</script>

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="welcome.php">ALKA DESIGNERS AND BUILDERS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
    <?php
       $sql = "SELECT * FROM bank";
        $result = $con->query($sql);
      ?>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Bank<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <?php while($row = mysqli_fetch_array($result)):;?>
            <li value="<?php echo $row[0];?>"><a href="welcome.php?bname=<?php echo $row[1]; ?>"><?php echo $row[1];?></a></li>
              <?php endwhile;?>
        </ul>
      </li>
      <li><a href="index.php">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li style="color:red;"><?php echo $_SESSION["user"]; ?></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
      </div>
  </div>
</nav>
<section>
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-6" >
        <div class="panel panel-primary">
       <div class="panel-heading"><?php echo $_GET['bname']; ?></div>
       <div class="panel-body" id="div1">
            <!-- Left panel start form  -->
             <form action="">
               <div class="form-group">
               <?php
                  $sql = "SELECT * FROM bank";
                   $result = $con->query($sql);
                 ?>
               <label for="Party_Name">Bank Name:</label>
               <SELECT class="form-control">
                 <?php while($row = mysqli_fetch_array($result)):;?>
                    <!-- $_GET['bname']==$row[1] it will print selected  -->
                   <option value="<?php echo $row[0]; ?>" <?php if ( $_GET['bname']==$row[1]): echo "selected";?><?php endif; ?>>
                     <a href="welcome.php?bname=<?php echo $row[1]; ?>"><?php echo $row[1];?></option>
                       <?php endwhile;?>
               </SELECT>
               </div>
                <div class="form-group">
                  <label for="Party_Name">Party Name:</label>
                  <input type="text" class="form-control" placeholder="Party Name" name="PartyName">
                </div>
                <div class="form-group">
                  <label for="Phone_No">Phone No:</label>
                  <input  type="tel"  pattern="^\d{10}$" class="form-control"  placeholder="Phone No" name="Phone_No">
                </div>
                <div class="form-group">
                  <label for="Temp_Address">Temporary Address:</label>
                  <input type="text" name="Temp_Address" placeholder="Temporary Address" class="form-control">
                </div>
                <div class="form-group">
                  <label for="Temp_Address">Permanent Address:</label>
                  <input type="text" name="Perm_Address" placeholder="Permanent Address" class="form-control">
                </div>
                <div class="form-group">
                  <label for="Temp_Address">Banker Name:</label>
                  <input type="text" name="Banker_Name" placeholder="Banker Name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="Phone_No">Banker Phone No:</label>
                  <input  type="tel"  pattern="^\d{10}$" class="form-control"  placeholder="Banker Phone No" name="Bank_Phone_No">
                </div>
                <div class="form-group">
                  <label for="Temp_Address">Bank Issue Date:</label>
                  <input type="date" name="Bank_issue_date" placeholder="Bank Issue Date" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
        </div>
        <button onclick="pritdoc('div1')">print</button>
    </div>
    </div>
      <!-- Left panel form end -->
    <div class="col-md-6 " >
          <div class="panel panel-primary">
       <div class="panel-heading"><?php echo $_GET['bname']; ?></div>
       <div class="panel-body">
             <!-- right panel form start -->
             <form action="">
                <div class="form-group">
                  <label for="Party_Name">Documents:</label>
                  <br>
                  <div class="form-check">
                    <label class="checkbox-inline"><input type="checkbox" value="">Lal Purja (Land-ownership certificate)</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Char Killa (Four boundary certificate)</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Blueprint</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Planning permit from concerned Town Development Committee</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Approval from IEE or EIA or Ministry of Environment</label>
                    <label class="checkbox-inline"><input type="checkbox" value=""> Approval from concerned division office</label>
                    <label class="checkbox-inline"><input type="checkbox" value=""> Required certifi cates and Drawing approval from the local authority (VDC/Municipality)</label>
                    <label class="checkbox-inline"><input type="checkbox" value="">Sale agreement</label>
                    <label class="checkbox-inline"><input type="checkbox" value=""> Rajinama</label>
                  </div>
                  <br>
                <div class="form-group">
                  <label for="Phone_No">Bank Reference Letter Number:</label>
                  <input  type="text"   class="form-control"  placeholder="Bank Reference Letter Number" name="Bank_name">
                </div>
                <div class="form-group">
                  <label for="Temp_Address">Office Visited:</label>
                  <input type="date" name="Temp_Address" placeholder="Temporary Address" class="form-control">
                </div>
                <div class="form-group">
                  <label for="Temp_Address">Advance Amount Recived:</label>
                  <input type="number" name="Advance_Amount " placeholder="Advance Amount Recived" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
                 <!-- right panel form start -->
    </div>
    </div>
    </div>
  </div>
</div>
</section>
</body>
</html>
