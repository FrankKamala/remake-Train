<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="auth.css">

    <title>Document</title>
</head>
<body>
<div class="container">
  <div class="login-form">
    <h2 class="title">Sign in</h2>
    <div class="input-field">
      <label for="email"></label>
      <input type="email" placeholder="Enter your email address" name="email" id="email">
    </div>
    <div class="input-field">
     
      <label for="pass"></label>
   
      <input type="password" placeholder="Enter Password" name="loginPass" id="loginPass" >
      <span class= form><i class="bi bi-eye-slash" id="togglePassword"></i></span>

      
    </div>

   
      
    <div class="input">
      <div>
        <input type="checkbox" name="" id="remember">
        <label for="remember">Keep me signed in? </label>
      </div>
      <a href="#">forgot your password?</a>
    </div>

    <p class="terms">By Continue, you agree our <strong>Condition of use</strong> and <strong>Privacy Notice</strong>.</p>

    <button class="btn login">Sign in</button>

    <div class="new-user">
      <p>New on our platform?</p>
      <button class="btn create">Create account</button>

    </div>
  </div>
</div>
<script src="../js/app.js"></script>
</body>
</html>