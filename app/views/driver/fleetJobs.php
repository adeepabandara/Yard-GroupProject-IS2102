<!DOCTYPE html>
<html>
   
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/driver.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/menue.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/public/css/style.css">
</head>
<div class="header">
    &nbsp&#60&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFleet Jobs
  </div>
  <br>
  
  <a href="<?php echo BASEURL ?>/fleetcenter/viewtask"><body class="card1"></a>
  <div class='card4'>
  <?php
  
  

while ($row = $data['fleet_jobs']->fetch_assoc()) {
    

    echo "<table>";
    echo "<br><br>";
    echo "<div class='card3'>";

echo "<div class='header-fields'>";


echo "<input class='disable-input-field-mobile' type='text' value=" . $row["fj_code"] . ">";
      
echo "<div class='header-sub-fields'>";

echo "<label>Created Date</label>";
echo "<input  class='header-input-field'   type='date' name='created_date'  value=" . $row["created_date"] . ">";
echo "</div>";

echo "<label>Dispatch Date</label>";
echo "<input  class='header-input-field'   type='date' name='dispatch_date'  value=" . $row["dispatch_date"] . ">";





}

echo "</div>";

?>




        
  

            </body>