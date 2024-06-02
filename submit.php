<?php
include "./db.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $seats = $_POST['seats'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO kayakinf (name, seats, price, image) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sids", $name, $seats, $price, $image);

    // Execute the query
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
