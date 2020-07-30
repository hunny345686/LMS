<?php include('header.php') ?>
  <div class="container bnr">
  	<div class="desh_iner">
  		<div class="font-weight-bold">
  			<h2 class="text-center text-white">Add Author</h2>
  			<div class="container-fluid">
  				<div class="row">
					<?php include('left_list.php') ?>
  					<div id="author">
              <?php
                if(isset($res1)) 
                {
                    echo form_open('home/auther_update1'); ?>
              <table class="table">
                <tr>
                  <td class="text-white abc"> Author Name:-
                    <input type="hidden" name="id" value="<?= $res1[0]['id']?>">
                  </td>
                  <td><input type="text" value="<?= $res1[0]['auther_name']?>" name="auther_name" placeholder="Enter Author Name" class="form-control"></td>
                  <td><input type="submit" value="Update" class="btn btn-primary btn-sm form-control" ></td>
                </tr>
              </table>
              <?php echo form_close(); 
            }
                else
                {
                 echo form_open('home/auther_add');; ?>
    						<table class="table">
    							<tr>
    								<td class="text-white abc"> Author Name:-</td>
    								<td><input type="text" name="auther_name" placeholder="Enter Author Name" class="form-control"></td>
    								<td><input type="submit" value="Add" class="btn btn-primary btn-sm form-control" ></td>
    							</tr>
                  <span class="text-danger">
                  <?php 

                    $msg =$this->session->flashdata('msg');
                      if($msg=='1')
                        echo "Author Addad sucsucefully";
                      else if($msg=='delete')
                        echo "Auther Delete sucsucefully";
                      else if($msg=='update')
                      echo "Auther Update sucsucefully";
                      else
                        echo validation_errors();
                   ?>
                   </span>
    						</table>
                <?php echo form_close(); 
              } ?>
  						<div> 
  						<table class="table text-white">
  							<tr>
  								<th>Id</th>
  								<th>Name</th>
  								<th colspan="2">Oprations</th>
  							</tr>
                <?php 
                  $i = 1;
                  foreach ( $res as $r1 ) {
                   ?>
    							<tr>
    								<td><?php echo $i++ ?></td>
    								<td><?php echo $r1['auther_name']; ?></td>
    								<td><a href="<?php echo base_url('index.php/home/update_auther/'.$r1['id']); ?>" class="btn btn-success btn-sm font-weight-bold">Update</a></td>
    								<td><a href="<?php echo base_url('index.php/home/datete_auther/'.$r1['id']); ?>" class="btn btn-danger btn-sm font-weight-bold" on  click="return confirm('Are you sure you want to delete this item')">Delete</a></td>
    							</tr>
                <?php } ?>
  						</table>
  					</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</body>
</html>