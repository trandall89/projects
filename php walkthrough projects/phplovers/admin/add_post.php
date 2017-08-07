<?php include 'includes/header.php'; ?>
<?php 
	
	//Create db object
	$db = new Database();

	if(isset($_POST['submit'])) {
		//Assign vars
		$title = mysqli_real_escape_string($db->link, $_POST['title']);
		$body = mysqli_real_escape_string($db->link, $_POST['body']);
		$category = mysqli_real_escape_string($db->link, $_POST['category']);
		$author = mysqli_real_escape_string($db->link, $_POST['author']);
		$tags = mysqli_real_escape_string($db->link, $_POST['tags']);
		//simple validation
		if($title=="" || $body=="" || $category=="" || $author=="") {
			//Set error
			$error = 'Please fill out all required fields';
		} else {
			$query = "INSERT INTO posts
						(title, body, category, author, tags)
						VALUES('$title', '$body', '$category', '$author','$tags')";

			$insert_row = $db->insert($query);
		}
	}

 ?>
<?php 


  //Create categories query
  $query = "SELECT * FROM `categories`";

  //Run categories query
  $categories= $db->select($query);
 ?>
<div id="add_cat" style="display:hidden"></div>
<form role="form" method="post" action="add_post.php">
	<div class="form-group">
		<label>Post Title</label>
	    <input name="title" type="text" class="form-control" placeholder="Enter Title">
	</div>

	<div class="form-group">
	    <label>Post Body</label>
	    <textarea name="body" class="form-control" placeholder="Enter Title"></textarea>
	</div>
    <div class="form-group">
	    <label for="exampleInputEmail1">Category</label>
	   <select name="category" class="form-control">
		  <?php while($row = $categories->fetch_assoc()) : ?>
		  	<?php if($row['id']==$post['category']) {
		  		$selected = "selected";
		  	} else {
		  		$selected = "";
		  	}
		  	?>
		  	<option <?php echo $selected; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
		<?php endwhile; ?>
		</select>
	</div>
	<div class="form-group">
	    <label for="exampleInputEmail1">Author</label>
	    <input name="author" type="text" class="form-control" placeholder="Enter Author Name">
	</div>
	<div class="form-group">
	    <label for="exampleInputEmail1">Tags</label>
	    <input name="tags" type="text" class="form-control" placeholder="Enter Tags">
	</div>
	<div>
	  	<button name="submit" type="submit" class="btn btn-default">Submit</button>
	  	<a href="index.php" class="btn btn-default">Cancel</a>
  	</div>
  	<br>
</form>



<?php include 'includes/footer.php'; ?>