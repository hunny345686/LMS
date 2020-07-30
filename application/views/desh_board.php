<?php include('header.php') ?>
  <div class="container bnr">
  	<div class="desh_iner">
  		<div class="font-weight-bold">
  			<h2 class="text-center text-white">Admin Desh Bord <?php echo $this->session->userdata('username');?></h2>
  			<div class="container-fluid">
  				<div class="row">
					<?php include('left_list.php') ?>
  					<div class="col-10">
  						
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</body>
</html>