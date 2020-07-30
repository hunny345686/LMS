<?php include('header.php') ?>
  <div class="container bnr">
  	<div class="desh_iner">
  		<div class="font-weight-bold">
  			<h2 class="text-center text-white">Manage Mambers</h2>
  			<div class="container-fluid">
  				<div class="row">
					<?php include('left_list.php') ?>
  					<div id="author" class="col-8">
              <a href="<?php echo base_url('index.php/home/mamber_list') ?>" class="btn btn-primary float-right mb-2" >Mamber List</a>
              <?php echo  form_open('home/add_member'); ?>
              <span class="text-danger"><?php echo $this->session->flashdata('msg'); ?></span>
  						<table class="table table-sm text-white">
  							<tr>
                  <td>Mamber Name</td> 
                  <td><input type="text" name="mam_name" class="form-control" placeholder="Mamber Name"></td>      
                </tr>
                <tr>
                  <td>Mamber Address</td> 
                  <td><input type="text" name="mam_address" class="form-control" placeholder="Mamber Address"></td>      
                </tr>
                <tr>
                  <td>Mamber Email</td> 
                  <td><input type="text" name="mam_email" class="form-control" placeholder="Mamber Email"></td>      
                </tr>
                <tr>
                  <td>Mobile No</td> 
                  <td><input type="text" name="mam_mob_no" class="form-control" placeholder="Mobile No"></td>   
                </tr>
                <tr>
                  <td colspan="2" align="center"><input type="submit" name="add_mamber" value="Add Mamber" class="btn btn-primary" style="margin-top: 5px;"></td> 
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