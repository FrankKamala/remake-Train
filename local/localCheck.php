<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="localBook.css">
    <!-- <link rel="stylesheet" href="../interCounty/inter.css"> -->

   
    <title>Check Availability </title>
</head>
<body>
<?php
include('../header/header.php');

?>


<div>
  <form action="/localbook.php">
    <label for="from">From</label>
    <select id="stationFrom" name="from">
    <option value="SelectFrom">SelectFrom</option>
      <option value="Nairobi">Nairobi</option>
      <option value="Makadara">Makadara</option>
      <option value="Donholm">Donholm</option>
      <option value="Pipeline">Pipeline</option>
      
      <option value="Embakasi-Village">Embakasi</option>
     
    </select>

  

    <label for="destination">To</label>
    <select id="destination" name="destination">
    <option value="select">Choose Destination</option>
   
    <option value="SelectFrom">SelectFrom</option>
      <option value="Nairobi">Nairobi</option>
      <option value="Makadara">Makadara</option>
      <option value="Donholm">Donholm</option>
      <option value="Pipeline">Pipeline</option>
      
      <option value="Embakasi-Village">Embakasi</option>
     
    </select>
  
   



    <label for="start">Date:</label>

    <input type="date" id="travelDate" name="trip-Date"
       value="yyyy-mm-dd"
       min="2021-09-01" max="2022-09-31">



       <div class="d-grid ">

  <button class="btn btn-primary" type="button"   onclick="location.href='localDetail.php'">Book Now</button>
</div>
  </form>
</div>
<!-- <button type="button" class="btn btn-outline-primary" onclick="location.href='book/commuter-form.php'" >Book Now</button> -->
    
</body>
</html>