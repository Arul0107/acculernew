<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Work - Acculer Media | Our Successful Digital Solutions</title>
    <link rel="icon" href="assets/images/logo/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/spinner.css">
    <link rel="stylesheet" href="css/font.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- GSAP CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>

    <!-- ScrollTrigger CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
    <!-- Load Font Awesome Pro from your Kit -->
    <script src="https://kit.fontawesome.com/YOUR_KIT_ID.js" crossorigin="anonymous"></script>

</head>

<body>
    <?php 
    include("includes/header.php")?>

    <section class="bread-area">
        <div class="container-fluid">
            <div class="row">
                <div class="breadcrumb_area ps-0 pe-0 d-flex flex-column justify-content-center">
                    <h1>Works</h1>
                    <img src="assets/images/inner-banners/about.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="casesstudies pt-150">
        <div class="container" style="max-width:85%">
            <div class="row justify-content-around mb-5">
                <div class="col-lg-5 pb-5">
                    <img style="height:640px" src="assets/images/works/1.png" alt="">
                    <h2 class="text-dblue">Aushadi</h2>
                    <h5 class="text-dblue">Herbal and Natural Cosmetics</h5>
                </div>
                <div class="col-lg-5  pt-150">
                    <img style="height:640px" src="assets/images/works/2.png" alt="">
                    <h2 class="text-dblue">Sri Lakshmi grinders</h2>
                    <h5 class="text-dblue">Wet Grinder Manufacturer</h5>
                </div>
            </div>
            <div class="row justify-content-around mt-5 mb-5">
                <div class="col-lg-5 pb-5">
                    <img style="height:640px" src="assets/images/works/3.png" alt="">
                    <h2 class="text-dblue">Vanismart</h2>
                    <h5 class="text-dblue">Mosquito Swaters</h5>
                </div>
                <div class="col-lg-5  pt-150">
                    <img style="height:640px" src="assets/images/works/4.png" alt="">
                    <h2 class="text-dblue">Nice Home</h2>
                    <h5 class="text-dblue">Ready Made Food Products</h5>
                </div>
            </div>
            <div class="row justify-content-around mt-5">
                <div class="col-lg-5 pb-5">
                    <img style="height:640px" src="assets/images/works/5.png" alt="">
                    <h2 class="text-dblue">Padmavahini</h2>
                    <h5 class="text-dblue">Transformers</h5>
                </div>
                <div class="col-lg-5 pt-150">
                    <img style="height:640px" src="assets/images/works/6.png" alt="">
                    <h2 class="text-dblue">Rocks Nature</h2>
                    <h5 class="text-dblue">Film Production</h5>
                </div>
            </div>
        </div>
    </section>


    <?php
    include("includes/footer.php")?>

</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js'></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
var ang = 0;

$("#prev").click(function() {
    ang = ang + 22.5;
    $("*").css("--ang", ang);
});

$("#next").click(function() {
    ang = ang - 22.5;
    $("*").css("--ang", ang);
});

$(".holder").on('wheel', function(e) {
    var delta = e.originalEvent.deltaY;

    // Set the sensitivity
    var sensitivity = 1;

    // If scrolling down (wheel moves away from you), decrease the angle
    // If scrolling up (wheel moves towards you), increase the angle
    if (delta > 0) {
        ang = ang - 10.5 * sensitivity; // Scroll down (negative)
    } else {
        ang = ang + 10.5 * sensitivity; // Scroll up (positive)
    }

    // Apply the updated angle to all elements with CSS variable
    $("*").css("--ang", ang);

    // Prevent the default scroll behavior
    e.preventDefault();
});
</script>
<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Hide all images initially
    const images = document.querySelectorAll(".menu-img");
    images.forEach(img => img.style.display = "none");

    // Hover event for each menu item
    document.getElementById("home").addEventListener("mouseenter", function() {
        document.getElementById("home-img").style.display = "block";
        hideOtherImages("home-img");
    });

    document.getElementById("about").addEventListener("mouseenter", function() {
        document.getElementById("about-img").style.display = "block";
        hideOtherImages("about-img");
    });

    document.getElementById("service").addEventListener("mouseenter", function() {
        document.getElementById("services-img").style.display = "block";
        hideOtherImages("services-img");
    });

    document.getElementById("contactus").addEventListener("mouseenter", function() {
        document.getElementById("contact-img").style.display = "block";
        hideOtherImages("contact-img");
    });

    // Function to hide all images except the currently hovered one
    function hideOtherImages(activeImageId) {
        images.forEach(img => {
            if (img.id !== activeImageId) {
                img.style.display = "none";
            }
        });
    }

    // Optional: Hide all images when mouse leaves the entire section
    document.querySelector(".overlay-content").addEventListener("mouseleave", function() {
        images.forEach(img => img.style.display = "none");
    });
});
</script>

<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%"; // or any width you want
    document.body.classList.add('lock-scroll'); // Lock scroll
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%"; // or any width you want
    document.body.classList.remove('lock-scroll'); // Unlock scroll
}
</script>

<script>
// Function to check if an element is visible in the viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
    );
}

// Add scroll event listener
window.addEventListener('scroll', () => {
    const cards = document.querySelectorAll('.card');
    cards.forEach((card) => {
        if (isInViewport(card)) {
            card.classList.add('visible'); // Add the visible class
        }
    });
});

// Trigger on load to show visible elements
window.addEventListener('load', () => {
    const cards = document.querySelectorAll('.card');
    cards.forEach((card) => {
        if (isInViewport(card)) {
            card.classList.add('visible'); // Add the visible class
        }
    });
});
</script>

<script>
// Select the elements you want to observe
const sections = document.querySelectorAll('');
const body = document.body;

// Create an intersection observer to detect when the element comes into view
const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Change body background color when section comes into view
            body.style.backgroundColor = 'black';
        } else {
            // Reset body background color when section is out of view
            body.style.backgroundColor = '';
        }
    });
}, {
    threshold: 0.25 // Trigger when 50% of the section is visible
});

// Start observing each section
sections.forEach(section => {
    observer.observe(section);
});
</script>


</html>