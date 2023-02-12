<?php
$conn = mysqli_connect("localhost", "root", "", "yard");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT name FROM product";
$result = mysqli_query($conn, $query);

echo "<select>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
}
echo "</select>";

mysqli_close($conn);
?>
