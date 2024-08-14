    <img class="adSlides fade" src="main_office.jpg" alt="Ad 30">
</div>

<footer>
    <p>&copy; 2024 Abay Edible Oil Company. All rights reserved.</p>
</footer>

<script>
    let slideIndex = 0;
    showSlides();
    showAdSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 3000); // Change image every 3 seconds
    }

    function showAdSlides() {
        let j;
        let adSlides = document.getElementsByClassName("adSlides");
        for (j = 0; j < adSlides.length; j++) {
            adSlides[j].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > adSlides.length) {slideIndex = 1}
        adSlides[slideIndex-1].style.display = "block";
        setTimeout(showAdSlides, 3000); // Change ad image every 3 seconds
    }
</script>
