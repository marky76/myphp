<?php
$dbhost = getenv("test");
$dbport = getenv("test");
$dbuser = getenv("test");
$dbpwd = getenv("test");
$dbname = getenv("test");

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
echo "<br><br><br><br>My awesome PHP test";
$query = "SELECT * from users";
$rs = $connection->query($query);
while ($row = $rs->fetch_array(MYSQLI_ASSOC)) {
    echo $row['user_id'] . " " . $row['username'] . "\n";
}
$rs->close();
$connection->close();
?>
