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
        .home2{
            align-items : center;
            margin-top : 100px;
        }
        
       

        .liquid-shape {
            display: none; /* Hide the liquid shape on small screens */
        }

        @media (min-width: 768px) {
            .liquid-shape {
                display: block;
                display : inline-block;
                 /* Show the liquid shape on screens larger than 768px */
            }
        } 
        #about{
            margin-top: 10px;
        }

    </style>
</head>
<body>
    
<section id="about" class="home2">
        <div class="home-image">
            <div class="img-box">
                <img src="img/m.png" alt="" srcset="">
            </div>
            <div class="liquid-shape">
                <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="100%" id="blobSvg">
                    <path fill="#12f7ff">
                        <animate attributeName="d" dur="10000ms" repeatCount="indefinite" values="M442,312.5Q444,375,399,426Q354,477,288.5,459Q223,441,160,433.5Q97,426,77.5,366Q58,306,49,247Q40,188,84.5,149.5Q129,111,172.5,62Q216,13,275,39Q334,65,371.5,106.5Q409,148,424.5,199Q440,250,442,312.5Z;
        
                        M399,293.5Q385,337,358.5,383.5Q332,430,278,430.5Q224,431,178.5,408Q133,385,109.5,341.5Q86,298,59,242Q32,186,75.5,142Q119,98,173,93Q227,88,274,91.5Q321,95,359.5,125Q398,155,405.5,202.5Q413,250,399,293.5Z;
        
                        M462.5,315.5Q454,381,403.5,429Q353,477,286,471.5Q219,466,172.5,429.5Q126,393,95.5,348.5Q65,304,67,250.5Q69,197,98,152.5Q127,108,173,73Q219,38,285,33Q351,28,401.5,74Q452,120,461.5,185Q471,250,462.5,315.5Z;
        
                        M439.5,297.5Q398,345,370.5,399Q343,453,281.5,456Q220,459,182,415.5Q144,372,105,338Q66,304,75,252.5Q84,201,105.5,154.5Q127,108,177.5,102.5Q228,97,280.5,82.5Q333,68,380,102Q427,136,454,193Q481,250,439.5,297.5Z;
        
                        M449.5,310.5Q438,371,390.5,412Q343,453,283.5,440Q224,427,155.5,433Q87,439,50.5,379Q14,319,29.5,254.5Q45,190,70.5,131Q96,72,159.5,67.5Q223,63,276,70Q329,77,363.5,116Q398,155,429.5,202.5Q461,250,449.5,310.5Z;
        
                        M406.5,291.5Q379,333,358,387Q337,441,282,425Q227,409,187,389Q147,369,122.5,332Q98,295,70.5,242Q43,189,89,153Q135,117,179,91Q223,65,283,56Q343,47,379.5,95.5Q416,144,425,197Q434,250,406.5,291.5Z;
                        "></animate>
                    </path>
                </svg>
            </div>

            <div class="liquid-shape">
                <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="100%" id="blobSvg">
                    <path fill="#12f7ff">
                        <animate attributeName="d" dur="10000ms" repeatCount="indefinite" values="M442,312.5Q444,375,399,426Q354,477,288.5,459Q223,441,160,433.5Q97,426,77.5,366Q58,306,49,247Q40,188,84.5,149.5Q129,111,172.5,62Q216,13,275,39Q334,65,371.5,106.5Q409,148,424.5,199Q440,250,442,312.5Z;
        
                        M399,293.5Q385,337,358.5,383.5Q332,430,278,430.5Q224,431,178.5,408Q133,385,109.5,341.5Q86,298,59,242Q32,186,75.5,142Q119,98,173,93Q227,88,274,91.5Q321,95,359.5,125Q398,155,405.5,202.5Q413,250,399,293.5Z;
        
                        M462.5,315.5Q454,381,403.5,429Q353,477,286,471.5Q219,466,172.5,429.5Q126,393,95.5,348.5Q65,304,67,250.5Q69,197,98,152.5Q127,108,173,73Q219,38,285,33Q351,28,401.5,74Q452,120,461.5,185Q471,250,462.5,315.5Z;
        
                        M439.5,297.5Q398,345,370.5,399Q343,453,281.5,456Q220,459,182,415.5Q144,372,105,338Q66,304,75,252.5Q84,201,105.5,154.5Q127,108,177.5,102.5Q228,97,280.5,82.5Q333,68,380,102Q427,136,454,193Q481,250,439.5,297.5Z;
        
                        M449.5,310.5Q438,371,390.5,412Q343,453,283.5,440Q224,427,155.5,433Q87,439,50.5,379Q14,319,29.5,254.5Q45,190,70.5,131Q96,72,159.5,67.5Q223,63,276,70Q329,77,363.5,116Q398,155,429.5,202.5Q461,250,449.5,310.5Z;
        
                        M406.5,291.5Q379,333,358,387Q337,441,282,425Q227,409,187,389Q147,369,122.5,332Q98,295,70.5,242Q43,189,89,153Q135,117,179,91Q223,65,283,56Q343,47,379.5,95.5Q416,144,425,197Q434,250,406.5,291.5Z;
                        "></animate>
                    </path>
                </svg>
            </div>
        </div>
        <div class="home-content2">
            <h1>About my Gfx</h1>
            <h3>Graphics Designing</h3>
            <p>Graphic designers create visual communications such as adverts, branding, publicity materials and
                magazine layouts. Graphic designers (who may also be known as graphic artists) utilise graphic design
                skills to create media products such as magazines, labels, advertising and signage...</p>
        </div>


        <div class="home-content2 mt-5" id="c3">
            <h1>About my Dev</h1>
            <h3>Website Development</h3>
            <p>Web development is the building and maintenance of websites; it's the work that happens behind the
                scenes...
                A Web Developer is a professional who is responsible for the design and construction of websites. They
                ensure that sites meet user expectations by ensuring they look good, run smoothly and offer easy access
                points with no loading issues between pages or error messages.
            </p>
        </div>
        <div class="home-image" id="c3">
            <div class="img-box">
                <img src="img/m.png" alt="" srcset="">
            </div>
            <div class="liquid-shape">
                <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="100%" id="blobSvg">
                    <path fill="#12f7ff">
                        <animate attributeName="d" dur="10000ms" repeatCount="indefinite" values="M442,312.5Q444,375,399,426Q354,477,288.5,459Q223,441,160,433.5Q97,426,77.5,366Q58,306,49,247Q40,188,84.5,149.5Q129,111,172.5,62Q216,13,275,39Q334,65,371.5,106.5Q409,148,424.5,199Q440,250,442,312.5Z;
        
                        M399,293.5Q385,337,358.5,383.5Q332,430,278,430.5Q224,431,178.5,408Q133,385,109.5,341.5Q86,298,59,242Q32,186,75.5,142Q119,98,173,93Q227,88,274,91.5Q321,95,359.5,125Q398,155,405.5,202.5Q413,250,399,293.5Z;
        
                        M462.5,315.5Q454,381,403.5,429Q353,477,286,471.5Q219,466,172.5,429.5Q126,393,95.5,348.5Q65,304,67,250.5Q69,197,98,152.5Q127,108,173,73Q219,38,285,33Q351,28,401.5,74Q452,120,461.5,185Q471,250,462.5,315.5Z;
        
                        M439.5,297.5Q398,345,370.5,399Q343,453,281.5,456Q220,459,182,415.5Q144,372,105,338Q66,304,75,252.5Q84,201,105.5,154.5Q127,108,177.5,102.5Q228,97,280.5,82.5Q333,68,380,102Q427,136,454,193Q481,250,439.5,297.5Z;
        
                        M449.5,310.5Q438,371,390.5,412Q343,453,283.5,440Q224,427,155.5,433Q87,439,50.5,379Q14,319,29.5,254.5Q45,190,70.5,131Q96,72,159.5,67.5Q223,63,276,70Q329,77,363.5,116Q398,155,429.5,202.5Q461,250,449.5,310.5Z;
        
                        M406.5,291.5Q379,333,358,387Q337,441,282,425Q227,409,187,389Q147,369,122.5,332Q98,295,70.5,242Q43,189,89,153Q135,117,179,91Q223,65,283,56Q343,47,379.5,95.5Q416,144,425,197Q434,250,406.5,291.5Z;
                        "></animate>
                    </path>
                </svg>
            </div>

            <div class="liquid-shape">
                <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="100%" id="blobSvg">
                    <path fill="#12f7ff">
                        <animate attributeName="d" dur="10000ms" repeatCount="indefinite" values="M442,312.5Q444,375,399,426Q354,477,288.5,459Q223,441,160,433.5Q97,426,77.5,366Q58,306,49,247Q40,188,84.5,149.5Q129,111,172.5,62Q216,13,275,39Q334,65,371.5,106.5Q409,148,424.5,199Q440,250,442,312.5Z;
        
                        M399,293.5Q385,337,358.5,383.5Q332,430,278,430.5Q224,431,178.5,408Q133,385,109.5,341.5Q86,298,59,242Q32,186,75.5,142Q119,98,173,93Q227,88,274,91.5Q321,95,359.5,125Q398,155,405.5,202.5Q413,250,399,293.5Z;
        
                        M462.5,315.5Q454,381,403.5,429Q353,477,286,471.5Q219,466,172.5,429.5Q126,393,95.5,348.5Q65,304,67,250.5Q69,197,98,152.5Q127,108,173,73Q219,38,285,33Q351,28,401.5,74Q452,120,461.5,185Q471,250,462.5,315.5Z;
        
                        M439.5,297.5Q398,345,370.5,399Q343,453,281.5,456Q220,459,182,415.5Q144,372,105,338Q66,304,75,252.5Q84,201,105.5,154.5Q127,108,177.5,102.5Q228,97,280.5,82.5Q333,68,380,102Q427,136,454,193Q481,250,439.5,297.5Z;
        
                        M449.5,310.5Q438,371,390.5,412Q343,453,283.5,440Q224,427,155.5,433Q87,439,50.5,379Q14,319,29.5,254.5Q45,190,70.5,131Q96,72,159.5,67.5Q223,63,276,70Q329,77,363.5,116Q398,155,429.5,202.5Q461,250,449.5,310.5Z;
        
                        M406.5,291.5Q379,333,358,387Q337,441,282,425Q227,409,187,389Q147,369,122.5,332Q98,295,70.5,242Q43,189,89,153Q135,117,179,91Q223,65,283,56Q343,47,379.5,95.5Q416,144,425,197Q434,250,406.5,291.5Z;
                        "></animate>
                    </path>
                </svg>
            </div>
        </div>
    </section>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
