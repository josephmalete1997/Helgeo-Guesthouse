<?php
include './components/header.php';
?>
<div class="content fr w-80">
    <div class="flx-4">
        <div class="fr-c w-100 gallery-nav-item-panel">
            <div class="gallery-nav-item active"></div>
            <div class="gallery-nav-item"></div>
            <div class="gallery-nav-item"></div>
            <div class="gallery-nav-item"></div>
        </div>
        <div class="fr-c picture-gallery w-100 rl">
            <p id="category">Self-Catering</p>
            <div class='w-100 fr-c rl'>
                <i class="fa-solid fa-chevron-left rd-50 ab lt-10" id="left"></i>
                <i class="fa-solid fa-chevron-right rd-50 ab rt-10" id="right"></i>
            </div>
            <div class="dots"></div>
        </div>
        <p>Take a look at our gallery photos categorized by units.</p>
    </div>
    <div class="flx-2 p-l-50">
        <h1 style=" width:100%;padding:5px 10px;font-size:24px;
            color:rgb(0, 0, 0);">Unit Features</h1>
        <p id="description"></p>
        <div id="feature-list">
        </div>
    </div>
</div>
<script>
    document.title = "Gallery";
    document.querySelectorAll('.header .nav a')[1].classList.add('active-nav');
</script>
<?php
include './components/footer.php';
?>