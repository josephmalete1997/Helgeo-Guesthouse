<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

    // Prepare the SQL statement
    $stmt = $mysqli->prepare("INSERT INTO bookings (client_name, number_of_adults, number_of_kids, accommodation_id, payment_status, booking_confirmation_code, check_in_date, check_out_date, cellphone, email, comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    // Bind the parameters
    $stmt->bind_param("siissssssss", $client_name, $number_of_adults, $number_of_kids, $accommodation_id, $payment_status, $booking_confirmation_code, $check_in_date, $check_out_date, $cellphone, $email, $comment);
    
    // Execute the statement
    if ($stmt->execute()) {
        // header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $stmt->error; // Display error if insert fails
    }

    $stmt->close();
}
?>

<form method="POST">
    <input type="text" name="client_name" placeholder="Client Name" required>
    <input type="number" name="number_of_adults" placeholder="Number of Adults" required>
    <input type="number" name="number_of_kids" placeholder="Number of Kids" required>
    <select name="accommodation_id" required>
        <?php
        $accommodation_result = $mysqli->query("SELECT accommodation_id, name FROM accommodations");
        while ($accommodation = $accommodation_result->fetch_assoc()) {
            echo "<option value='" . htmlspecialchars($accommodation['accommodation_id']) . "'>" . htmlspecialchars($accommodation['name']) . "</option>";
        }
        ?>
    </select>
    <input type="text" name="payment_status" placeholder="Payment Status" required>
    <input type="text" name="booking_confirmation_code" placeholder="Booking Confirmation Code" required>
    <input type="date" name="check_in_date" required>
    <input type="date" name="check_out_date" required>
    <input type="text" name="cellphone" placeholder="Cellphone" required>
    <input type="email" name="email" placeholder="Email" required>
    <textarea name="comment" placeholder="Comments"></textarea>
    <button type="submit">Add Booking</button>
</form>
