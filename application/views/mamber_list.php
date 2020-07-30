<?php include('header.php') ?>
  <div class="container bnr">
  	<div class="desh_iner">
  		<div class="font-weight-bold">
  			<h2 class="text-center text-white">Mambers List</h2>
  			<div class="container-fluid">
  				<div class="row">
					<?php include('left_list.php') ?>
  					<div id="author">
  						<table class="table text-white">
  							<tr>
  								<th>ID</th>
  								<th>Mamber Name</th>
  								<th>Address</th>
  								<th>Email</th>
  								<th>Mobile</th>
  							</tr>
                <?php $i=1; foreach ($mam_list as $members) {?>
  							<tr>
  								<td><?php echo $i++; ?></td>
                  <td><?php echo $members['mam_name']; ?></td>
                  <td><?php echo $members['mam_address']; ?></td>
                  <td><?php echo $members['mam_email']; ?></td>
                  <td><?php echo $members['mam_mob_no']; ?></td>
  							</tr>
              <?php  }  ?>
  						</table>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</body>
</html>