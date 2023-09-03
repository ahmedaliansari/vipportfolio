<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
     <?php include("style.php") ?>
     #contact{
        margin-top: 100px;
     }
    </style>
    <body>
   
    <section id="contact" class="contact">
        <div class="container">
        <h3 class="bbb">Contact Us</h3>
            <form action="submit.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="text" id="name" name="email" required>
                <label for="text">Subject:</label>
                <input type="email" id="email" name="subject" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <div class="btn-box">
                    <a href="" type="submit" value="send" name="send">Submit Now</a>
                </div>
            </form>
        </div>
    </section>
    </body>
    </html>
