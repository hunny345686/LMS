<?php include('header.php') ?>
  <div class="container bnr">
  	<div class="desh_iner">
  		<div class="font-weight-bold">
  			<h2 class="text-center text-white">Submit Book</h2>
  			<div class="container-fluid">
  				<div class="row">
					<?php include('left_list.php') ?>
  					<div id="author"><br>
  						<table class="table text-white">
  							<tr>
                  <td>Mamber ID</td>   
                  <td><input type="text" name="mam_id" class="form-control"></td> 
                  <td>Mamber Name</td>   
                  <td><input type="text" name="mam_name" class="form-control"></td>    
                </tr>
                <tr>
                  <td>Address</td>   
                  <td><input type="text" name="mam_add" class="form-control"></td> 
                  <td>Email</td>   
                  <td><input type="text" name="mam_email" class="form-control"></td>   
                </tr>
                <tr>
                  <td>Book Name</td>   
                  <td><input type="text" name="book_name" class="form-control"></td> 
                  <td>Price</td>   
                  <td><input type="text" name="price" class="form-control"></td>    
                </tr>
                <tr>
                   <td colspan="2" align="center"><input type="button" name="mam_sub" value="Submit" class="btn btn-primary"></td>
                </tr>
  						</table>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
</body>
</html>