<?php include('header.php') ?>
  <div class="container bnr">
  	<div class="desh_iner">
  		<div class="font-weight-bold">
  			<h2 class="text-center text-white">Add Book</h2>
  			<div class="container-fluid">
  				<div class="row">
					<?php include('left_list.php') ?>
  					<div id="author">
              <span class="text-danger">
                  <?php 

                    $msg =$this->session->flashdata('msg');
                      if($msg=='insert')
                        echo "Book Addad sucsucefully";
                      else if($msg=='2')
                        echo "Publisher Delete sucsucefully";
                      else if($msg=='update')
                      echo "Publisher Update sucsucefully";
                      else
                        echo validation_errors();
                   ?>
                   </span>
              <?php echo form_open('home/book_add'); ?>
  						<table class="table text-white">
  							<tr>
  								<td>Auther Name</td>
  								<td>
  									<select name="auther_name" id="" class="form-control">
                      <?php foreach ($auther_list as $d1) {
                        ?>
                       <option value="<?php echo $d1['auther_name']; ?>"><?php echo $d1['auther_name']; ?></option>
                      <?php
                       } ?>
  									</select>
  								</td>
  								<td>Publisher Name</td>
  								<td>
  									<select name="pub_name" id="" class="form-control">
  										<?php foreach ($pub_list as $d2) {
                        ?>
                       <option value="<?php echo $d2['pub_name']; ?>"><?php echo $d2['pub_name']; ?></option>
                      <?php
                       } ?>
  									</select>
  								</td>
  							</tr>
  							<tr>
  								<td class="text-white"> Book Name:-</td>
  								<td colspan="2"><input type="text" name="book_name" placeholder=" Book Name" class="form-control"></td>
  							</tr>
  							<tr>
  								<td>Price</td>
  								<td colspan="2"><input type="text" name="price" placeholder=" Price" class="form-control"></td>
  							</tr>
  							<tr>
  								<td colspan="2">
  									<input type="submit" name="book_add" value="Add Book" class="btn btn-info">
  								</td>
  							</tr>
  						</table>
              <?php echo form_close(); ?>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</body>
</html>