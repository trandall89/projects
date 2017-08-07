<?php include "includes/header.php"; ?>
<?php 
  //Get id from URL
  $id = $_GET['id'];

  //Create db object
  $db = new Database();

  //Create query
  $query = "SELECT * FROM categories
              WHERE id=" . $id;

  //Run post query
  $category = $db->select($query)->fetch_assoc();

  //Create categories query
  $query = "SELECT * FROM `categories`";

  //Run categories query
  $categories= $db->select($query);
 ?>

 <?php 

  if(isset($_POST['submit'])) {
    //Assign vars
    $name = mysqli_real_escape_string($db->link, $_POST['name']);
    //simple validation
    if($name=="") {
      //Set error
      $error = 'Please fill out all required fields';
    } else {
      $query = "UPDATE categories
                SET
                name = '$name'
                WHERE id = ".$id;
                

      $update_row = $db->update($query);
    }
  }

 ?>
 <?php 
if(isset($_POST['delete'])) {
  $query = "DELETE FROM categories WHERE id= ".$id;
  $delete_row = $db->delete($query);
}

  ?>
<form method="post" action="edit_category.php?id=<?php echo $id; ?>">
  <div class="form-group" >
    <label for="exampleInputEmail1">Category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Category" value="<?php echo $category['name']; ?>">
  </div>
  <div>
    <button name="submit" type="submit" class="btn btn-default">Submit</button>
  		<a href="index.php" class="btn btn-default">Cancel</a>
  	<input name="delete" type="submit" class="btn btn-danger" value="Delete" />
  </div>
  <br>
</form>
<?php include "includes/footer.php"; ?>