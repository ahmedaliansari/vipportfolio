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
    @media (max-width: 768px) {
    /* Adjust styles for smaller screens here */
    .footer-contact {
        text-align: center;
        padding : 15px 0px; 
        font-size : 10px;
        /* Center align on smaller screens */
    }
    
    /* Add more adjustments as needed */
}
.submit button{
    width : 100px;
    height : 42px;
}

  
</style>
</head>
<body>

<footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <div class="logo"><span>Al</span>-Ahmed.Com</div>
                    <br>
                    <p>Assalam u Alaikum <br>Hey! <br> My Name is <br>Hafiz Ahmed Ali Ansari Graphics Designer & Web
                        Backend-Developer... <br> <br> </p>
                </div>
                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <br>
                    <a href="https://hafizahmedaliansari123@gmail.com" target="_blank">
                        <p>Email : hafizahmedaliansari123@gmail.com</p>
                    </a>
                    <a href="https://wa.me/923121057411/" target="_blank">
                        <p>Phone & Whatsapp : +92 312 1057411</p>
                    </a>
                    <a href="https://www.facebook.com/Hackers1231101" target="_blank">
                        <p>Facebook : Hafiz Ahmed Ali Ansari</p>
                    </a>
                    <a href="https://www.instagram.com/hafizahmed332/" target="_blank">
                        <p>Instagram : HafizZada332</p>
                    </a>
                    <a href="https://github.com/HafizZada/" target="_blank">
                        <p>Github : HafizZada</p>
                    </a>
                    <a href="https://www.linkedin.com/in/hafiz-ahmed-ali-ansari-114216253/" target="_blank">
                        <p>Linkdin : Hafiz Ahmed Ali Ansari</p>
                    </a>
                    <a href="https://twitter.com/hafizahmedalia3" target="_blank">
                        <p>Twitter : hafizahmedalia3</p>
                    </a>
                </div>
                <div class="footer-social">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/Hackers1231101" target="_blank"><img
                                    src="img/social-icons/1.png" alt="Facebook">Facebook</a></li>

                        <li><a href="https://twitter.com/hafizahmedalia3" target="_blank"><img
                                    src="img/social-icons/2.png" alt="Twitter">Twitter</a></li>

                        <li><a href="https://www.linkedin.com/in/hafiz-ahmed-ali-ansari-114216253/" target="_blank"><img
                                    src="img/social-icons/3.png" alt="linkedin">linkedin</a></li>

                        <li><a href="https://www.instagram.com/hafizahmed332/" target="_blank"><img
                                    src="img/social-icons/4.png" alt="Instagram">Instagram</a></li>

                        <li><a href=""><img src="img/social-icons/5.png" alt="Whatsapp" target="_blank">Whatsapp</a>
                        </li>

                    </ul>

                </div>
                <div class="footer-subscribe">
                    <h3>Subscribe</h3>
                    <p>Subscribe to our newsletter for updates...</p>
                    <p>Subscribe For Patnership Plans...</p>
                    <p>Subscribe For Mambership Plans...</p>
                    <p>Subscribe For Other Plans...</p>
                    <br>
                    <form action="#" class="submit">
                        <input type="email" placeholder="Enter your email">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <br>

        <center><a href="https://al-ahmed.netlify.app">@Al-Ahmed.Com | Hackers123@World.Com | 2023</a></center>
        <br>
        <center>Created By :&nbsp; Hafiz Ahmed Ali Ansari</center>
        <br>
        <center>Thanks For Visit My Website...</center>
    </footer>


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

        var loader = document.getElementById("preloader");
        window.addEventListener("load", function () {
            loader.style.display = "none";
        })
    </script>



</body>

</html>

