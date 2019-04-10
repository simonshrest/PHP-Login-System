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
     <?php echo "Hello Fellas!";
     ?>

     <p>
       <a href="login.php">Login</a>
       <a href="register.php">Register</a>

     </p>

      </div>

  </body>
</html>
