<?php
include 'connection.php';
$conn = Connect();
$type = $_POST["type"];
$sql = "SELECT count FROM statistics WHERE type='" . $type . "';";
//echo $sql;
//echo $conn->query($sql);
$count = $conn->query($sql);
while($row = $count->fetch_assoc()) {
	$number = $row["count"];
}
echo "Git out of here!";
$number = $number + 1;
$sql = "UPDATE statistics SET count=" . $number . " WHERE type='" . $type . "'";
$conn->query($sql);
$sql = "UPDATE statistics SET date_used=CURRENT_TIMESTAMP WHERE type='" . $type . "'";
$conn->query($sql);
$conn->close();
?>
