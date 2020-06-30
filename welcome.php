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
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="bootstrap/jquery-3.5.1.min.js"></script>
  </script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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


#clientfld

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

  #clientTbl{
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
          <li class="active"><a href="welcome.php?bname=Nepal%20Investment%20Bank%20Ltd"><span class="glyphicon glyphicon-list-alt" > IDE</span></a></li>
          <li><a href="secondpage.php"><span class="glyphicon glyphicon-list-alt" > FDE</span></a></li>
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

<section>
  <div class="container-fluid">
          <div class="panel panel-primary">
       <div class="panel-heading"><p id="test" style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:25px; margin:5px; color:black ;">ALKA DESIGNERS AND BUILDERS (OFFICIAL ENTRY)</p></center></div>
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

         <!-- Top form start  -->
      <form  method="post"  id="cform">
     <fieldset id="bnkfield">
          <p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:#ff4700;">BANK DETAILS</p>
              <hr style="border-top: 1px  solid blue;  margin:0px;">
           <table class="table table-borderless table-responsive">
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

                         <option value="<?php echo $row[0]; ?>"><?php echo $row[1];?></option>
                             <?php endwhile;?>
                     </SELECT>

                   </td>
                   <th>

                     <label for="Phone_No">Branch:</label>
                   </th>
                   <td>
                      <input  type="text"  class="form-control"  placeholder="Enter Branch Name" name="bank_tel_num" required >
                   </td>
                 </tr>
                 <tr>
                   <th>
                        <label for="Staff Name">Staff Name:</label>
                   </th>
                   <td>
                     <input type="text" name="bank_staff_name" placeholder="Enter Banker Name"  class="form-control" >
                   </td>
                   <th>
                    <label for="Phone_No">Phone / Cell No. :</label>
                   </th>
                   <td>
                     <input  type="tel"  pattern="^\d{10}$" class="form-control"  placeholder="Banker Phone No" name="bank_staff_phone">
                   </td>
                 </tr>
                 <tr>
                   <th>
                       <label for="Temp_Address">Bank Issue Date:</label>
                   </th>
                   <td  id="tddate" >
                     <input type="date" name="bank_issue_date" placeholder="Bank Issue Date" class="form-control">
                   </td>
                   <th>
                      <label for="Phone_No">Bank Ref Letter Number:</label>
                   </th>
                   <td  >
                     <input  type="text"   class="form-control"  placeholder="Bank Reference Letter Number" name="bank_ref_num">
                   </td>

                 </tr>
         </table>
     </fieldset>
        <!-- top form end -->

<!-- client form start -->

     <fieldset id="clientfld">
      <p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:#ff4700;">CLINT DETAILS</p>
           <hr style="border-top: 1px  solid blue; margin:0px;">
             <table class="table table-borderless table-responsive" id="clientTbl">
               <tr>
                 <th>
                 <label for="Party_Name">Client Name:</label>
                 </th>
                 <td>
                   <input type="text" name="client_name" placeholder="Client Name" class="form-control" required>
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
                       <input  type="tel"  pattern="^\d{10}$" class="form-control"  placeholder="Phone No" name="client_phone" >
                 </td>
                 <th>
                       <label for="Phone_No">LandLine No:</label>
                 </th>
                 <td>
                       <input  type="tel"  class="form-control"  placeholder="Landline Number" name="client_tel_num">
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
             <!-- document section start -->
             <fieldset id="docfield">
             <div class="form-group">
              <h5><p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:#ff4700;">DOCUMENTS ANALYSIS:</p><h5>
               <hr style="border-top: 1px dashed blue; margin:0px;">
                <br>
                <div class="table-responsive">
                 <table class="table table-borderless" id="clientTb2">
                   <tr>
                     <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;" ></i>Form Registration Certificate</th>
                     <td> <input type="checkbox" class="cr" value="Form Registration Certificate" class="custom-control-input" name="doc[]"></td>
                   </tr>
                   <tr>
                     <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>PAN / VAT Certificate</th>
                     <td><input type="checkbox" value="PAN / VAT Certificate" class="cr" name="doc[]"></td>
                   </tr>
                   <tr>
                     <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Proprietor/Organizer Citizen Certificate </th>
                     <td><input type="checkbox" value="Proprietor/Organizer Citizen Certificate" class="cr" name="doc[]"></td>
                   </tr>
                   <tr>
                     <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Lal Purja (Land-ownership certificat)</th>
                     <td> <input type="checkbox" class="cr" value="Lal Purja (Land-ownership certificate)" class="custom-control-input" name="doc[]"></td>
                   </tr>
                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Owner Citizenship</th>
                      <td> <input type="checkbox" class="cr" value="Owner Citizenship" class="custom-control-input" name="doc[]"></td>
                    </tr>
                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Land Tax Receipt</th>
                      <td> <input type="checkbox" class="cr" value="Land Tax Receipt" class="custom-control-input" name="doc[]"></td>
                    </tr>

                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Char Killa (Four boundary certificate from VDC/Municipality)</th>
                      <td><input type="checkbox" value="Char Killa (Four boundary certificate from VDC/Municipality)" class="cr" name="doc[]"></td>
                    </tr>

                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;" ></i>Blueprint (Cadastre Map) </th>
                    </tr>
                    <tr>
                      <th><li style="list-style-type: none; margin-left:40px;"><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;" ></i>Ward Map</li></th>
                    <td><input type="checkbox" value="Ward Map" class="cr" name="doc[]"></td>
                    </tr>
                    <tr>
                      <th><li style="list-style-type: none; margin-left:40px;"><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;" ></i>File Map</li></th>
                    <td><input type="checkbox" value="File Map" class="cr" name="doc[]"></td>
                    </tr>
                    <tr>
                      <th><li style="list-style-type: none; margin-left:40px;"><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;" ></i>Trace Map</li></th>
                    <td><input type="checkbox" value="Trace Map" class="cr" name="doc[]"></td>
                    </tr>
                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Field Book Uttar</th>
                      <td><input type="checkbox" value="Field Book Uttar" class="cr" name="doc[]"></td>
                    </tr>
                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Plot Register Uttar</th>
                      <td><input type="checkbox" value="Plot Register Uttar" class="cr" name="doc[]"></td>
                    </tr>

                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;" ></i>Land Registration Certificate</th>
                    </tr>
                    <tr>
                      <th><li style="list-style-type: none; margin-left:40px;"><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Rajinama Certificate</li></th>
                      <td><input type="checkbox" value="Rajinama Certificate" class="cr" name="doc[]"> </td>
                    </tr>
                    <tr>
                      <th><li style="list-style-type: none; margin-left:40px;"><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Ansh Bhanda Certificate</li></th>
                      <td><input type="checkbox" value="Ansh Bhanda Certificate" class="cr" name="doc[]"></td>
                    </tr>
                    <tr>
                      <th><li style="list-style-type: none; margin-left:40px;"><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Bakas Patra</li></th>
                      <td><input type="checkbox" value="Bachus Patra" class="cr" name="doc[]"></td>
                    </tr>
                    <tr>
                      <th><li style="list-style-type: none; margin-left:40px;"><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Namshari Certificate</li></th>
                      <td><input type="checkbox" value="Namshari Certificate" class="cr" name="doc[]"></td>
                    </tr>
                    <tr>
                      <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Batto Paramanti Certificate</th>
                      <td><input type="checkbox" value="Building Completion Certificate(VDC/Municipality)" class="cr" name="doc[]"></td>
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

    <!-- document section end -->

    <fieldset id="docfield">
     <h5><p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:#ff4700;">Land Details:</p><h5>
      <hr style="border-top: 1px dashed blue; margin:0px;">

        <table  class="table table-borderless table-responsive">
          <tr>
            <th>Kitta</th>
            <td><input type="text"  class="form-control" value="0"  name="kitta[]" ></td>
            <td><input type="text"  class="form-control"  value="0" name="kitta[]"></td>
            <td><input type="text"  class="form-control"  value="0" name="kitta[]"></td>
            <td><input type="text"  class="form-control"  value="0" name="kitta[]" ></td>
            <td><input type="text"  class="form-control"  value="0" name="kitta[]" ></td>
            <td><input type="text"  class="form-control"  value="0" name="kitta[]" ></td>
            <td><input type="text"  class="form-control" value="0"  name="kitta[]" ></td>
            <td><input type="text"  class="form-control"  value="0" name="kitta[]"></td>
            <td><input type="text"  class="form-control"  value="0" name="kitta[]"></td>
            <td><input type="text"  class="form-control"  value="0" name="kitta[]" ></td>
            <td><input type="text"  class="form-control"  value="0" name="kitta[]" ></td>
            <td><input type="text"  class="form-control"  value="0" name="kitta[]" ></td>
          </tr>
          <tr>
            <th>Area(Sq.m)</th>
            <td><input type="text"  class="form-control" id="smb1" oninput="sqftConvert(this.value)"  onchange="sqftConvert(this.value)" value="0"  name="sqm[]" ></td>
            <td><input type="text"  class="form-control" id="smb2"  oninput="sqft1Convert(this.value)"  onchange="sqft1Convert(this.value)" value="0"  name="sqm[]"  ></td>
            <td><input type="text"  class="form-control" id="smb3"  oninput="sqft2Convert(this.value)"  onchange="sqft2Convert(this.value)"  value="0" name="sqm[]"></td>
            <td><input type="text"  class="form-control" id="smb4"  oninput="sqft3Convert(this.value)"  onchange="sqft3Convert(this.value)" value="0" name="sqm[]"></td>
            <td><input type="text" class="form-control" id="smb5"  oninput="sqft4Convert(this.value)"  onchange="sqft4Convert(this.value)" value="0" name="sqm[]"></td>
            <td><input type="text"  class="form-control" id="smb6"  oninput="sqft5Convert(this.value)"  onchange="sqft5Convert(this.value)" value="0" name="sqm[]"></td>
            <td><input type="text"  class="form-control" id="smb7" oninput="sqft6Convert(this.value)"  onchange="sqft6Convert(this.value)" value="0"  name="sqm[]" ></td>
            <td><input type="text"  class="form-control" id="smb8"  oninput="sqft7Convert(this.value)"  onchange="sqft7Convert(this.value)" value="0"  name="sqm[]"  ></td>
            <td><input type="text"  class="form-control" id="smb9"  oninput="sqft8Convert(this.value)"  onchange="sqft8Convert(this.value)"  value="0" name="sqm[]"></td>
            <td><input type="text"  class="form-control" id="smb10"  oninput="sqft9Convert(this.value)"  onchange="sqft9Convert(this.value)" value="0" name="sqm[]"></td>
            <td><input type="text" class="form-control" id="smb11"  oninput="sqft10Convert(this.value)"  onchange="sqft10Convert(this.value)" value="0" name="sqm[]"></td>
            <td><input type="text"  class="form-control" id="smb12"  oninput="sqft11Convert(this.value)"  onchange="sqft11Convert(this.value)" value="0" name="sqm[]"></td>

          </tr>
          <tr>
            <th>Area(Sq.ft)</th>
            <td><input type="text"  class="form-control" oninput="sqmtConvert(this.value)"  onchange="sqmtConvert(this.value)"   id="sfb1" value="0" name="sqf[]"> </td>
           <td><input type="text"  class="form-control" id="sfb2"  oninput="sqmt1Convert(this.value)"  onchange="sqmt1Convert(this.value)"     value="0" name="sqf[]" ></td>
           <td><input type="text"  class="form-control" id="sfb3"  oninput="sqmt2Convert(this.value)"  onchange="sqmt2Convert(this.value)"    value="0" name="sqf[]" ></td>
           <td><input type="text"  class="form-control" id="sfb4"  oninput="sqmt3Convert(this.value)"  onchange="sqmt3Convert(this.value)"    value="0" name="sqf[]"></td>
           <td><input type="text"  class="form-control" id="sfb5"  oninput="sqmt4Convert(this.value)"  onchange="sqmt4Convert(this.value)"    value="0" name="sqf[]"></td>
           <td><input type="text"  class="form-control" id="sfb6"  oninput="sqmt5Convert(this.value)"  onchange="sqmt5Convert(this.value)"    value="0" name="sqf[]"></td>
           <td><input type="text"  class="form-control" oninput="sqmt6Convert(this.value)"  onchange="sqmt6Convert(this.value)"   id="sfb7" value="0" name="sqf[]"> </td>
          <td><input type="text"  class="form-control" id="sfb8"  oninput="sqmt7Convert(this.value)"  onchange="sqmt7Convert(this.value)"     value="0" name="sqf[]" ></td>
          <td><input type="text"  class="form-control" id="sfb9"  oninput="sqmt8Convert(this.value)"  onchange="sqmt8Convert(this.value)"    value="0" name="sqf[]" ></td>
          <td><input type="text"  class="form-control" id="sfb10"  oninput="sqmt9Convert(this.value)"  onchange="sqmt9Convert(this.value)"    value="0" name="sqf[]"></td>
          <td><input type="text"  class="form-control" id="sfb11"  oninput="sqmt10Convert(this.value)"  onchange="sqmt10Convert(this.value)"    value="0" name="sqf[]"></td>
          <td><input type="text"  class="form-control" id="sfb12"  oninput="sqmt11Convert(this.value)"  onchange="sqmt11Convert(this.value)"    value="0" name="sqf[]"></td>
          </tr>

<script type="text/javascript">

function sqftConvert(val) {
  a=val*10.7639;
  document.getElementById('sfb1').value=a;
}

function sqft1Convert(val) {
  a=val*10.7639;
  document.getElementById('sfb2').value=a;
}


function sqft2Convert(val) {
  a=val*10.7639;
  document.getElementById('sfb3').value=a;
}

function sqft3Convert(val) {
  a=val*10.7639;
  document.getElementById('sfb4').value=a;
}
function sqft4Convert(val) {
  a=val*10.7639;
  document.getElementById('sfb5').value=a;
}
function sqft5Convert(val) {
  a=val*10.7639;
  document.getElementById('sfb6').value=a;
}

function sqft6Convert(val) {
  a=val*10.7639;
  document.getElementById('sfb7').value=a;
}

function sqft7Convert(val) {
  a=val*10.7639;
  document.getElementById('sfb8').value=a;
}


function sqft8Convert(val) {
  a=val*10.7639;
  document.getElementById('sfb9').value=a;
}

function sqft9Convert(val) {
  a=val*10.7639;
  document.getElementById('sfb10').value=a;
}
function sqft10Convert(val) {
  a=val*10.7639;
  document.getElementById('sfb11').value=a;
}
function sqft11Convert(val) {
  a=val*10.7639;
  document.getElementById('sfb12').value=a;
}



function sqmtConvert(val) {
  a=val*0.092903;
  document.getElementById('smb1').value=a;

}

function sqmt1Convert(val) {
  a=val*0.092903;
  document.getElementById('smb2').value=a;

}


function sqmt2Convert(val) {
  a=val*0.092903;
  document.getElementById('smb3').value=a;

}

function sqmt3Convert(val) {
  a=val*0.092903;
  document.getElementById('smb4').value=a;

}
function sqmt4Convert(val) {
  a=val*0.092903;
  document.getElementById('smb5').value=a;

}
function sqmt5Convert(val) {
  a=val*0.092903;
  document.getElementById('smb6').value=a;

}


function sqmt6Convert(val) {
  a=val*0.092903;
  document.getElementById('smb7').value=a;

}

function sqmt7Convert(val) {
  a=val*0.092903;
  document.getElementById('smb8').value=a;

}


function sqmt8Convert(val) {
  a=val*0.092903;
  document.getElementById('smb9').value=a;

}

function sqmt9Convert(val) {
  a=val*0.092903;
  document.getElementById('smb10').value=a;

}
function sqmt10Convert(val) {
  a=val*0.092903;
  document.getElementById('smb11').value=a;

}
function sqmt11Convert(val) {
  a=val*0.092903;
  document.getElementById('smb12').value=a;

}




</script>


        </table>


   </fieldset>


   <fieldset id="docfield">
    <h5><p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:#ff4700;">Advance Details:</p><h5>
     <hr style="border-top: 1px dashed blue; margin:0px;">

     <table  class="table table-borderless table-responsive">

        <tr>
          <th>Staff Name</th>
          <td><input type="text"  class="form-control" placeholder="Enter Name Of Spender"  name="name_per_Ee"></td>
          <th>Personal Expenditure</th>
          <td><input type="number" id="per_exp" class="form-control" placeholder="Enter Amount Spent"   name="amt_per_Ec"></td>
        </tr>
        <tr>

          <tr>
            <th>Staff Name</th>
            <td><input type="text"  class="form-control" placeholder="Enter Name Of Spender"   name="name_off_Ee"></td>
            <th>Office Expenditure</th>
            <td><input type="number"  id="off_Ee" class="form-control" placeholder="Enter Amount Spent"   name="amt_off_Ee"></td>
          </tr>
          <tr>
            <th>Advance Collection</th>
            <td><input type="number" id="adv_col"  oninput="remainingamount(this.value)" onchange="remainingamount(this.value)"   class="form-control" value="0"  name="totl_adv_col" ></td>

            <th>Remaining Advance Collection</th>
            <td><input type="number" id="rem_amt" class="form-control" value="0"  name="rem_adv_amt" ></td>
           </tr>
      </table>


      <script type="text/javascript">
        function remainingamount(val) {
        var off_Ee= parseFloat(document.getElementById('off_Ee').value);
        var per_Ee=parseFloat(document.getElementById('per_exp').value);
        var rem= parseFloat(val)-(off_Ee+per_Ee);
        document.getElementById('rem_amt').value=rem;
        }
      </script>
    </fieldset>



                <div class="table-responsive">

                 <table class="table table-borderless" id="clientTb2">
 <tr>
   <th><label>Advance Amount (From Client)</label></th>
   <td ><input type="number" value="0" name="advance_amount" placeholder="Advance Amount Recived" class="form-control"></td>
   <th><label>Advance Reciver Name:</label></th>
   <td ><input type="text" name="advance_reciver_name" placeholder="Enter Advance Reciver Name" class="form-control"></td>
 </tr>
 <tr>
   <th><label>Form Filled By:</label></th>
   <td ><input type="text" name="form_filled_by" placeholder="Enter Your Name" class="form-control" required></td>
 </tr>
</table>
     </fieldset>
      <div class="col text-center">
             <button type="submit" name="client_submit" style="background-color: #00f300;" class="btn btn-default"><p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:blue ;">Submit</p></button>
       </div>
           </form>
    </div>

<!-- client form end -->


  </div> <!--./panel body-->

    </div> <!--./panel panel-primary-->

</div> <!--./container flued-->

</section>


</body>
</html>
