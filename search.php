<?php ob_start(); ?>

<?php 

if (isset($_POST['submit'])) {
  

  $search = $_POST['search'];
} else {

  $search = "";
}


 ?>



<?php include('includes/header.php'); ?>

    <!-- Navigation -->
    <?php include('includes/navigation.php'); ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h2 class="my-4"> Unisel Student Handbook</h2>
          <!-- Blog Post -->



          <?php 

          if (!empty($search)) {
            
          

          $query = "SELECT * FROM sub_category WHERE title LIKE '%$search%'";
          $result = mysqli_query($conn, $query);

          while ($row = mysqli_fetch_assoc($result)) {
          	
          	$id = $row['id'];
          	$title = $row['title'];
          	$description = substr($row['description'], 0, 50 );
          	$cat_id = $row['cat_id'];
          	?>

          	<div class="card mb-4">
	            
	            <div class="card-body">
	              <h2 class="card-title"><?php echo $title; ?></h2>
	              <p class="card-text"><?php echo str_replace("<br>", "", $description); ?></p>
	              <a href="detail.php?id=<?php echo $id; ?>" class="btn btn-outline-dark">Read More &rarr;</a>

	            </div>
	            <div class="card-footer text-muted">
	              Category:
	              <?php 

							$query = "SELECT * FROM category WHERE id=$cat_id";
							$r = mysqli_query($conn, $query);
							while($row = mysqli_fetch_assoc($r)){
								
								$title = $row['title'];

								echo "<a href='#'>{$title}</a>";
							}

							 ?>
	              
	            </div>
	          </div>

          	<?php
          }
        } else {

          echo "<h2 class='my-4'> Nothing Found</h2>";
        }

           ?>
          
          

          <!-- Blog Post -->
  
          <!-- Blog Post -->
          
          
          <!-- Pagination -->
          

        </div>

        <!-- Sidebar Widgets Column -->
        <?php include('includes/sidebar.php'); ?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
