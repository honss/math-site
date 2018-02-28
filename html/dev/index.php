<?php include "starter.html"; ?>
<script src="post.js"></script>
<?php include "../navbar.html"; ?>
	<body>
		<div class="container">
			<h1>Development page index, don't expect anything special</h1>
			
			<a href="nowhere.php">Placeholder</a>
			<br>
			Action: <input type="text id="action">
			Type: <input type="text id="value">
			<button onclick="set_action()" type="button">Set</button>
		</div>
		<form id="form" action="../statistics/inputhandler.php" method="post">
			<input type="text" name="type">
			<button type="submit">Submit</button>
		</form>
		
	</body>
</html>
