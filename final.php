<?php include 'inc/header.php'; ?>
<?php 
	Session::checkSession();
?>
<div class="main">
<h1>Test Done!!!</h1>
	<div class="starttest">
		<p>Congrats!! You've just completed your test.</p>
		<p>Your Score: 
			<?php 
				if (isset($_SESSION['score'])) {
					echo $_SESSION['score'];
					unset($_SESSION['score']);
				}
			?>
		</p>
		<a href="viewans.php">View Answer</a>
		<a href="starttest.php">Start Again</a>
	</div>	
  </div>
<?php include 'inc/footer.php'; ?>