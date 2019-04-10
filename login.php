<?php

// Defining CONFIG
define('_CONFIG_', true);
// Requiring config.php
require_once'inc/config.php';

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>
  </head>
  <body>

      <div class="uk-section uk-container">
        <h1>Login</h1>
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>

          <form class="uk-form-stacked">

    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Email</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="Enter Email">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="password" required="required" placeholder="Enter Password">
        </div>
    </div>

    <div class="uk-margin">
      <button class="uk-button uk-button-default" type="submit">Login</button>
    </div>



</form>
        </div>

      </div>

  </body>
</html>
