<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&display=swap" rel="stylesheet">
    <style>
        /* Apply Nunito font to the entire body */
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
        }

        .slider {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            width: 100%;
            height: 800px;
            overflow: hidden;
            margin: 0 auto;
        }

        .slide {
            display: none;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Text overlay */
        .slider-text {
            position: absolute;
            top: 50%;
            left: 25%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: left;
            font-size: 18px;
            font-weight: 400;
        }

        /* Styling for headings */
h1 {
    font-family: 'Nunito', sans-serif;
    font-size: 100px;
    font-weight: 800;
    line-height: 90px;
    margin-left: 0px; /* Adjust as needed */
    color: #fff;
    white-space: pre-wrap; /* Allow for line breaks and preserve whitespace */
    width: 500px; /* Adjust the width as necessary */
}

p {
    font-family: Nunito;
font-size: 18px;
font-weight: 400;
line-height: 24.55px;
text-align: justified;
margin-left: 0px;

}

        /* Slide navigation container */
        .slide-nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: absolute;
            bottom: 20px;
            color: white;
            width: 90%;
            padding: 0 50px;
        }

        /* Slide navigation links */
        .slide-nav {
            display: flex;
            flex-wrap: wrap;
        }

        .slide-nav a {
            position: relative;
            margin: 0 80px;
            cursor: pointer;
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding-bottom: 5px;
        }

        /* White underline for all menu items */
        .slide-nav a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 200px;
            height: 2px;
            background-color: white;
            opacity: 1;
            transition: background-color 0.3s;
        }

        /* Hover effect to change the line color */
        .slide-nav a:hover::after {
            background-color: black;
        }

        /* Active effect to keep the line color black */
        .slide-nav a.active::after {
            background-color: black;
        }

        .arrow-buttons {
            display: flex;
            align-items: center;
        }

        .arrow-buttons button {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-color: #FFFFFF;
            color: black;
            border: 2px solid rgba(0, 0, 0, 0.1);
            cursor: pointer;
            margin: 0 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .arrow-buttons button:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        
        @media (max-width: 1024px) {
            .slider {
                height: 600px;
            }

            h1 {
                font-size: 50px;
                line-height: 60px;
            }

            .slider-text {
                font-size: 16px;
                top: 45%;
                left: 20%;
                transform: translate(-50%, -50%);
            }

            .slide-nav a {
                margin: 0 5px;
                font-size: 12px;
            }
        }

        @media (max-width: 768px) {
            .slider {
                height: 500px;
            }

            h1 {
                font-size: 46px;
                line-height: 40px;
            }

            .slider-text {
                font-size: 14px;
                top: 50%;
                left:35%;
                transform: translate(-50%, -50%);
            }

            .slide-nav-container {
                flex-direction: column;
                align-items: center;
            }

            .slide-nav a {
                margin: 5px 0;
                font-size: 12px;
            }

            .arrow-buttons button {
                width: 14px;
                height: 14px;
            }
        }

        @media (max-width: 480px) {
            .slider {
                height: 400px;
            }

            h1 {
                font-size: 22px;
                line-height: 22px;
            }

            .slider-text {
                font-size: 10px;
                top: 50%;
                left: 35%;
                transform: translate(-50%, -60%);
            }

            .slide-nav a {
                margin: 5px;
                font-size: 10px;
            }
        }

    </style>
</head>
<body>

<div class="slider">
    <div class="slide" style="background-image: url('https://dev.srlivingltd.co.uk/wp-content/uploads/2024/10/Bg-Image.png');">
        <div class="slider-text">
            <h1><?php the_field('heading_1'); ?></h1>
            <p><?php the_field('subheading_1'); ?></p>
        </div>
    </div>
    <div class="slide" style="background-image: url('https://dev.srlivingltd.co.uk/wp-content/uploads/2024/10/Bg-Image.png');">
        <div class="slider-text">
            <h1><?php the_field('heading_2'); ?></h1>
            <p><?php the_field('subheading_2'); ?></p>
        </div>
    </div>
    <div class="slide" style="background-image: url('https://dev.srlivingltd.co.uk/wp-content/uploads/2024/10/Bg-Image.png');">
        <div class="slider-text">
            <h1><?php the_field('heading_3'); ?></h1>
            <p><?php the_field('subheading_3'); ?></p>
        </div>
    </div>
    <div class="slide" style="background-image: url('https://dev.srlivingltd.co.uk/wp-content/uploads/2024/10/Bg-Image.png');">
        <div class="slider-text">
            <h1><?php the_field('heading_4'); ?></h1>
            <p><?php the_field('subheading_4'); ?></p>
        </div>
    </div>
</div>

<div class="slide-nav-container">
    <div class="slide-nav">
        <a class="slide1"><?php the_field('heading_1'); ?></a>
        <a class="slide2"><?php the_field('heading_2'); ?></a>
        <a class="slide3"><?php the_field('heading_3'); ?></a>
        <a class="slide4"><?php the_field('heading_4'); ?></a>
    </div>
    <div class="arrow-buttons">
        <button class="prev">&lt;</button>
        <button class="next">&gt;</button>
    </div>
</div>


<script>
    let currentSlide = 0;

    function showSlide(index) {
        const slides = document.getElementsByClassName('slide');
        const navLinks = document.querySelectorAll('.slide-nav a');
        const totalSlides = slides.length;

        if (index >= totalSlides) {
            currentSlide = 0;
        } else if (index < 0) {
            currentSlide = totalSlides - 1;
        } else {
            currentSlide = index;
        }

        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = 'none';
        }

        navLinks.forEach(link => link.classList.remove('active'));
        slides[currentSlide].style.display = 'block';
        navLinks[currentSlide].classList.add('active');
    }

    document.querySelector('.slide1').addEventListener('click', () => showSlide(0));
    document.querySelector('.slide2').addEventListener('click', () => showSlide(1));
    document.querySelector('.slide3').addEventListener('click', () => showSlide(2));
    document.querySelector('.slide4').addEventListener('click', () => showSlide(3));

    document.querySelector('.prev').addEventListener('click', () => showSlide(currentSlide - 1));
    document.querySelector('.next').addEventListener('click', () => showSlide(currentSlide + 1));

    showSlide(0);
</script>


<style>
    .slideshow-container {
        display: flex;
        overflow: hidden;
        max-width: 1440px; /* Centered container with max-width of 1440px */
        width: 100%; /* Full width up to 1440px */
        margin: 20px auto; /* Centered horizontally, margin on top and bottom */
    }

    /* Individual slide */
    .mySlides {
        display: flex;
        flex: 0 0 calc(25% - 20px); /* Show 4 slides, with space between */
        position: relative;
        transition: transform 0.5s ease;
        margin-right: 20px; /* Space between images */
    }

    .mySlides:last-child {
        margin-right: 0; /* Remove right margin for last slide */
    }

    /* Image styling */
    img {
        width: 100%;
        height: 400px; /* Image height */
        vertical-align: middle;
        transition: filter 0.5s ease;
    }

    /* Text overlay */
    .text {
        position: absolute;
        top: 50%; /* Center vertically */
        left: 50%; /* Center horizontally */
        transform: translate(-50%, -50%); /* Center the text */
        color: white;
        padding: 10px; /* Optional padding */
        opacity: 0; /* Hidden by default */
        transition: opacity 0.5s ease;
        text-align: center; /* Center text */
    }

    /* Hover effect */
    .mySlides:hover img {
        filter: blur(5px);
    }

    .mySlides:hover .text {
        opacity: 1; /* Show text on hover */
    }

    /* The dots/bullets/indicators */
    .gallery-dots {
        text-align: center;
        margin-top: 10px;
    }

    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
        background-color: #717171;
    }
</style>



<div class="slideshow-container">
    <div class="mySlides">
    <?php  $image = get_field('img1'); 
                    if ($image) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        <div class="text">Caption for Nature</div>
        <?php endif; ?>
    </div>
    <div class="mySlides">
        <?php  $image = get_field('img2'); 
                    if ($image) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        <div class="text">Caption for Nature</div>
        <?php endif; ?>
    </div>
    <div class="mySlides">
        <?php  $image = get_field('img3'); 
                    if ($image) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        <div class="text">Caption for Nature</div>
        <?php endif; ?>
    </div>
    <div class="mySlides">
        <?php  $image = get_field('img4'); 
                    if ($image) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        <div class="text">Caption for Nature</div>
        <?php endif; ?>
    </div>
</div>

<div class="gallery-dots">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
</div>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        
        if (n > slides.length) { slideIndex = 1; }
        if (n < 1) { slideIndex = slides.length; }

        for (let i = 0; i < slides.length; i++) {
            slides[i].style.transform = `translateX(-${(slideIndex - 1) * 25}%)`; // Adjust position
            slides[i].style.display = "block"; // Ensure all slides are visible
        }

        for (let i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        dots[slideIndex - 1].className += " active"; // Highlight current dot
    }
</script>

<style>
.testimonial-container {
            display: flex;
            flex-direction: row;
            width: 90%;
            max-width: 1200px;
            margin: 50px auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .testimonial-list {
            width: 30%;
            padding: 30px;
            border-right: 2px solid;
            border-image: linear-gradient(180deg, #FFFFFF 0%, #000000 47%, #FFFFFF 100%);
            border-image-slice: 1;
        }

        .testimonial-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            cursor: pointer;
            padding: 10px;
            transition: background-color 0.3s;
            border-radius: 5px;
        }

        .testimonial-item:hover {
            background-color: #e0e0e0;
        }

        .testimonial-item.active {
            background-color: #d0d0d0;
        }

        .testimonial-item img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
            mix-blend-mode: luminosity;
        }

        .testimonial-item .info {
            font-size: 14px;
        }

        .testimonial-item .info p {
            margin: 0;
        }

        .testimonial-item .info .name {
            font-weight: 500;
            font-size: 18px;
            font-family: 'Nunito', sans-serif;
            color: #000000;
        }

        .testimonial-item .info .position {
            color: #888;
            font-size: 14px;
        }

        .testimonial-details {
            width: 70%;
            padding: 20px;
        }

        .testimonial-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .testimonial-header h4 {
            margin: 0;
            font-family: 'Nunito', sans-serif;
            font-size: 24px;
            font-weight: 600;
        }

        .testimonial-details .rating {
            font-size: 20px;
            color: #FFD700;
            margin-left: 20px; /* Adds some space between the text and stars */
        }

        .testimonial-details .testimonial-content {
            font-family: 'Nunito', sans-serif;
            font-size: 14px;
            font-weight: 400;
            margin-bottom: 20px;
        }

        .testimonial-nav-buttons {
            display: flex;
            justify-content: flex-start;
            margin-top: 20px;
        }

        .testimonial-nav-buttons button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #e0e0e0;
            border: none;
            margin-right: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }

        .testimonial-nav-buttons button:hover {
            background-color: #d0d0d0;
        }

        /* Responsive Styles */
        @media (max-width: 1024px) {
            .testimonial-container {
                flex-direction: column;
                width: 95%;
            }

            .testimonial-list {
                width: 100%;
                border-right: none;
                border-bottom: 2px solid;
                padding: 20px;
            }

            .testimonial-details {
                width: 100%;
                padding: 20px;
            }

            .testimonial-header h4 {
                font-size: 20px;
            }

            .testimonial-details .testimonial-content {
                font-size: 13px;
            }

            .testimonial-item .info .name {
                font-size: 16px;
            }

            .testimonial-item .info .position {
                font-size: 13px;
            }
        }

        @media (max-width: 768px) {
            .testimonial-container {
                margin: 30px auto;
            }

            .testimonial-header h4 {
                font-size: 18px;
            }

            .testimonial-details .rating {
                font-size: 18px;
            }

            .testimonial-details .testimonial-content {
                font-size: 12px;
            }

            .testimonial-nav-buttons button {
                width: 35px;
                height: 35px;
            }

            .testimonial-item img {
                width: 40px;
                height: 40px;
            }
        }

        @media (max-width: 480px) {
            .testimonial-header h4 {
                font-size: 16px;
            }

            .testimonial-details .rating {
                font-size: 16px;
            }

            .testimonial-details .testimonial-content {
                font-size: 12px;
            }

            .testimonial-nav-buttons button {
                width: 30px;
                height: 30px;
            }

            .testimonial-item img {
                width: 35px;
                height: 35px;
            }

            .testimonial-item .info .name {
                font-size: 14px;
            }

            .testimonial-item .info .position {
                font-size: 12px;
            }
        }

    </style>
</head>
<body>

<div class="testimonial-container">
    <div class="testimonial-list">
        <div class="testimonial-item active" data-index="0">
            
           <?php
$image = get_field('client_images');
    echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
?>

            <div class="info">
                <p class="name">
    <?php
    $client_name = get_field('client_name');
    if ($client_name) :
        echo esc_html($client_name);
    else :
        echo 'Default Name';
    endif;
    ?>
</p>

   <p class="position">
    <?php
    $client_name = get_field('position');
    if ($client_name) :
        echo esc_html($client_name);
    else :
        echo 'Default Name';
    endif;
    ?>
</p>
            </div>
        </div>
        <div class="testimonial-item" data-index="1">
            
            <?php
$image = get_field('client_images1');
    echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
?>
            <div class="info">
                                <p class="name">
    <?php
    $client_name = get_field('client_name1');
    if ($client_name) :
        echo esc_html($client_name);
    else :
        echo 'Default Name';
    endif;
    ?>
</p>
   <p class="position">
    <?php
    $client_name = get_field('position1');
    if ($client_name) :
        echo esc_html($client_name);
    else :
        echo 'Default Name';
    endif;
    ?>
</p>
            </div>
        </div>
    </div>
    
    <div class="testimonial-details">
        <h2>Testimonials</h2>
        <div class="testimonial-header">
            <h4>It was a great experience!</h4>
            <div class="rating">★★★★★</div>
        </div>
           <p class="testimonial-content">
    <?php
    $client_name = get_field('client_feedback');
    if ($client_name) :
        echo esc_html($client_name);
    else :
        echo 'Default Name';
    endif;
    ?>
</p>
           <p class="testimonial-content">
    <?php
    $client_name = get_field('client_feedback1');
    if ($client_name) :
        echo esc_html($client_name);
    else :
        echo 'Default Name';
    endif;
    ?>
</p>
        <div class="testimonial-nav-buttons">
            <button class="prev">&lt;</button>
            <button class="next">&gt;</button>
        </div>
    </div>
</div>

<script>


    let currentIndex = 0;

    const testimonialItems = document.querySelectorAll('.testimonial-item');
    const testimonialContent = document.querySelector('.testimonial-content');
    const testimonialRating = document.querySelector('.rating');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');

    function updateTestimonial(index) {
        testimonialItems.forEach(item => item.classList.remove('active'));
        testimonialItems[index].classList.add('active');
        testimonialContent.textContent = testimonials[index].content;
        testimonialRating.textContent = testimonials[index].rating;
    }

    function prevTestimonial() {
        currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
        updateTestimonial(currentIndex);
    }

    function nextTestimonial() {
        currentIndex = (currentIndex + 1) % testimonials.length;
        updateTestimonial(currentIndex);
    }

    prevButton.addEventListener('click', prevTestimonial);
    nextButton.addEventListener('click', nextTestimonial);

    testimonialItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            currentIndex = index;
            updateTestimonial(index);
        });
    });

    // Initialize with the first testimonial
    updateTestimonial(currentIndex);
</script>

</body>
</html>