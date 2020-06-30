<?php
include 'db/connect.php';?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
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
  </head>

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



  <body>

    <?php
    if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $q1="SELECT * FROM client_data where client_data.client_id='$id'";
    $res=mysqli_query($conn,$q1);
    $a=mysqli_fetch_array($res);
    }
    ?>
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
             <!-- Top form start  -->
          <form  method="post"  id="cform" action="db/update_logic.php?id=<?php echo $id; ?>">
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

                             <option value="<?php echo $row[0]; ?>"  <?php if ($row[0]==$a['bank_id']){
                               echo "selected";
                             } ?> ><?php echo $row[1];?></option>
                                 <?php endwhile;?>
                         </SELECT>
                       </div>
                       </td>
                       <th>
                         <label for="Phone_No">Branch:</label>
                       </th>
                       <td>
                          <input  type="text"  class="form-control" value="<?php echo $a['bank_branch']; ?>" placeholder="Enter Branch Name" name="bank_branch" required >
                       </td>
                     </tr>
                     <tr>
                       <th>
                            <label for="Staff Name">Staff Name:</label>
                       </th>
                       <td>
                         <input type="text" name="bank_staff_name" value="<?php echo $a['bank_staff_name']; ?>" placeholder="Enter Banker Name"  class="form-control" >
                       </td>
                       <th>
                        <label for="Phone_No">Phone / Cell No. :</label>
                       </th>
                       <td>
                         <input  type="tel"  pattern="^\d{10}$" class="form-control" value="<?php echo $a['bank_staff_phone']; ?>" placeholder="Banker Phone No" name="bank_staff_phone">
                       </td>
                     </tr>
                     <tr>
                       <th>
                           <label for="Temp_Address">Bank Issue Date:</label>
                       </th>
                       <td  id="tddate" >
                         <input type="date" name="bank_issue_date" value="<?php echo $a['bank_issue_date']; ?>" placeholder="Bank Issue Date" class="form-control">
                       </td>
                       <th>
                          <label for="Phone_No">Bank Ref Letter Number:</label>
                       </th>
                       <td  >
                         <input  type="text"   class="form-control" value="<?php echo $a['bank_ref_num']; ?>"  placeholder="Bank Reference Letter Number" name="bank_ref_num">
                       </td>

                     </tr>

             </table>
             </div>
         </fieldset>
            <!-- top form end -->

    <!-- client form start -->

         <fieldset id="clientfld">
          <p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:#ff4700;">CLINT DETAILS</p>
               <hr style="border-top: 1px  solid blue; margin:0px;">
              <div class="table-responsive">
                 <table class="table table-borderless" id="clientTbl">
                   <tr>
                     <th>
                     <label for="Party_Name">Client Name:</label>
                     </th>
                     <td>
                       <input type="text" name="client_name" value="<?php echo $a['client_name']; ?>" placeholder="Client Name" class="form-control" required>
                     </td>
                     <th>
                         <label for="Party_Name">Owner Name:</label>
                     </th>
                     <td>
                         <input type="text" name="owner_name" value="<?php echo $a['owner_name']; ?>" placeholder="Owner Name" class="form-control" required>
                     </td>
                   </tr>

                   <tr>

                   </tr>

                   <tr>
                     <th>
                           <label for="Phone_No">Phone No:</label>
                     </th>
                     <td>
                           <input  type="tel"  pattern="^\d{10}$" class="form-control" value="<?php echo $a['client_phone']; ?>" placeholder="Phone No" name="client_phone" >
                     </td>
                     <th>
                           <label for="Phone_No">LandLine No:</label>
                     </th>
                     <td>
                           <input  type="tel"  class="form-control"  placeholder="Landline Number" value="<?php echo $a['client_tel_num']; ?>" name="client_tel_num">
                     </td>
                   </tr>
                   <tr>
                     <th>
                       <label for="Temp_Address">Temp Address:</label>
                     </th>
                     <td>
                       <input type="text" name="temp_address" value="<?php echo $a['temp_address']; ?>" placeholder="Temporary Address" class="form-control" required>
                     </td>
                     <th>
                       <label for="Temp_Address">Perm Address:</label>
                     </th>
                     <td>
                        <input type="text" name="perm_address" value="<?php echo $a['perm_address']; ?>" placeholder="Permanent Address" class="form-control" required>
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
                         <td> <input type="checkbox"  class="cr"

                           <?php
                           $docs=explode(' , ', $a['docs']);
                             $c=count($docs);
                             $i=0;
                             while ($i < $c) {
                               if ($docs[$i]=='Form Registration Certificate'){
                                 echo "Checked";
                                 break;

                               }
                               else {
                                $i++;
                               }
                             }
                         ?>
                            value="Form Registration Certificate" class="custom-control-input" name="doc[]"></td>
                       </tr>
                       <tr>
                         <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>PAN / VAT Certificate</th>
                         <td><input type="checkbox"
                           <?php
                           $docs=explode(' , ', $a['docs']);
                             $c=count($docs);
                             $i=0;
                             while ($i < $c) {
                               if ($docs[$i]=='PAN / VAT Certificate'){
                                 echo "Checked";
                                 break;

                               }
                               else {
                                $i++;
                               }
                             }
                         ?>
                           value="PAN / VAT Certificate" class="cr" name="doc[]"></td>
                       </tr>
                       <tr>
                         <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Proprietor/Organizer Citizen Certificate </th>
                         <td><input type="checkbox"
                           <?php
                           $docs=explode(' , ', $a['docs']);
                             $c=count($docs);
                             $i=0;
                             while ($i < $c) {
                               if ($docs[$i]=='Proprietor/Organizer Citizen Certificate'){
                                 echo "Checked";
                                 break;

                               }
                               else {
                                $i++;
                               }
                             }
                         ?>
                            value="Proprietor/Organizer Citizen Certificate" class="cr" name="doc[]"></td>
                       </tr>
                       <tr>
                         <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Lal Purja (Land-ownership certificat)</th>
                         <td> <input type="checkbox" class="cr"
                           <?php
                           $docs=explode(' , ', $a['docs']);
                             $c=count($docs);
                             $i=0;
                             while ($i < $c) {
                               if ($docs[$i]=='Lal Purja (Land-ownership certificate)'){
                                 echo "Checked";
                                 break;

                               }
                               else {
                                $i++;
                               }
                             }
                         ?>
                           value="Lal Purja (Land-ownership certificate)" class="custom-control-input" name="doc[]"></td>
                       </tr>
                        <tr>
                          <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Owner Citizenship</th>
                          <td> <input type="checkbox"
                            <?php
                            $docs=explode(' , ', $a['docs']);
                              $c=count($docs);
                              $i=0;
                              while ($i < $c) {
                                if ($docs[$i]=='Owner Citizenship'){
                                  echo "Checked";
                                  break;

                                }
                                else {
                                 $i++;
                                }
                              }
                          ?>
                          class="cr" value="Owner Citizenship" class="custom-control-input" name="doc[]"></td>
                        </tr>
                        <tr>
                          <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Land Tax Receipt</th>
                          <td> <input type="checkbox" class="cr"
                            <?php
                            $docs=explode(' , ', $a['docs']);
                              $c=count($docs);
                              $i=0;
                              while ($i < $c) {
                                if ($docs[$i]=='Land Tax Receipt'){
                                  echo "Checked";
                                  break;

                                }
                                else {
                                 $i++;
                                }
                              }
                          ?>
                            value="Land Tax Receipt" class="custom-control-input" name="doc[]"></td>
                        </tr>
                        <tr>
                          <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Char Killa (Four boundary certificate from VDC/Municipality)</th>
                          <td><input type="checkbox"

                            <?php
                            $docs=explode(' , ', $a['docs']);
                              $c=count($docs);
                              $i=0;
                              while ($i < $c) {
                                if ($docs[$i]=='Char Killa (Four boundary certificate from VDC/Municipality)'){
                                  echo "Checked";
                                  break;

                                }
                                else {
                                 $i++;
                                }
                              }
                          ?>

                            value="Char Killa (Four boundary certificate from VDC/Municipality)" class="cr" name="doc[]"></td>
                        </tr>

                        <tr>
                          <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;" ></i>Blueprint (Cadastre Map) </th>
                        </tr>
                        <tr>
                          <th><li style="list-style-type: none; margin-left:40px;"><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;" ></i>Ward Map</li></th>
                        <td><input type="checkbox" value="Ward Map"

                          <?php
                          $docs=explode(' , ', $a['docs']);
                            $c=count($docs);
                            $i=0;
                            while ($i < $c) {
                              if ($docs[$i]=='Ward Map'){
                                echo "Checked";
                                break;

                              }
                              else {
                               $i++;
                              }
                            }
                        ?>
                           class="cr" name="doc[]"></td>
                        </tr>
                        <tr>
                          <th><li style="list-style-type: none; margin-left:40px;"><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;" ></i>File Map</li></th>
                        <td><input type="checkbox" value="File Map"

                          <?php
                          $docs=explode(' , ', $a['docs']);
                            $c=count($docs);
                            $i=0;
                            while ($i < $c) {
                              if ($docs[$i]=='File Map'){
                                echo "Checked";
                                break;

                              }
                              else {
                               $i++;
                              }
                            }
                        ?>

                           class="cr" name="doc[]"></td>
                        </tr>
                        <tr>
                          <th><li style="list-style-type: none; margin-left:40px;"><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;" ></i>Trace Map</li></th>
                        <td><input type="checkbox" value="Trace Map"
                          <?php
                          $docs=explode(' , ', $a['docs']);
                            $c=count($docs);
                            $i=0;
                            while ($i < $c) {
                              if ($docs[$i]=='Trace Map'){
                                echo "Checked";
                                break;

                              }
                              else {
                               $i++;
                              }
                            }
                        ?>
                          class="cr" name="doc[]"></td>
                        </tr>
                        <tr>
                          <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Field Book Uttar</th>
                          <td><input type="checkbox"
                            <?php
                            $docs=explode(' , ', $a['docs']);
                              $c=count($docs);
                              $i=0;
                              while ($i < $c) {
                                if ($docs[$i]=='Field Book Uttar'){
                                  echo "Checked";
                                  break;

                                }
                                else {
                                 $i++;
                                }
                              }
                          ?>
                             value="Field Book Uttar" class="cr" name="doc[]"></td>

                        </tr>
                        <tr>
                          <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Plot Register Uttar</th>
                          <td><input type="checkbox"
                            <?php
                            $docs=explode(' , ', $a['docs']);
                              $c=count($docs);
                              $i=0;
                              while ($i < $c) {
                                if ($docs[$i]=='Plot Register Uttar'){
                                  echo "Checked";
                                  break;

                                }
                                else {
                                 $i++;
                                }
                              }
                          ?>

                             value="Plot Register Uttar" class="cr" name="doc[]"></td>
                        </tr>

                        <tr>
                          <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;" ></i>Land Registration Certificate</th>
                        </tr>
                        <tr>
                          <th><li style="list-style-type: none; margin-left:40px;"><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Rajinama Certificate</li></th>
                          <td><input type="checkbox" value="Rajinama Certificate"

                            <?php
                            $docs=explode(' , ', $a['docs']);
                              $c=count($docs);
                              $i=0;
                              while ($i < $c) {
                                if ($docs[$i]=='Rajinama Certificate'){
                                  echo "Checked";
                                  break;

                                }
                                else {
                                 $i++;
                                }
                              }
                          ?>
                            class="cr" name="doc[]"> </td>
                        </tr>
                        <tr>
                          <th><li style="list-style-type: none; margin-left:40px;"><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Ansh Bhanda Certificate</li></th>
                          <td><input type="checkbox"

                            <?php
                            $docs=explode(' , ', $a['docs']);
                              $c=count($docs);
                              $i=0;
                              while ($i < $c) {
                                if ($docs[$i]=='Ansh Bhanda Certificate'){
                                  echo "Checked";
                                  break;

                                }
                                else {
                                 $i++;
                                }
                              }
                          ?>

                             value="Ansh Bhanda Certificate" class="cr" name="doc[]"></td>
                        </tr>
                        <tr>
                          <th><li style="list-style-type: none; margin-left:40px;"><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Bakas Patra</li></th>
                          <td><input type="checkbox"

                            <?php
                            $docs=explode(' , ', $a['docs']);
                              $c=count($docs);
                              $i=0;
                              while ($i < $c) {
                                if ($docs[$i]=='Bachus Patra'){
                                  echo "Checked";
                                  break;

                                }
                                else {
                                 $i++;
                                }
                              }
                          ?>



                            value="Bachus Patra" class="cr" name="doc[]"></td>
                        </tr>
                        <tr>
                          <th><li style="list-style-type: none; margin-left:40px;"><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Namshari Certificate</li></th>
                          <td><input type="checkbox"

                            <?php
                            $docs=explode(' , ', $a['docs']);
                              $c=count($docs);
                              $i=0;
                              while ($i < $c) {
                                if ($docs[$i]=='Namshari Certificate'){
                                  echo "Checked";
                                  break;

                                }
                                else {
                                 $i++;
                                }
                              }
                          ?>




                             value="Namshari Certificate" class="cr" name="doc[]"></td>
                        </tr>
                        <tr>
                          <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Batto Paramanti Certificate</th>
                          <td><input type="checkbox"
                            <?php
                            $docs=explode(' , ', $a['docs']);
                              $c=count($docs);
                              $i=0;
                              while ($i < $c) {
                                if ($docs[$i]=='Batto Paramanti Certificate'){
                                  echo "Checked";
                                  break;

                                }
                                else {
                                 $i++;
                                }
                              }
                          ?>
                             value="Batto Paramanti Certificate" class="cr" name="doc[]"></td>
                        </tr>
                        <tr>
                          <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Building Map (VDC/Municipality)</th>
                          <td><input type="checkbox"
                            <?php
                            $docs=explode(' , ', $a['docs']);
                              $c=count($docs);
                              $i=0;
                              while ($i < $c) {
                                if ($docs[$i]=='Building Map(VDC/Municipality)'){
                                  echo "Checked";
                                  break;

                                }
                                else {
                                 $i++;
                                }
                              }
                          ?>
                            value="Building Map(VDC/Municipality)" class="cr" name="doc[]"></td>
                        </tr>

                        <tr>
                          <th><i class="fas fa-angle-double-right" style="margin-right:20px; color:red;"></i>Building Completion Certificate (VDC/Municipality)</th>
                          <td><input type="checkbox"
                            <?php
                            $docs=explode(' , ', $a['docs']);
                              $c=count($docs);
                              $i=0;
                              while ($i < $c) {
                                if ($docs[$i]=='Building Completion Certificate(VDC/Municipality)'){
                                  echo "Checked";
                                  break;

                                }
                                else {
                                 $i++;
                                }
                              }
                          ?>
                            value="Building Completion Certificate(VDC/Municipality)" class="cr" name="doc[]"></td>
                        </tr>
                     </table>
                   </div>
                 </div>
                    </fieldset>

        <!-- document section end -->

                    <div class="table-responsive">

                     <table class="table table-borderless" id="clientTb2">
     <tr>
       <th><label>Advance Amount (From Client)</label></th>
       <td ><input type="number" value="<?php echo $a['advance_amount']; ?>" name="advance_amount" placeholder="Advance Amount Recived" class="form-control"></td>
       <th><label>Advance Reciver Name:</label></th>
       <td ><input type="text" name="advance_reciver_name" value="<?php echo $a['advance_reciver_name']; ?>" placeholder="Enter Advance Reciver Name" class="form-control"></td>
     </tr>
     <tr>
       <th><label>Form Filled By:</label></th>
       <td ><input type="text" name="form_filled_by" placeholder="Enter Your Name" value="<?php echo $a['form_filled_by']; ?>" class="form-control" required></td>
     </tr>
    </table>
         </fieldset>
          <div class="col text-center">
                 <button type="submit" name="client_submit" style="background-color: #00f300;" class="btn btn-default"><p style="font-family: 'Martel'; text-align: center; font-weight: bold; font-size:20px; margin:5px; color:blue ;">Submit</p></button>
           </div>
               </form>
        </div>

    <!-- client form end -->

        </div>
        </div>
    </div>
    </div>

    </div>




  </body>
</html>
