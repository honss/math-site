<?php include "starter.html"; ?>
<?php include "../navbar.html"; ?>
	<body>
		<div class="container">
		<?php
			include 'connection.php';
			$conn = Connect();
			$sql = "SELECT type, count FROM statistics";
			$result = $conn->query($sql);
			$total = 0;
			while($row = $result->fetch_assoc()) {
				$total = $total+$row["count"];
				echo "<b>Type</b>: " . $row["type"]. "------- <b>Count</b>: " . $row["count"]. "<br>";
    			}
			echo "<br><br><b>Total</b>: ------- <b>Count</b>: " . $total . "<br>";
			?>
		</div>			
	</body>
</html>
