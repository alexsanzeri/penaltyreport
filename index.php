<?php
set_include_path ( './php-includes' . PATH_SEPARATOR . './php-functions' );

// Function
// require_once 'filter.fn.php';
// require_once 'product.fn.php';
// require_once 'admin.fn.php';

// Includes
require_once 'index.inc.php';
// require_once 'head.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

  <?php require_once 'header.inc.php'; ?>
      <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <?php require_once 'menu.inc.php'; ?>
        </div>
    </nav>
  <p>_</p>

    
    <!-- Page Content -->
    <div class="container">
    </div>
    <div class="container">

      <h1 class="my-4">The Penalty Report for 4-8-19</h1>

      <!-- Marketing Icons Section -->
      <div class="container">
      
<iframe src="https://player.vimeo.com/video/328984702" width="1300" height="700" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      
      </div>
      <!-- /.row -->

      
    </div>
    <!-- /.container -->

    <?php require_once 'footer.inc.php'; ?>

  </body>

</html>
