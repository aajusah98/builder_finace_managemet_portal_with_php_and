<!DOCTYPE html>
<?php
include "db/logic.php";
?>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Martel">
  <title>AlkaBuilder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style>
  body {

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


#clintfld

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

#bnkfield
{
  border: 2px double  #0008ff !important;
  margin:0;
  xmin-width: 0;
  padding: 10px;
  position: relative;
  border-radius:4px;
  background-color:#f5f5f5;
  padding-left:10px!important;
}
#docfield
{
  border: 1px solid #0008ff !important;
  margin:0;
  xmin-width: 0;
  padding: 10px;
  margin: 20px;
  position: relative;
  border-radius:4px;
  background-color:#f5f5f5;
  padding-left:10px!important;
}



#cth{

  width:
}

  #clintTbl{
  width:100%;
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
<section>
  <div class="container-fluid">
          <div class="panel panel-primary">
       <div class="panel-heading"><p id="test" style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:25px; margin:5px; color:black ;">ALKA DESIGNERS AND BUILDERS</p></center></div>
       <div class="panel-body">
         <div id="bnkadddiv" hidden>
           <form method="post" class="form-inline">
             <input type="text" name="newbank" value="" placeholder="Enter Bank Name" class="form-control">
             <button type="submit" name="new_bnk_submit" class="btn btn-primary mb-2">Submit</button>
           </form>
         </div>
           <script>
           $(document).ready(function(){
           $("#test").click(function(){
             $("#bnkadddiv").toggle();
           });
           });
           </script>

         <!-- Left panel start form  -->
      <form  method="post"  id="cform">
     <fieldset id="bnkfield">
          <p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:#ff4700;">BANK DETAILS</p>
              <hr style="border-top: 1px  solid blue;  margin:0px;">
       <div class="table-responsive">
           <table class="table table-borderless">
                 <tr>
                   <th>
                     <label for="Party_Name" >Bank Name:</label>


                   </th>
                   <td>
                     <?php
                        $sql = "SELECT * FROM bank";
                         $result = $conn->query($sql);
                       ?>
                     <SELECT class="form-control" name="bankid">
                       <?php while($row = mysqli_fetch_array($result)):;?>
                          <!-- $_GET['bname']==$row[1] it will print selected  -->
                         <option value="<?php echo $row[0]; ?>"><?php echo $row[1];?></option>
                             <?php endwhile;?>
                     </SELECT>

                   </div>
                   </td>
                   <th>

                     <label for="Phone_No">Landline No:</label>
                   </th>
                   <td>
                      <input  type="tel"  class="form-control"  placeholder="Bank Phone Number" name="bank_tel_num" required >
                   </td>
                 </tr>
                 <tr>
                   <th>
                        <label for="Staff Name">Staff Name:</label>
                   </th>
                   <td>
                     <input type="text" name="bank_staff_name" placeholder="Enter Banker Name"  class="form-control" required>
                   </td>
                   <th>
                    <label for="Phone_No">Phone No:</label>
                   </th>
                   <td>
                     <input  type="tel"  pattern="^\d{10}$" class="form-control"  placeholder="Banker Phone No" name="bank_staff_phone" required>
                   </td>
                 </tr>
                 <tr>
                   <th>
                       <label for="Temp_Address">Bank Issue Date:</label>
                   </th>
                   <td  id="tddate" >
                     <input type="date" name="bank_issue_date" placeholder="Bank Issue Date" class="form-control" required>
                   </td>
                   <th>
                      <label for="Phone_No">Bank Ref Letter Number:</label>
                   </th>
                   <td  >
                     <input  type="text"   class="form-control"  placeholder="Bank Reference Letter Number" name="bank_ref_num" required>
                   </td>

                 </tr>

         </table>
         </div>
     </fieldset>

     <fieldset id="clintfld">
      <p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:#ff4700;">CLINT DETAILS</p>
           <hr style="border-top: 1px  solid blue; margin:0px;">
          <div class="table-responsive">
             <table class="table table-borderless" id="clintTbl">
               <tr>
                 <th>
                 <label for="Party_Name">Clint Name:</label>
                 </th>
                 <td>
                   <input type="text" name="clint_name" placeholder="Clint Name" class="form-control" required>
                 </td>
                 <th>
                     <label for="Party_Name">Owner Name:</label>
                 </th>
                 <td>
                     <input type="text" name="owner_name" placeholder="Owner Name" class="form-control" required>
                 </td>
               </tr>

               <tr>

               </tr>

               <tr>
                 <th>
                       <label for="Phone_No">Phone No:</label>
                 </th>
                 <td>
                       <input  type="tel"  pattern="^\d{10}$" class="form-control"  placeholder="Phone No" name="clint_phone"required >
                 </td>
                 <th>
                       <label for="Phone_No">LandLine No:</label>
                 </th>
                 <td>
                       <input  type="tel"  class="form-control"  placeholder="Landline Number" name="clint_tel_num"required >
                 </td>
               </tr>
               <tr>
                 <th>
                   <label for="Temp_Address">Temp Address:</label>
                 </th>
                 <td>
                   <input type="text" name="temp_address" placeholder="Temporary Address" class="form-control" required>
                 </td>
                 <th>
                   <label for="Temp_Address">Perm Address:</label>
                 </th>
                 <td>
                    <input type="text" name="perm_address" placeholder="Permanent Address" class="form-control" required>
                </td>
              </tr>
             </table>
             <fieldset id="docfield">
             <div class="form-group">
              <h5><p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:#ff4700;">DOCUMENTS ANALYSIS:</p><h5>
               <hr style="border-top: 1px dashed blue; margin:0px;">
                <br>
                <div class="table-responsive">
                 <table class="table table-borderless" id="clintTb2">
                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Citizenship</th>
                      <td> <input type="checkbox" class="cr" value="Citizenship" class="custom-control-input" name="doc[]" required></td>
                    </tr>
                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Lal Purja (Land-ownership certificat</th>
                      <td> <input type="checkbox" class="cr" value="Lal Purja (Land-ownership certificate)" class="custom-control-input" name="doc[]" required></td>
                    </tr>

                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Blueprint</th>
                      <td><input type="checkbox" value="Blueprint" class="cr" name="doc[]" required></td>
                    </tr>
                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Trace Map</th>
                      <td><input type="checkbox" value="Trace Map" class="cr" name="doc[]" required></td>
                    </tr>
                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Field Book</th>
                      <td><input type="checkbox" value="Field Book" class="cr" name="doc[]" required></td>
                    </tr>

                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Char Killa (Four boundary certificate)</th>
                      <td><input type="checkbox" value="Char Killa (Four boundary certificate)" class="cr" name="doc[]"></td>
                    </tr>


                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Road Clearance Certificate</th>
                      <td><input type="checkbox" value="Road Clearance Certificate" class="cr"  name="doc[]"></td>
                    </tr>


                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Cadastre Map</th>
                      <td><input type="checkbox" value="Cadastre Map" class="cr" name="doc[]"></td>
                    </tr>
                    <tr>

                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Rajinama Certificate</th>
                      <td><input type="checkbox" value="Rajinama" class="cr" name="doc[]"> </td>
                    </tr>

                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Ansh Bhanda Certificate</th>
                      <td><input type="checkbox" value="Ansh Bhanda Certificate" class="cr" name="doc[]"></td>
                    </tr>

                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Gharelu Certificate</th>
                      <td><input type="checkbox" value="Gharelu Certificate" class="cr" name="doc[]"></td>
                    </tr>
                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Transfer Certificate</th>
                      <td><input type="checkbox" value="Transfer Certificate" class="cr" name="doc[]"></td>
                    </tr>

                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Bachus Patra</th>
                      <td><input type="checkbox" value="Bachus Patra" class="cr" name="doc[]"></td>
                    </tr>

                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>PAN Certificate</th>
                      <td><input type="checkbox" value="PAN Certificate" class="cr" name="doc[]"></td>
                    </tr>
                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Registrar Certificate</th>
                      <td><input type="checkbox" value="PAN Certificate" class="cr" name="doc[]"></td>
                    </tr>
                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Building Map (VDC/Municipality)</th>
                      <td><input type="checkbox" value="Building Map(VDC/Municipality)" class="cr" name="doc[]"></td>
                    </tr>

                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Building Completion Certificate (VDC/Municipality)</th>
                      <td><input type="checkbox" value="Building Completion Certificate(VDC/Municipality)" class="cr" name="doc[]"></td>
                    </tr>

                 </table>

               </div>
             </div>
                </fieldset>
                <div class="table-responsive">

                 <table class="table table-borderless" id="clintTb2">
 <tr>
   <th><label>Advance Amount (From Clint)</label></th>
   <td ><input type="number" name="advance_amount" placeholder="Advance Amount Recived" class="form-control" required></td>
   <th><label>Advance Reciver Name:</label></th>
   <td ><input type="text" name="advance_reciver_name" placeholder="Enter Advance Reciver Name" class="form-control" required></td>
 </tr>

 <tr>
   <th><label>Form Filled By:</label></th>
   <td ><input type="text" name="form_filled_by" placeholder="Enter Your Name" class="form-control" required></td>
 </tr>
</table>
     </fieldset>
      <div class="col text-center">
             <button type="submit" name="clint_submit" style="background-color: #00f300;" class="btn btn-default"><p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:blue ;">Submit</p></button>

       </div>
           </form>
    </div>
    </div>
    </div>
</div>
</div>

</div>
</body>
</html>
