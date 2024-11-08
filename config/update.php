<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $client_name = $_POST['client_name'];
    $number_of_adults = $_POST['number_of_adults'];
    $number_of_kids = $_POST['number_of_kids'];
    $accommodation_id = $_POST['accommodation_id'];
    $payment_status = $_POST['payment_status'];
    $booking_confirmation_code = $_POST['booking_confirmation_code'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];
    $cellphone = $_POST['cellphone'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // Prepare and execute the update statement
    $stmt = $mysqli->prepare("UPDATE bookings SET client_name = ?, number_of_adults = ?, number_of_kids = ?, accommodation_id = ?, payment_status = ?, booking_confirmation_code = ?, check_in_date = ?, check_out_date = ?, cellphone = ?, email = ?, comment = ? WHERE booking_id = ?");
    $stmt->bind_param("siissssssssi", $client_name, $number_of_adults, $number_of_kids, $accommodation_id, $payment_status, $booking_confirmation_code, $check_in_date, $check_out_date, $cellphone, $email, $comment, $id);
    
    if ($stmt->execute()) {
        // header("Location: index.php");
        exit;
    } else {
        echo "Error updating record: " . $mysqli->error;
    }

    $stmt->close();
}

// Get the booking ID from the query string
$id = $_GET['id'];
$stmt = $mysqli->prepare("SELECT * FROM bookings WHERE booking_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$booking = $result->fetch_assoc();
$stmt->close();
?>

<form method="POST">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($booking['booking_id']); ?>">
    <input type="text" name="client_name" value="<?php echo htmlspecialchars($booking['client_name']); ?>" required>
    <input type="number" name="number_of_adults" value="<?php echo htmlspecialchars($booking['number_of_adults']); ?>" required>
    <input type="number" name="number_of_kids" value="<?php echo htmlspecialchars($booking['number_of_kids']); ?>" required>
    <select name="accommodation_id" required>
        <?php
        $accommodation_result = $mysqli->query("SELECT accommodation_id, name FROM accommodations");
        while ($accommodation = $accommodation_result->fetch_assoc()) {
            $selected = $accommodation['accommodation_id'] == $booking['accommodation_id'] ? 'selected' : '';
            echo "<option value='" . htmlspecialchars($accommodation['accommodation_id']) . "' $selected>" . htmlspecialchars($accommodation['name']) . "</option>";
        }
        ?>
    </select>
    <input type="text" name="payment_status" value="<?php echo htmlspecialchars($booking['payment_status']); ?>" required>
    <input type="text" name="booking_confirmation_code" value="<?php echo htmlspecialchars($booking['booking_confirmation_code']); ?>" required>
    <input type="date" name="check_in_date" value="<?php echo htmlspecialchars($booking['check_in_date']); ?>" required>
    <input type="date" name="check_out_date" value="<?php echo htmlspecialchars($booking['check_out_date']); ?>" required>
    <input type="text" name="cellphone" value="<?php echo htmlspecialchars($booking['cellphone']); ?>" required>
    <input type="email" name="email" value="<?php echo htmlspecialchars($booking['email']); ?>" required>
    <textarea name="comment"><?php echo htmlspecialchars($booking['comment']); ?></textarea>
    <button type="submit">Update Booking</button>
</form>
