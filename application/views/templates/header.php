<html>
  
  <head>
    <title><?php if (isset($title)) { echo $title; } ?></title>
  </head>
  
  <body>
    <div class="header">
      <?php if (isset($applicationName)) { echo $applicationName; } ?>
      <hr>
      <!-- Logic should be written to determine if these links should be displayed depending on the user session status -->
      <a href="/login">Login</a> | <a href="#">Register</a>
    </div>
    
    <hr>
  