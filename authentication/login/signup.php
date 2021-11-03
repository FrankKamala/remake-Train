<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="auth.css">
    
    <title>Document</title>
</head>
<body>
<div class="container">
  <div class="login-form">
    <h2 class="title">Sign up</h2>
    <div class="input-field">
      <label for="email"></label>
      <input type="email" placeholder="Enter your email address" name="email" id="email">
    </div>
    <div class=container >
        <div class="row double-field ">
            <div class="col">
            <div class="input-field">
      <label for="firstname"></label>
      <input type="name" placeholder="Enter your FirstName" name="fName" id="fName" maxlength="30">
    </div>
            </div>
            <span class="spacing"></span>
            <div class="col">
            <div class="input-field">
      <label for="lastname"></label>
      <input type="name" placeholder="Enter your LastName" name="lName" id="lName" maxlength="30">
    </div>
            </div>
        </div>
    </div>
    <div class="input-field">
      <label for="pass"></label>
      <input type="password" placeholder="Password" name="pass" id="pass">
      
    </div>
    <div class="input-field">
      <label for="confirmPass"></label>
      <input type="password" placeholder="Confirm Password" name="confirmPass" id="confirmPass">
    </div>

    <p class="terms">By Continue, you agree our <strong>Condition of use</strong> and <strong>Privacy Notice</strong>.</p>


    <div class="new-user">
   
      <button class="btn create">Create account</button>

    </div>
  </div>
</div>
<script src="js/app.js"></script>
</body>
</html>