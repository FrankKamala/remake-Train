<?php
include_once("../db/db_con.php");
$sql="SELECT * From localtraindb";
$resultset = mysqli_query($connection,$sql) or die ("database error:".mysqli_error($connection));




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="commuterDetail.css">
    <title>Local Train</title>
</head>
<body>
    <div class ="holder">
    <?php
  while ($localRecord=mysqli_fetch_assoc($resultset)){
  ?>
        <div class ="container">
        <div class="row-md">
    <div class="col" id="UIName"><P> <?php echo $localRecord['train_name'];?></P></div>
    <div class="col">
        <div class ="row">
        <P>From : <span class="from"><?php echo $localRecord['train_from'];?></span>          To:<span class="to"><?php echo $localRecord['train_to'];?></span> </P>


        <P>Departure : <span><?php echo date('g:i A',strtotime($localRecord['time_dept']));?></span>   Arrival:<span><?php echo date('g:i A',strtotime($localRecord['time_arr']));?></span> </P>

        <div class="col">

        <div class="row mbali"><button type="button" class="btn btn-outline-primary" onclick="location.href='book/commuter-form.php'" >Book Now</button></div>
        </div>
        </div>
        
        
    <div class="w-100"></div>
   
   
  </div> 


        
        </div>
        <?php } ?>
    </div>

    
</body>
</html>