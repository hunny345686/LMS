<?php include('header.php') ?>
  <div class="container bnr">
  	<div class="desh_iner">
  		<div class="font-weight-bold">
  			<h2 class="text-center text-white"> Submited Book List</h2>
  			<div class="container-fluid">
  				<div class="row">
					<?php include('left_list.php') ?>
  					<div id="author">
             <span class="text-danger"><?= $this->session->flashdata('m1'); ?></span>
  						<table class=" table text-white">
  							<tr>
  								<th>ID</th>
  								<th>Name</th>
  								<th>Email</th>
  								<th>Book Name</th>
  							</tr>
                <?php foreach ($sub_book as $book_submit ) {?>
  							<tr>
  								<td><?= $book_submit['id'];?></td>
                  <td><?= $book_submit['user_name']; ?></td>
                  <td><?= $book_submit['user_email']; ?></td>
                  <td><?= $book_submit['book_name']; ?></td>
  							</tr>
                <?php }  ?>
  						</table>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</body>
</html>