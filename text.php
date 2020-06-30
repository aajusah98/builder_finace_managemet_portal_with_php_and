<!DOCTYPE html>
<?php
include "db/connect.php";
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
$q="SELECT * FROM client_data";
$res=mysqli_query($conn,$q);
 ?>
<select class="" name="tt" onchange="take(this.value)">
  <?php while ($row=mysqli_fetch_array($res)):; ?>
  <option value="<?php echo $row[0]; ?>"><?php echo $row['client_name']; ?></option>
<?php endwhile ?>
</select>

<script>
function take(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","dataexchange.php?q="+str,true);
  xmlhttp.send();
}
</script>


<div id="txtHint"><b>Person info will be listed here.</b></div>
  </body>
</html>
