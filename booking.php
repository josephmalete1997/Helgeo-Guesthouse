<?php
include './components/header.php';
?>

<div class="content">
    <h1>Booking enquiry</h1>
    <div class="fr w-100">
        <div class="flx-2">
            <h2>New bookings</h2>
            <?php include './config/create.php'; ?>
        </div>
        <div class="flx-1">
            <h2>Existing bookings</h2>
            <form method="post">
                <input type="search" name="booking_id" placeholder="Enter your booking id" class="search" required>
                <button type="submit">search <i class="fa-solid fa-search"></i></button>
                <?php include './config/display.php'; ?>
            </form>
        </div>
    </div>
</div>
<script>
    document.title = "Booking";
</script>
<style>
    form {
        background: white;
    }

    form input,
    form button {
        font-size: 18px;
        padding: 5px 10px;
    }

    form button {
        cursor: pointer;
        background: black;
        color: white;
        border: 1px solid black;
    }
</style>
<script>
    document.title = "Bookings";
</script>
<?php
include './components/footer.php';
?>