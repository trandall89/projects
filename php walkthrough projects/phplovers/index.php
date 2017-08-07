<?php include 'includes/header.php'; ?>
<?php 
  //Create db object
  $db = new Database();
  
  //Create query
  $query = "SELECT * FROM posts
            ORDER BY id DESC";

  //Run posts query
  $posts = $db->select($query);

  //Create categories query
  $query = "SELECT * FROM `categories`";

  //Run categories query
  $categories= $db->select($query);
  
 ?>
  <?php if($posts) : ?>
    <?php while($row=$posts->fetch_assoc()) :  ?>
      <div class="blog-post">
      <h2 class="blog-post-title"><?php  echo $row['title']; ?></h2>
      <p class="blog-post-meta"><?php echo formatDate($row['date']); ?><a href="#"> <?php  echo $row['author']; ?></a></p>
      <?php echo shortenText($row['body']); ?>
      <a class="readmore" href="post.php?id=<?php echo urlencode($row['id']); ?>">Read more...</a>
      </div><!-- /.blog-post -->
    <?php endwhile;  ?>
<?php else : ?>
  <p>There are no posts</p>
<?php endif; ?>
<?php include 'includes/footer.php'; ?>