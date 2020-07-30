<?php include('header.php') ?>
  <div class="container bnr">
  	<div class="desh_iner">
  		<div class="font-weight-bold">
  			<h2 class="text-center text-white">Book List</h2>
  			<div class="container-fluid">
  				<div class="row">
					<?php include('left_list.php') ?>
  					<div id="author">
  						<table class="table text-white">
  							<tr>
  								<th>ID</th>
  								<th>Book Name</th>
  								<th>Author Name</th>
  								<th>Publisher Name</th>
  								<th>Price</th>
  							</tr>
                <?php $i=1; foreach ($book_list as $book) {?>
  							<tr>
  								<td><?php echo $i++ ?></td>
  								<td><?php echo $book['book_name'];?></td>
                  <td><?php echo $book['auther_name'];?></td>
                  <td><?php echo $book['pub_name'];?></td>
                  <td><?php echo $book['price'];?></td>
  							</tr>
              <?php    }  ?>
  						</table>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</body>
</html>