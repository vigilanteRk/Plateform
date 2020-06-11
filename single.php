<?php include("path.php") ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');

if (isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

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
  <title><?php echo $post['title']; ?> | MomPlateform</title>
</head>

<body>
<!-- Facebook Page Plugin SDK -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" 
  src="https://connect.facebook.net/hi_IN/sdk.js#xfbml=1&version=v7.0">
</script>

<?php include(ROOT_PATH ."/app/includes/header.php"); ?>

<!-- Page WrapPer -->
  <div class="page-wrapper">

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content Wrapper-->
      <div class="main-content-wrapper">
        <div class="main-content single">
          <h1 class="post-title"><?php echo $post['title']; ?></h1>

          <div class="post-content">
          <?php echo html_entity_decode($post['body']); ?>
          </div>
        </div>
      </div>
      <!-- // Main Content -->

      <!-- Sidebar -->
      <div class="sidebar single">

        <div class="fb-page" data-href="https://www.facebook.com/momplateform/" data-tabs="message" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/momplateform/" class="fb-xfbml-parse-ignore">
            <a href="https://www.facebook.com/momplateform/">Momplateform
            </a>
          </blockquote>
        </div>

        <div class="section popular">
          <h2 class="section-title">Popular</h2>

          <?php foreach ($posts as $post): ?>
            <div class="post clearfix">
              <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
              <a href="" class="title">
                <h4><?php echo $p['title'] ?></h4>
              </a>
            </div>
          <?php endforeach; ?>

        </div>

        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>

           <?php foreach ($topics as $topic): ?>
            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' .$topic['name'] ?>"><?php echo $topic['name']; ?></a><li>
           <?php endforeach; ?>

          </ul>
        </div>
      </div>
      <!-- // Sidebar -->
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