<?php

// Your SQL query
$sql = "SELECT b.*, a.name AS accommodation_name FROM bookings b JOIN accommodations a ON b.accommodation_id = a.accommodation_id";

// Execute the query
$result = mysqli_query($mysqli, $sql);

// Check for errors in the query
if (!$result) {
die("Query failed: " . mysqli_error($mysqli));
}

// Fetch all results as an associative array
$bookings = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Example: Display the bookings
foreach ($bookings as $booking) {
echo "Booking ID: " . $booking['booking_id'] . ", Accommodation: " . $booking['accommodation_name'] . "<br>";
}
?>
    ?>

    <h1>Bookings</h1>
    <a href="create.php">Add New Booking</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Client Name</th>
            <th>Accommodation</th>
            <th>Check-in</th>
            <th>Check-out</th>
            <th>Cellphone</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($bookings as $booking): ?>
        <tr>
            <td><?php echo $booking['booking_id']; ?></td>
            <td><?php echo $booking['client_name']; ?></td>
            <td><?php echo $booking['accommodation_name']; ?></td>
            <td><?php echo $booking['check_in_date']; ?></td>
            <td><?php echo $booking['check_out_date']; ?></td>
            <td><?php echo $booking['cellphone']; ?></td>
            <td><?php echo $booking['email']; ?></td>
            <td>
                <a href="./update.php?id=<?php echo $booking['booking_id']; ?>">Edit</a>
                <a href="./delete.php?id=<?php echo $booking['booking_id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>