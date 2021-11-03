<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "styles/css/styles.css" rel= "stylesheet" >
    <link href="styles/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Trains Booking</title>
</head>
<body >
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Train Booking </a>
  </div>
</nav>

<!-- Div with Landing Butts yeah Butts -->
<h1 class="visually-hidden">Train Booking</h1>

<section class ="container">

<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="styles/images/landing/trn.png" alt="" width="72" height="57">
    <!-- <i class="fa-solid fa-train-subway"></i> -->
    <h1 class="display-5 fw-bold">Train Booking</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4 text-dark">A one stop train Booking platform for all your ticket booking services. You can now reserve and book your Local and Inter-County Train tickets here.</p>
      
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        
        <button type="button" class="btn btn-primary btn-lg px-4" onclick="location.href='interCounty/interCheck.php'">InterCounty Train</button>
        <button type="button" class="btn btn-dark btn-lg px-4" onclick="location.href='local/localCheck.php'">Local Train</button>
      </div>
    </div>
  </div>
    </div>
  
</section>




    
</body>
</html>