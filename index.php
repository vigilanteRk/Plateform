<?php 
include("path.php");
include(ROOT_PATH . "/app/database/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    integrity="anonymous">

  <!-- Google Fonts   -->
  <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/css/style.css">
  <title>MomPlateform</title>
</head>

<body>
 
  <?php include(ROOT_PATH ."/app/includes/header.php"); ?>
  <?php include(ROOT_PATH ."/app/includes/messages.php"); ?>

<!-- Page WrapPer -->
  <div class="page-wrapper">

    <!-- Post Slider -->
      <div class="post-slider">
        <h1 class="slider-title">Trending Posts</h1>
        <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i>


        <div class="post-wrapper">

          <div class="post">
            <img src="assets/images/image_1.jpg" alt="" class="slider-image">
            <div class="post-info">
              <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
              <i class="far fa-user">Rajkumar Singh</i>
              &nbsp;
              <i class="far fa-calendar">May 16, 2020</i>
            </div>
          </div>

          <div class="post">
            <img src="assets/images/image_1.jpg" alt="" class="slider-image">
            <div class="post-info">
              <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
              <i class="far fa-user">Rajkumar Singh</i>
              &nbsp;
              <i class="far fa-calendar">May 16, 2020</i>
            </div>
          </div>

          <div class="post">
            <img src="assets/images/image_1.jpg" alt="" class="slider-image">
            <div class="post-info">
              <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
              <i class="far fa-user">Rajkumar Singh</i>
              &nbsp;
              <i class="far fa-calendar">May 16, 2020</i>
            </div>
          </div>

          <div class="post">
            <img src="assets/images/image_1.jpg" alt="" class="slider-image">
            <div class="post-info">
              <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
              <i class="far fa-user">Rajkumar Singh</i>
              &nbsp;
              <i class="far fa-calendar">May 16, 2020</i>
            </div>
          </div>
          
          <div class="post">
            <img src="assets/images/image_1.jpg" alt="" class="slider-image">
            <div class="post-info">
              <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
              <i class="far fa-user">Rajkumar Singh</i>
              &nbsp;
              <i class="far fa-calendar">May 16, 2020</i>
            </div>
          </div>

        </div>
        
      </div>
    <!-- // Post Slider -->

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content">
        <h1 class="recent-post-title">Recent Posts</h1>

        <div class="post clearfix">
          <img src="assets/images/image_3.jpg" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.php">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user">Rajkumar Singh</i>
            &nbsp;
            <i class="far calendar">May 16, 2020</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, molestiae!
            </p>
            <a href="single.php" class="btn read-more">Read More</a>
          </div>
        </div>

        <div class="post clearfix">
          <img src="assets/images/image_3.jpg" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.php">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user">Rajkumar Singh</i>
            &nbsp;
            <i class="far calendar">May 16, 2020</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, molestiae!
            </p>
            <a href="single.php" class="btn read-more">Read More</a>
          </div>
        </div>

        <div class="post clearfix">
          <img src="assets/images/image_3.jpg" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.php">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user">Rajkumar Singh</i>
            &nbsp;
            <i class="far calendar">May 16, 2020</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, molestiae!
            </p>
            <a href="single.php" class="btn read-more">Read More</a>
          </div>
        </div>

        <div class="post clearfix">
          <img src="assets/images/image_3.jpg" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.php">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user">Rajkumar Singh</i>
            &nbsp;
            <i class="far calendar">May 16, 2020</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, molestiae!
            </p>
            <a href="single.php" class="btn read-more">Read More</a>
          </div>
        </div>
        
      </div>
      <!-- // Main Content -->

      <div class="sidebar">
        
        <div class="section search">
          <h2 class="section-title">Search</h2>
            <form action="index.php" method="post">
              <input type="text" name="search-term" class="text-input" placeholder="Search...">
            </form>
        </div>

        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <li><a href="#">Poems</a></li>
            <li><a href="#">Quotes</a></li>
            <li><a href="#">Fiction</a></li>
            <li><a href="#">Biography</a></li>
            <li><a href="#">Motivation</a></li>
            <li><a href="#">Inspiration</a></li>
            <li><a href="#">Life Lessons</a></li>
          </ul>
        </div>

      </div>
    </div>
    <!-- //Content -->

  </div>
<!-- // Page Wrapper -->

<?php include(ROOT_PATH ."/app/includes/footer.php"); ?>

<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Custom Script -->
<script src="assets/js/script.js"></script>

</body>

</html>