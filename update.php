<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $seats = $_POST['seats'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE kayakinf SET name = ?, seats = ?, price = ?, image = ? WHERE id = ?");
    $stmt->bind_param("sidsi", $name, $seats, $price, $image, $id);

    // Execute the query
    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Result</title>
</head>
<body>
    <a href="./klientai.php">Back </a>
</body>
</html>
