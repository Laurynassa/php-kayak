<?php
include 'db.php';

// Fetch data from database
$sql = "SELECT id, name, seats, price, image FROM kayakinf";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table >
    
            <tr >
                <th>ID</th>
                <th>Name</th>
                <th>Seats</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>";
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["name"]. "</td>
                <td>" . $row["seats"]. "</td>
                <td>" . $row["price"]. "</td>
                <td><img src='" . $row["image"]. "' alt='" . $row["name"]. "' width='100'></td>
                <td>
                    <a href='./edit.php?id=" . $row["id"]. "'>Edit</a> | 
                    <a href='./delete.php?id=" . $row["id"]. "' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a>
                </td>
              </tr>
              ";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
