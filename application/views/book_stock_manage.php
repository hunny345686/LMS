<?php include('header.php') ?>
  <div class="container bnr">
  	<div class="desh_iner">
  		<div class="font-weight-bold">
  			<h2 class="text-center text-white">Book Stock Manage</h2>
  			<div class="container-fluid">
  				<div class="row">
					<?php include('left_list.php') ?>
  					<div class="col-3 book_stock_manage_list ">
  						<p>	<a href="<?php echo base_url('index.php/home/add_auther') ?>">Add Auther</a></p>
  						<p>	<a href="<?php echo base_url('index.php/home/add_publisher') ?>">Add Publisher</a></p>
  					</div>
  					<div class="col-3 book_stock_manage_list" >
  						<p>	<a href="<?php echo base_url('index.php/home/add_book') ?>">Add Book</a></p>
  						<p>	<a href="<?php echo base_url('index.php/home/book_list') ?>">Book List</a></p>
  					</div>
  					
  				</div>
  				
  			</div>
  		</div>
  	</div>
  </div>
</body>
</html>