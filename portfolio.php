<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Add Bootstrap CSS from a CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

        <style>
    /* Include your existing styles here */
    <?php 
    include("style.php");
    ?>

    /* Center-align the heading on mobile devices */
    @media (max-width: 768px) {
        .ooo {
            text-align: center;
        }
        .box {
            margin: 0;
            padding: 20px;
            text-align: center;
        }
    }

    @media (min-width: 769px) and (max-width: 1024px) {
        .slick-slide {
            margin: 0 10px; /* Adjust the margin as needed */
        }
    }

    /* Adjustments for smaller screens like iPad */
    @media (max-width: 1024px) {
        .slider {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .box {
            width: 80%;
            margin: 0 auto 20px;
        }
    }
</style>
</head>
<body>

<section class="home4">
        <h3 id="portfolio" class="aaa">Portfolio</h3>
        <figure class="snip1157">
            <blockquote>Ahmed : You know sometimes when I'm talking, my words can't keep up with my thoughts... I wonder
                why we think faster than we speak. Hobbes: Probably so we can think twice.
                <div class="arrow"></div>
            </blockquote>
            <img src="img/s1.jpeg" alt="sq-sample3" />
            <div class="author">
                <h5>Hafiz Ahmed ALi Ansari<span> Graphics Designer</span></h5>
            </div>
        </figure>
        <figure class="snip1157 hover">
            <blockquote>Thank you. before I begin, I'd like everyone to notice that my report is in a professional,
                clear plastic binder...When a report looks this good, you know it'll get an A. That's a tip kids. Write
                it down.
                <div class="arrow"></div>
            </blockquote>
            <img src="img/s2.png" alt="sq-sample27" />
            <div class="author">
                <h5>Hafiz Ahmed ALi Ansari<span> Video Editer</span></h5>
            </div>
        </figure>
        <figure class="snip1157">
            <blockquote>My behaviour is addictive functioning in a disease process of toxic co-dependency. I need
                holistic healing and wellness before I'll accept any responsibility for my actions.
                <div class="arrow"></div>
            </blockquote>
            <img src="img/s3.png" alt="sq-sample17" />
            <div class="author">
                <h5>Hafiz Ahmed ALi Ansari<span> Web Developer</span></h5>
            </div>
        </figure>
    </section>


</body>

</html>

