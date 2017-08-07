<?php include 'includes/header.php'; ?>
<?php 

  //Create db object
  $db = new Database();

  //Get id from URL
  $id = $_GET['id'];

  //Create query
  $query = "SELECT * FROM `posts`
              WHERE id=" . $id;

  //Run post query
  $post = $db->select($query)->fetch_assoc();

  //Create categories query
  $query = "SELECT * FROM `categories`";

  //Run categories query
  $categories= $db->select($query);
 ?>
<div class="blog-post">
  <h2 class="blog-post-title"><?php  echo $post['title']; ?></h2>
  <p class="blog-post-meta"><?php echo formatDate($post['date']); ?> by <a href="#"><?php echo $post['author']; ?></a></p>
  <p><?php  echo $post['body']; ?></p>
</div><!-- /.blog-post -->


<?php include 'includes/footer.php'; ?>