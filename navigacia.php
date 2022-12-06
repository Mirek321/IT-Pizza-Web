<nav>
	<div id="kosik_nav">
		
	<?php
	session_start();
		if(isset($_SESSION['kosik']))
		{
			$poc = count($_SESSION['kosik']);
		?>

		<a href="kosik.php"><img src="obrazky/kosik.png" alt="nákupný košík" width="16" height="16" title="nákupný košík"> <?php echo $poc; ?></a>

		<?php } else{?>
			<a href="kosik.php"><img src="obrazky/kosik.png" alt="nákupný košík" width="16" height="16" title="nákupný košík"> je prázdny</a>
		<?php } ?>

		<img src="obrazky/login.png" alt="prihlásenie" width="20" height="16" title="prihlásenie">
	</div>
	<a href="index.php">ponuka</a>
	<a href="galeria.php">fotogaléria</a>
	<a href="rezervacia.php">rezervácia</a>
	<a href="praca.php">práca</a>
  </nav> 