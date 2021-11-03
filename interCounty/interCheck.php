<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inter.css">
    <title>Check Availability </title>
</head>
<body>
<?php
include('../header/header.php');

?>


       <div>
  <form action="/action_page.php">
    <label for="from">From</label>
    <select id="stationFrom" name="from">
    <option value="SelectFrom">SelectFrom</option>
      <option value="Nairobi">Nairobi</option>
      <option value="Emali">Emali</option>
      <option value="Kibwezi">Kibwezi</option>
      <option value="Mtito-Andei">Mtito-Andei</option>
      <option value="Voi">Voi</option>
      <option value="Miasenyi">Miasenyi</option>
      <option value="Mariakani">Mariakani</option>
      <option value="Mombasa">Mombasa</option>
    </select>

    

    <label for="country">To</label>
    <select id="country" name="country">
    <option value="select">Choose Destination</option>
    <option value="Nairobi">Nairobi</option>
      <option value="Emali">Emali</option>
      <option value="Kibwezi">Kibwezi</option>
      <option value="Mtito-Andei">Mtito-Andei</option>
      <option value="Voi">Voi</option>
      <option value="Miasenyi">Miasenyi</option>
      <option value="Mariakani">Mariakani</option>
      <option value="Mombasa">Mombasa</option>
    </select>
  
   



    <label for="start">Date:</label>

<input type="date" id="travelDate" name="trip-Date"
       value="yyyy-mm-dd"
       min="2021-09-01" max="2022-09-31">



       <input type="submit" value="Book Train">
  </form>
</div>
    
</body>
</html>