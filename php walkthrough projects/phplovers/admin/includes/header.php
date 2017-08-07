<?php include '../config/config.php'; ?>
<?php include '../libraries/database.php' ?>
<?php include '../helpers/format_helper.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Admin Area</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/custom.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="index.php" id="nav1">Dashboard</a>
          <a class="blog-nav-item" href="add_post.php" id="nav2">Add Post</a>
          <a class="blog-nav-item" href="add_category.php" id="nav3">Add Category</a>
          <a class="blog-nav-item pull-right" href="/phplovers" id="nav4">Vist Blog</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h2>Admin Area</h2>
      </div>

      <div class="row">

        <div class="col-sm-12 blog-main">
       <?php 
        if(isset($_GET['msg'])) : ?>
          <div class="alert alert-success"><?php echo htmlentities($_GET['msg']); ?></div>
        <?php endif; ?>