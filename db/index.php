<?php

$connect = mysqli_connect(
    'db',
    'php_docker',
    'password',
    'php_docker'
);

$table_name = "Test-docker";


$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong> $table_name: </strong>";
while ($row = mysqli_fetch_assoc($response)) {
    echo "<p>" . $row['name'] . "</p>";
    echo "<p>" . $row['lastname'] . "</p>";
}
