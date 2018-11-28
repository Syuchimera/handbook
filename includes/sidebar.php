<div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <form action="search.php" method="post">
                <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Search for...">
                <span class="input-group-btn">
                  <button type="submit" name="submit" class="btn btn-outline-dark">Go!</button>

                </span>
              </div>
              </form>
              
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                  	<?php 

                  	$query = "SELECT * FROM category";
                  	$result = mysqli_query($conn, $query);

                  	while ($row = mysqli_fetch_assoc($result)) {
                  		
                  		$id = $row['id'];
                  		$title = $row['title'];

                      echo "<li><a href='category.php?id={$id}'>{$title}</li>";
                  		
                  	}
                  	 ?>
                    

                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          

        </div>