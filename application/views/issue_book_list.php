<?php include('header.php') ?>
  <div class="container bnr">
  	<div class="desh_iner">
  		<div class="font-weight-bold">
  			<h2 class="text-center text-white"> Issue Book List</h2>
  			<div class="container-fluid">
  				<div class="row">
					<?php include('left_list.php') ?>
  					<div id="author">
             <span class="text-danger"><?= $this->session->flashdata('m1'); ?></span>
  						<table class=" table text-white">
  							<tr>
  								<th>ID</th>
  								<th>Name</th>
  								<th>Address</th>
  								<th>Email</th>
  								<th>Book Name</th>
  								<th>Action</th>
  							</tr>
                <?php foreach ($book_list as $book_data ) {?>
  							<tr>
  								<td><?= $book_data['user_id'];?></td>
                  <td><?= $book_data['user_name']; ?></td>
                  <td><?= $book_data['user_add']; ?></td>
                  <td><?= $book_data['user_email']; ?></td>
                  <td><?= $book_data['book_name']; ?></td>
  								<td><a href="<?php echo base_url('index.php/home/sub_book/'.$book_data['id']); ?>" class="btn btn-info btn-sm font-weight-bold">Submit</a></td>
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