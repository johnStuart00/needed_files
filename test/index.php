<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from the table
$sql = "SELECT * FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Loop through each row of the result
    while ($row = $result->fetch_assoc()) {
        // Access the data using column names
        $column1 = $row['id'];
        $column2 = $row['ady'];
        // ...
        
        // Process the data as needed
        echo "Column 1: " . $column1 . "<br>";
        echo "Column 2: " . $column2 . "<br>";
        // ...
    }
} else {
    echo "No records found";
}

// Close the connection
$conn->close();
?>