<?php

include './db.php';

$sql = "SELECT * FROM accommodations ORDER BY accommodation_id ASC";
$result = $mysqli->query($sql);

$units_array = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($units_array, [
            'accommodation_id' => $row['accommodation_id'],
            'name' => $row['name'],
            'price' => $row['price'],
            'self_catering' => $row['self_catering']
        ]);
    }
} else {
    echo "No units information found!";
}

echo json_encode($units_array);
?>