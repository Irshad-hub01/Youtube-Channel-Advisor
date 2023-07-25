

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM web_development";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Cid</th><th>CName</th><th>Tot_views</th><th>Uploads</th><th>Subcribers</th>
	<th>youtube link</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["cid"]. "</td><td>" . $row["cname"]. "</td><td> " . $row["tot_views"].
		"</td><td>".$row["uploads"]."</td><td>".$row["subscribers"]."</td><td>".$row["ylink"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>