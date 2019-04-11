<?php
set_include_path ( './php-includes' . PATH_SEPARATOR . './php-functions' );

// Function
// require_once 'filter.fn.php';
// require_once 'product.fn.php';
// require_once 'admin.fn.php';

// Includes
// require_once 'get-variables.inc.php';
// require_once 'head.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

   <?php require_once 'header.inc.php'; ?>

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
    <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Archive
        <small>PenaltyReport.com</small>
      </h1>
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="images/archive.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <p></p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Page Heading/Breadcrumbs -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Videos</li>
      </ol>

<!-- Project One -->
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <iframe src="https://player.vimeo.com/video/328984702" width="640" height="360" frameborder="0" allowfullscreen></iframe>
          </a>
        </div>
        <div class="col-md-5">
          <h3>The Penalty Report for 4-8-19</h3>
          <p></p>
          <a class="btn btn-primary" href="https://player.vimeo.com/video/328984702">View
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
      <!-- /.row -->

 <hr>  



      <!-- /.row -->

      <hr>

      <!-- /.row -->

      <hr>

      <!-- Pagination
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="portfolio-1-col.php">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">.</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">.</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
      -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; MIBT Media Company 2018-2019</p>
      </div>
      <!-- /.container -->
    </footer>
  </body>

</html>
