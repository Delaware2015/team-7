<?php

require("database.php");

$sql = "SELECT * FROM school";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
	// This section will be where all of the college information goes.
	// College id number, College name, college application deadline.
	echo $row['school_name'] . " " . $row['school_id'] . " " . $row['enrollment_deadline'];
}

?>
