<div class="block">
	<div class="box">
		<div class="panel panel-default">
			<div class="panel-heading">Sing-in</div>
			<div class="panel-body">
				<form action="sign_in.php" method="POST" name="login">
					<div class="form-group">
						<label for="name">User:</label>
						<input class="form-control" name="username" type="text" placeholder="Enter Name" value="<?php if(isset($_COOKIE['member_name'])){ echo $_COOKIE['member_name']; }?>"/>
					</div>
					<div class="form-group">
						<label for="name">Password:</label>
						<input class="form-control" name="password" type="password" placeholder="Enter Password" value="<?php if(isset($_COOKIE['member_password'])){ echo $_COOKIE['member_password']; }?>"/>
					</div>
					<div class="form-group">
						<label><input name="remember" type="checkbox" <?php if(isset($_COOKIE['member_name'])){ ?> checked <?php } ?>/> Remember me</label>
					</div>
					<div class="form-group">
						<button class="btn btn-default" name="sign_in" type="submit">Login</button> <a href="password_recovery.php">Forgot password</a>
					</div>
					No account? <a href="sign_up.php">Sign Up</a>
				</form>
			</div>
		</div>
	</div>
</div>