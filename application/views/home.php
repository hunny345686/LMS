<?php include('header.php') ?>
  <div class="container bnr">
  	<div class="iner">
  		<div class="login font-weight-bold">
  			<h2 class="text-center font-weight-bold text-white">Admin Login</h2>
  			<table class="table">
  				<tr>
  					<td>Enter Username</td>
  					<td><input type="text" name="username" id="un" class="form-control"></td>
  				</tr>
  				<tr>
  					<td>Enter Password</td>
  					<td><input type="password" name="username" id="ps" class="form-control"></td>
  				</tr>
  				<tr>
  					<td colspan="2"><input type="checkbox" name="c1" value="yes"> Remamber Me</td>
  				</tr>
  				<tr>
  					<td colspan="2"><input type="button" name="btn" class="btn btn-primary"value="Login" onclick="login();"></td>
  				</tr>
  			</table>
  		</div>
  	</div>
  </div>
</body>
</html>