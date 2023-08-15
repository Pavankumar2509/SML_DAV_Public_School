<?php
$conn = new mysqli("localhost", "root", "");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_create_db = "CREATE DATABASE IF NOT EXISTS School";
if ($conn->query($sql_create_db) === TRUE) {
    echo "School database created successfully.";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->select_db("School");

$sql_create_table = "CREATE TABLE IF NOT EXISTS Students (
    first_name varchar(50),
    last_name varchar(50),
    dob date,
    gender varchar(50),
    aadhar varchar(50),
    father_occ varchar(50),
    email VARCHAR(100),
    phone VARCHAR(50),
    address varchar(50)
)";
if ($conn->query($sql_create_table) === TRUE) {
    echo "Students table created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
