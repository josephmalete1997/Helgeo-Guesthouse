<?php
include './components/header.php';
?>
<div class="content fr w-70">
    <div class="flx-2 contact-details">
        <h1>Get In Touch</h1>
        <div class="line"></div>
        <p>
            <i class="fa-solid fa-phone"></i> 072 380 3066
        </p>
        <p><i class="fa-solid fa-envelope"></i> info@helgeo.co.za</p>
        <p><i class="fa-brands fa-facebook"></i> Like Our Facebook Page</p>
    </div>
    <div class="flx-3 p-l-20">
        <form>
            <div class="form-group fc">
                <label for="name">Names </label>
                <input type="text" name="Names" required>
            </div>
            <div class="form-group fc">
                <label for="name">Email Address</label>
                <input type="email" name="Email_address" required>
            </div>
            <div class="form-group fc">
                <label for="name">Cellphone <span>(Optional)</span></label>
                <input type="number" name="Cellphone">
            </div>
            <div class="form-group fc">
                <label for="name">Message</label>
                <textarea name="Message" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
<style>
    body {
        overflow-x: hidden;
    }

    .form-group label {
        margin: 10px 0;
        font-size: 18px;
    }

    .form-group input,
    .form-group textarea {
        font-size: 18px;
        padding: 5px 10px;
        border: 1px solid black;
        border-radius: 2px;
    }

    form {
        padding: 20px 40px;
    }

    form button {
        font-size: 18px;
        padding: 10px 20px;
        border-radius: 5px;
        background: black;
        color: white;
        margin: 10px 0;
        border: 2px solid;
        cursor: pointer;
        transition: .3s;
    }

    .contact-details h1 {
        color: rgb(0, 0, 0);
        font-size: 42px;
    }

    .contact-details {
        padding: 5%;
        border-radius: 50% 80% 60% 70%;
        background: transparent;
    }

    .content {
        align-items: center;
        justify-content: center;
    }

    .contact-details p {
        display: flex;
        align-items: center;
        margin: 0px;
        padding: 10px;
        border-radius: 40px;
        color: rgb(0, 0, 0);
    }

    .contact-details .fa-solid,
    .contact-details .fa-brands {
        background: rgb(255, 255, 255);
        color: rgb(0, 0, 0);
        width: 20px;
        height: 20px;
        padding: 10px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
        /* border: 2px solid; */
        font-size: 24px;
        /* box-shadow: 2px 2px 10px rgb(0, 0, 0, .2); */
    }
</style>
<script>
    document.title = "Title";
    document.querySelectorAll('.header .nav a')[4].classList.add('active-nav');
</script>
<?php
include './components/footer.php';
?>