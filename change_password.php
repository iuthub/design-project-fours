<?php 
	include("widgets/server.php");
	
	if(empty($_SESSION['username'])){
		header('location: sign_in.php');
	}
?>
<html>
	<head><?php include("widgets/assets.php"); ?></head>
	<body>
		<div id = "load"></div>
		<?php include("widgets/nav.php") ?>
		<div class="container">
			<?php include("widgets/modify.php"); ?>
			<?php include("widgets/footer.php") ?>
		</div>
	</body>
</html>