<?php
set_include_path ( './php-includes' . PATH_SEPARATOR . './php-functions' );

// Function
// require_once 'filter.fn.php';
// require_once 'product.fn.php';
// require_once 'admin.fn.php';

// Includes
require_once 'connect.inc.php';
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
    
    <!-- Page Content -->
    <div class="container">
    <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Videos
        <small>MIBT Online Videos</small>
      </h1>
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="images/videos.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <p>MIBT Online goes beyond just live videos, as we have an extensive library of videos done in the past, (with many more to come). Browse our library below, all videos are free.</p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Page Heading/Breadcrumbs -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Videos</li>
      </ol>

      <!-- Project Two -->
      <div class="row">
        <div class="col-md-7">
          <a href="#">
           <iframe src="https://player.vimeo.com/video/298302531" width="640" height="360" frameborder="0" allowfullscreen></iframe>
          </a>
        </div>
        <div class="col-md-5">
          <h3>Full Meeting from 10-31-18</h3>
          <p></p>
          <a class="btn btn-primary" href="https://player.vimeo.com/video/298302531">View
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
      <!-- /.row -->

      <hr>


 <!-- Project One -->
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <iframe width="640" height="360" src="https://www.youtube.com/embed/B2m9VfrT-Ow" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </a>
        </div>
        <div class="col-md-5">
          <h3>MIBTonline.com Play of the Week for This Week</h3>
          <p></p>
          <a class="btn btn-primary" href="https://www.youtube.com/embed/B2m9VfrT-Ow">View
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

<!-- Project One -->
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <iframe width="640" height="360" src="https://www.youtube.com/embed/ZbxdywOEXz0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </a>
        </div>
        <div class="col-md-5">
          <h3>MIBTonline.com Play of the Week for Last Week</h3>
          <p></p>
          <a class="btn btn-primary" href="https://www.youtube.com/embed/ZbxdywOEXz0">View
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Project Two -->
      <div class="row">
        <div class="col-md-7">
          <a href="#">
           <iframe src="https://player.vimeo.com/video/282786084" width="640" height="360" frameborder="0" allowfullscreen></iframe>
          </a>
        </div>
        <div class="col-md-5">
          <h3>Sample Association Meeting</h3>
          <p></p>
          <a class="btn btn-primary" href="https://player.vimeo.com/video/282786084">View
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
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
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
