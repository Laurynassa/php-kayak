<?php
include"./db.php";

$id = $_GET['id'];
$sql = "SELECT id, name, seats, price, image FROM kayakinf WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Record not found.";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Event</title>
</head>
<body>
    <h1>Edit Event</h1>
    <form action="./update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="name">Event Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>"><br><br>

        <label for="seats">Seats:</label><br>
        <input type="number" id="seats" name="seats" value="<?php echo $row['seats']; ?>"><br><br>

        <label for="price">Price:</label><br>
        <input type="number" step="0.01" id="price" name="price" value="<?php echo $row['price']; ?>"><br><br>

        <label for="image">Image URL:</label><br>
        <input type="url" id="image" name="image" value="<?php echo $row['image']; ?>"><br><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
