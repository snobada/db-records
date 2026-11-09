<?php
$conn = new mysqli("localhost", "root", "", "job_application2");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM applicants";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Applicant Details</title>
</head>
<body>

<h2>Applicant Details</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Username</th>
    </tr>

    <?php
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["mobile"]."</td>";
        echo "<td>".$row["username"]."</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>