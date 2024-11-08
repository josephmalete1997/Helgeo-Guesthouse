<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $mysqli->prepare("DELETE FROM bookings WHERE booking_id = ?");
    
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo "Record deleted successfully";
        } else {
            // No record found with that ID
        }
    } else {
        echo "Error deleting record: " . $stmt->error; 
    }

}

// header("Location: index.php");
exit;
?>
