<?php
$conn = new mysqli("localhost", "root", "", "School");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_select = "SELECT * FROM Students";
$result = $conn->query($sql_select);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>First Name</th><th>Last Name</th><th>DOB</th><th>Gender</th><th>Aadhar</th><th>Father_occ</th><th>Email</th><th>Phone</th><th>Address</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["first_name"] . "</td>";
        echo "<td>" . $row["last_name"] . "</td>";
        echo "<td>" . $row["dob"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $row["aadhar"] . "</td>";
        echo "<td>" . $row["father_occ"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
