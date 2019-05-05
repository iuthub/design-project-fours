
	<?php if(isset($_SESSION['username'])): ?>
		<p id="teem_title">PROFILE</p>
			<h3 id="member_info">
				Welcome <span id="name"><?php echo $_SESSION['username']; ?></span>
				<?php if (isset($_SESSION['admin'])): ?>
					<br/>
					<a id="undecorated_link" href = "new.php"><button class="btn btn-default">Add new</button></a>
				<?php endif ?>
			</h3>
		<hr/>
	<?php endif ?>