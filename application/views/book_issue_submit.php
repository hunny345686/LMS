<?php include('header.php') ?>
  <div class="container bnr">
  	<div class="desh_iner">
  		<div class="font-weight-bold">
  			<h2 class="text-center text-white">Book List</h2>
  			<div class="container-fluid">
  				<div class="row">
					<?php include('left_list.php') ?>
  					<div id="author">
              <a href="<?php echo base_url('index.php/home/issue_book_list') ?>" class="btn btn-success btn-sm">Isseu Book List</a>
              <?= form_open('home/book_filter');?>
  						<table class="table table-sm text-white">
  							<tr>
  								<td>Enter Mamber ID</td>
  								<td><input type="text" name="id" placeholder="Enter Mamber ID" class="form-control"></td>
  								<td><input type="submit" name="find" value="Search" class="btn btn-primary"></td>
  							</tr>
  						</table>
              <?= form_close(); ?> 
              <?php 
                if (isset($res)) {
               ?> 
               <?= form_open('home/issue_book'); ?>
  						<table class="table text-white">
  							<tr>
  								<td>ID</td>
  								<td><input type="text" name="user_id" value="<?= $res[0]['id'] ?>" class="form-control"></td>
  								<td>Name</td>
  								<td><input type="text" name=" user_name" value="<?= $res[0]['mam_name'] ?>" class="form-control"></td>
  							</tr>
  							<tr>
  								<td>Address</td>
  								<td><input type="text" name="user_add" value="<?= $res[0]['mam_address'] ?>" class="form-control"></td>
  								<td>Email</td>
  								<td><input type="text" value="<?= $res[0]['mam_email'] ?>" name="user_email" class="form-control"></td>
  							</tr>
  							<tr>
  								<td>Select Book</td>
  								<td>
  									<select name="book_name" id="sel_book" class="form-control">
                      <?php foreach ($book_data as $book_name) {?>
  										<option><?= $book_name['book_name']; ?></option>
                    <?php } ?>
  									</select>
  								</td>
                  <td><input type="submit" name="book_now" class="btn font-weight-bold btn-primary" value="Book Now"></td>
  							</tr>
  						</table>
              <?= form_close(); ?>
              <?php  
            }
            else
            {
              ?>
              <span class="text-danger"><?= $this->session->flashdata('m1'); ?></span>
              <?php 
            }
             ?>
            
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</body>
</html>