<?php
require 'C:\Users\ogzft\OneDrive\Desktop\FinalOguzFethiDemirel\config\db.php';


// Test the database connection
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Perform a query to fetch data from the table
$query = "SELECT * FROM patient_login";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Database query failed: " . mysqli_error($conn));
}

// Display the fetched data
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['id'] . "<br>";
    echo "patientMail: " . $row['patientMail'] . "<br>";
    echo "pwdPatient: " . $row['pwdPatient'] . "<br>";
    // Add more fields as needed
    echo "<br>";
}

// Close the database connection
mysqli_close($conn);
?>
