  <!DOCTYPE html>
  <?php
  include "db/connect.php";

  ?>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
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
      <title></title>
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
                <li class="active"><a href="Update.php"><span  class="glyphicon glyphicon-pencil"> UPDATE</span></a></li>
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
      <table class="table table-bordered table-hover table-responsive">
        <thead class="thead-light">
        <tr>
          <th>#</th>
          <th>BANK NAME</th>
          <th>Client Name</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </thead>
  <tr>
    <td><span class="glyphicon glyphicon-pencil"></span>IniUpdate</td>
    <td>    <?php
           $sql = "SELECT * FROM bank";
            $result = $conn->query($sql);
          ?>
          <script type="text/javascript">

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
          </script>
        <SELECT class="form-control" id="banklist" name="bank_id" onChange="getclient(this.value);">

             <option value="0">SELECT BANK NAME</option>
             <?php while($row = mysqli_fetch_array($result)):;?>
            <option value="<?php echo $row[0]; ?>"><?php echo $row[1];?></option>
                <?php endwhile;?>
        </SELECT></td>
    <td>     <?php
        $query="SELECT * FROM client_data";
        $result=mysqli_query($conn,$query);
         ?>
           <select name="client_id" id="clientid"  onchange="take(this.value)" class="form-control" >

               <option value="0">SELECT CLIENT NAME</option>
                <?php while ($row=mysqli_fetch_array($result)):;?>
             <option value="<?php echo $row['client_id'];?>"  > <?php echo $row['client_name']; ?> </option>
           <?php endwhile;?>
           </select></td>
           <td><span class="glyphicon glyphicon-pencil"></span><button type="button"  id="edit" class="btn btn-primary">Edit</button></a></td>
           <td class="table-danger"><span class="glyphicon glyphicon-trash"></span><button type="button" id="delete" class="btn btn-danger">Delete</button></a></td>

  </tr>

  <tr>
    <td><span class="glyphicon glyphicon-pencil"></span>FinlUpdate</td>
    <td>    <?php
           $sql = "SELECT * FROM bank";
            $result = $conn->query($sql);
          ?>
          <script type="text/javascript">

        function fgetclient(val) {
            $.ajax({
            type: "POST",
            url: "Ajax_files/get_client_acc_bank_final.php",
            data:'bankid='+val,
            success: function(data){
              $("#fclientid").html(data);
            }
            });
          }
          </script>
        <SELECT class="form-control"  id="banklist" name="bank_id" onChange="fgetclient(this.value);">
             <option value="0">SELECT BANK NAME</option>
             <?php while($row = mysqli_fetch_array($result)):;?>
            <option value="<?php echo $row[0]; ?>"><?php echo $row[1];?></option>
                <?php endwhile;?>
        </SELECT></td>
        <td>
       <?php

        $query="SELECT client_data.*,office_data.* FROM client_data,office_data WHERE office_data.client_id=client_data.client_id";
        $result=mysqli_query($conn,$query);
         ?>
           <select name="client_id"   id="fclientid"  class="form-control" >

               <option value="0">SELECT CLIENT NAME</option>
                <?php while ($row=mysqli_fetch_array($result)):;?>
             <option value="<?php echo $row['client_id'];?>"  > <?php echo $row['client_name']; ?> </option>
           <?php endwhile;?>
           </select></td>
           <td><span class="glyphicon glyphicon-pencil"></span><button type="button"  id="fedit" class="btn btn-primary">Edit</button></a></td>
           <td class="table-danger"><span class="glyphicon glyphicon-trash"></span><button type="button" id="fdelete" class="btn btn-danger">Delete</button></a></td>

  </tr>





</section>
</table>


<script type="text/javascript">

$(function () {
  $("#edit").click(function () {
     var selectedText = $("#clientid").find("option:selected").text();
     var selectedValue = $("#clientid").val();
     document.location='editing_page.php?id='+selectedValue;
  });
});


$(function () {
  $("#delete").click(function () {
     var selectedText = $("#clientid").find("option:selected").text();
     var selectedValue = $("#clientid").val();
             document.location='delete_client_data.php?id='+selectedValue;
  });
});

$(function () {
  $("#fedit").click(function () {
     var selectedText = $("#fclientid").find("option:selected").text();
     var selectedValue = $("#fclientid").val();
             document.location='final_editting_page.php?id='+selectedValue;
  });
});

$(function () {
  $("#fdelete").click(function () {
     var selectedText = $("#fclientid").find("option:selected").text();
     var selectedValue = $("#fclientid").val();
             document.location='delete_office_data.php?id='+selectedValue;
  });
});





</script>

  </body>
  </html>
