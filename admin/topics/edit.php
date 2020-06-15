<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/topics.php'); 
//adminOnly();
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
  <link rel="stylesheet" href="../../assets/css/style.css">

  <!-- Admin Styling -->
  <link rel="stylesheet" href="../../assets/css/admin.css">

  <title>Admin Section - Edit Topic</title>
</head>

<body>

<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

<!-- Admin Page WrapPer -->
  <div class="admin-wrapper">

    <!-- Left Sidebar -->
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>    
    <!-- // Left Sidebar -->

    <!-- Admin content -->
    <div class="admin-content">
      <div class="button-group">
        <a href="create.php" class="btn btn-big">Add Topics</a>
        <a href="index.php" class="btn btn-big">Manage Topics</a>
      </div>

      <div class="content">
        <h2 class="page-title">Edit Topic</h2>
        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
        
        <form action="edit.php" method="post">
          <input type="hidden" name="id"  value="<?php echo $id; ?>">  
          <div>
            <label>Name</label>
            <input type="text" name="name"  value="<?php echo $name; ?>" class="text-input">
          </div>
          <div>
            <label>Description</label>
            <textarea name="description" value="<?php echo $description; ?>" id="body"></textarea>
          </div>
          
          <div>
            <button type="submit" name="update-topic" class="btn btn-big">Update Topic</button>
          </div>
        </form>

      </div>

    </div>
    <!-- // Admin Content -->

  </div>
<!-- // Page Wrapper -->


<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- CKEditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>

<!-- Custom Script -->
<script src="../../assets/js/script.js"></script>

</body>

</html>

