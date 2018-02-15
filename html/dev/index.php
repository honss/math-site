<?php include "starter.html"; ?>
<?php include "../navbar.html"; ?>
	<body>
		<div class="container">
			<h1>Development page index, don't expect anything special</h1>
			
			<a href="nowhere.php">Placeholder</a>
			<br>
			<button onclick="increment()" type="button">Increment</button>
		</div>
		<form action="../statistics/inputhandler.php" method="post">
			<input type="text" name="type">
			<button type="submit">Submit</button>
		</form>
		
	</body>
</html>
