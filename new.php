<?php 
	include("widgets/server.php");
	
	if(empty($_SESSION['username'])){
		header('location: sign_in.php');
	}
	if(empty($_SESSION['admin'])){
		header('location: index.php');
	}
	if(isset($_SESSION['edit_quiz'])){
		header('location: editing.php');
	}
?>

<html>
	<head><?php include("widgets/assets.php"); ?></head>
	<body>
		<div id = "load"></div>
		<?php include("widgets/nav.php"); ?>
		<div class="wrapper">
			<?php include("widgets/create.php"); ?>
			<?php include("widgets/footer.php"); ?>
		</div>
	</body>
</html>