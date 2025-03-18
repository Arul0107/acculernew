<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Acculer Media | Get in Touch for Digital Solutions
    </title>
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
                <div class="contact-bg ps-0 pe-0 d-flex align-items-center justify-content-end">
                    <h1>Contact</h1>
                    <img src="assets/images/inner-banners/contact.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="contact-main">
        <div class="container-fluid">
            <div class="row">
                <div class="contact-bg ps-0 pe-0 d-flex align-items-center justify-content-end">
                    <img src="" alt="">
                    <h1>Contact</h1>
                </div>
            </div>
        </div>
    </section> -->

    <div class="contact_us_6">
        <div class="responsive-container-block container">
            <form class="form-box" method="post" action="https://enquiry.acculermedia.com/index.php">
                <div class="container-block form-wrapper">
                    <div class="mob-text">
                        <p class="text-blk contactus-head">
                            Get in Touch
                        </p>

                    </div>
                    <div class="responsive-container-block" id="i2cbk">
                        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i10mt-3">
                            <p class="text-blk input-title">
                                FIRST NAME
                            </p>
                            <input class="input" type="text" name="name" placeholder="Please enter first name...">
                        </div>
                        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ip1yp">
                            <p class="text-blk input-title">
                                EMAIL
                            </p>
                            <input class="input" type="email" name="email" placeholder="Please enter email...">
                        </div>
                        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ih9wi">
                            <p class="text-blk input-title">
                                PHONE NUMBER
                            </p>
                            <input class="input" type="text" name="mobile"
                                placeholder="Please enter phone number...">
                        </div>
                        <p>
                            <input type="hidden" name="ipaddress" value="<?php  echo $_SERVER['REMOTE_ADDR']; ?>"
                                class="form-control">
                            <input type="hidden" name="verificationcode" value="b8x2jscxpfyt" class="form-control">
                            <input type="hidden" name="website" value="<?php  
$pattern = '/\w+\..{2,3}(?:\..{2,3})?(?:$|(?=\/))/i';
if (preg_match($pattern, $_SERVER['SERVER_NAME'], $matches) === 1) {
    echo $matches[0];
} 
?>" class="form-control">
                        </p>
                        <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-3">
                            <p class="text-blk input-title">
                                WHAT DO YOU HAVE IN MIND ?
                            </p>
                            <textarea class="textinput" name="message" placeholder="Please enter query..."></textarea>
                        </div>
                    </div>
                    <button class="submit-btn" name="submitdata" value="submit">
                        Submit
                    </button>
                </div>
            </form>
            <div class="responsive-cell-block wk-desk-7 wk-ipadp-12 wk-tab-12 wk-mobile-12" id="i772w">
                <div class="map-part">
                    <p class="text-blk text-dblue map-contactus-head" id="w-c-s-fc_p-1-dm-id">
                        Reach us at
                    </p>
                    <div class="text-blk map-contactus-subhead mb-0">
                        <h4 class="fw-700 ">Acculer Media Technology India Pvt Ltd</h4>
                        <p class="">3rd Floor, Aruna Avanthika, NSR Rd, Janaki Nagar, Saibaba Colony,
                            Coimbatore,
                            Tamil Nadu 641011</p>
                        <p class=""><a tel="9360623765">+91 93606 23765</a> | <a tel="9042871124">+91 90428
                                71124</a>
                    </div>

                    <div class="map-box container-block p-0">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15664.696430565835!2d76.9369298!3d11.0255604!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8595ce8123937%3A0x6f146daa0cd9164c!2sAcculer%20Media%20Technology%20India%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1733218123708!5m2!1sen!2sin"
                            style="border:0; height:100%; width:100%;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <section class="loc-info">
        <div class="container-fluid">
            <div class="row">
                <div class="ps-0 pe-0">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15664.696430565835!2d76.9369298!3d11.0255604!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8595ce8123937%3A0x6f146daa0cd9164c!2sAcculer%20Media%20Technology%20India%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1733218123708!5m2!1sen!2sin"
                        style="border:0; height:600px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section> -->




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



</html>