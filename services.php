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
            margin-top : 300px;
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
            align-items: center;
        }
        .box {
            width: 80%;
            margin: 0px 20px;
        }
    }
    #services{
            margin-top: 130px;
        }
        .row .box{
            margin-left : 20px;

        }
</style>
</head>
<body>
<section id="services" class="home3">

    <div class="container">
    <h3 class="ooo mt-5">Our Services</h3>
        <div class="row slider">
            <div class="box">
                <img src="img/s1.jpeg">
                <h3>Graphics Designing</h3>
                <p>Graphic design is a craft where professionals create visual content to communicate messages.</p>
                <div class="btn-box">
                    <a href="#">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="img/s2.png">
                <h3>Video Editing</h3>
                <p>Video editors transform raw clips and video footage into high-quality finished videos used to
                    inform, engage,</p>
                <div class="btn-box">
                    <a href="#">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="img/s3.png">
                <h3>Web Development</h3>
                <p>Web development, also known as website development, refers to the tasks associated with creating.
                </p>
                <div class="btn-box">
                    <a href="#">See More</a>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.slider').slick({
                arrows: true,
                dots: true,
                autoplay: true,
                autoplaySpeed: 2000,
                slidesToShow: 1,
                slidesToScroll: 1,
                variableWidth: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            variableWidth: false
                        }
                    }
                ]
            });
        });


    </script>
</body>

</html>
