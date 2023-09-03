<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Add Bootstrap CSS from a CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Include your existing styles here */
        <?php 
        include("style.php");
        ?>

        /* Additional CSS for responsiveness */
        /* Adjustments for smaller screens */
        @media (max-width: 768px) {
            .logo {
                font-size: 20px; /* Adjust the logo font size for smaller screens */
            }

            .nav-list {
                flex-direction: column; /* Stack navigation items vertically on small screens */
                align-items: center; /* Center align navigation items on small screens */
            }

            .nav-list li {
                margin-bottom: 10px; /* Add some spacing between navigation items on small screens */
            }
        }
    </style>
</head>
<body>
<header>
    <div class="logo"><span>Al</span>-Ahmed.Com</div>
    <!-- Add a toggle button for small screens -->
    <nav>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav-list collapse navbar-collapse" id="navbarNav">
            <li><a href="#home" style="--a:1;" class="active">Home</a></li>
            <li><a href="#about" style="--a:2;">About</a></li>
            <li><a href="#services" style="--a:3;">Services</a></li>
            <li><a href="#portfolio" style="--a:4;">Portfolio</a></li>
            <li><a href="#contact" style="--a:5;">Contact</a></li>
        </ul>
    </nav>
</header>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
