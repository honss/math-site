<html>
	<body>
		<form action="index.php" method="post">
			<input type="text" name="site">
			<button type="submit">Submit</button>
		</form>
		<?php
			$site = $_POST["site"];
			$html = file_get_contents("https://$site");
			echo $html;
		?>
	</body>
</html>
