<?php 
	include("widgets/server.php");
	
	if(empty($_SESSION['username'])){
		header('location: sign_in.php');
	}
	if(empty($_SESSION['admin'])){
		header('location: index.php');
	}
	if(empty($_SESSION['edit_quiz'])){
		header('location: new.php');
	}
?>

<html>
	<head><?php include("widgets/assets.php"); ?></head>
	<body>
		<div id = "load"></div>
		<?php include("widgets/nav.php"); ?>
		<div class="container">
			<?php include("widgets/edit.php"); ?>
			<?php include("widgets/footer.php"); ?>
		</div>
	</body>
</html>