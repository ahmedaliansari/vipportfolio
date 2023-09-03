@import url('https://fonts.googleapis.com/css?family=Poppins: wght@100; 200; 300;400; 500; 600; 700; 800; 900& display=swap');
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);
@import url(https://fonts.googleapis.com/css?family=Raleway:400,800);

/* /media query here/ */
@media screen and (max-width: 768px) {
    header {
        padding: 10px 5%;
    }

    .nav-list a {
        font-size: 14px;
        padding: 10px 15px;
    }
}

@media screen and (max-width: 480px) {
    .home {
        grid-template-columns: 1fr;
    }

    .home-image {
        display: none;
    }

    .home-content,
    .home-content2 {
        text-align: center;
        margin-top: 2rem;
    }
}

/* /media query here/ */

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "poppins", sans-serif;
    list-style: none;
    scroll-behavior: smooth;
    text-decoration: none;
}

:root {
    --text-color: #f5f5f5;
    --hover-color: #12f7ff;
    --bg-color: #250821;
    --big-font: 2.5rem;
    --normal-font: 2rem;
    --neon-box-shadow: 0 0 .8rem #12f7ff;
    --h2-font: 3rem;
    --p-font: 1rem;
    --font-neon-text-shadow:
        0 0 10px rgba(18, 247, 255, 0.3),
        0 0 30px rgba(18, 247, 255, 0.3),
        0 0 40px rgba(18, 247, 255, 0.3),
        0 0 70px rgba(18, 247, 255, 0.3),
        0 0 80px rgba(18, 247, 255, 0.3),
        0 0 100px rgba(18, 247, 255, 0.3),
        0 0 150px rgba(18, 247, 255, 0.3),
}

body {
    background-color: var(--bg-color);
    color: var(--text-color);
}

header {
    position: fixed;
    width: 100%;
    top: 20px;
    right: 0;
    z-index: 50;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 10%;
    background: transparent;
    border-bottom: 1px solid transparent;
}

.logo {
    font-size: 26px;
    font-weight: 700;
    letter-spacing: 1px;
    animation: topToBottom 1s ease forwards;
}

span {
    color: var(--hover-color);
}

.nav-list {
    display: flex;
}

.nav-list a {
    display: inline;
    font-size: var(--p-font);
    color: var(--text-color);
    text-decoration: none;
    font-weight: 500;
    padding: 10px 27px;
    opacity: 0;
    animation: slideAnimate 1s ease forwards;
    animation-delay: calc(.2s*var(--a));
}

.nav-list a:hover {
    color: var(--hover-color);
    text-shadow:
        0 0 10px rgba(18, 247, 255, 0.6),
        0 0 30px rgba(18, 247, 255, 0.6),
        0 0 40px rgba(18, 247, 255, 0.6),
        0 0 70px rgba(18, 247, 255, 0.6),
        0 0 80px rgba(18, 247, 255, 0.6),
        0 0 100px rgba(18, 247, 255, 0.6),
        0 0 150px rgba(18, 247, 255, 0.6),
}

.nav-list a.active {
    color: var(--hover-color);
}

section {
    padding: 10px 10%;
}

.home {
    min-height: 100vh;
    height: 100%;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    grid-gap: 4rem;
}

.home-content h1 {
    font-size: var(--big-font);
    font-weight: 700;
    animation: leftToRight 1.5 ease forwards;
}

.home-content h3 {
    font-size: var(--normal-font);
    font-weight: 700;
    color: var(--hover-color);

    position: relative;
    text-shadow: var(--font-neon-text-shadow);
    animation: neon-animation 1.5s ease-in-out infinite alternate;
}
.home-content p {
    font-size: var(--p-font);
    color: #bdbdbd;
    line-height: 1.6;
}

.home-content p::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background: var(--bg-color);
    animation: showTop 2s ease forwards;
    animation-delay: 1s;
}

.info-box {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 320px;
    margin: 1rem 0 2rem;
}

.info-box .email-info {
    animation: leftToRight 4s ease alternate;
}

.info-box h5 {
    font-size: var(--p-font);
    font-weight: 600;
    color: var(--text-color);
}

.info-box span {
    font-size: .9rem;
    color: #bdbdbd;
}

.home-content .btn-box {
    display: flex;
    justify-content: space-between;
    width: 320px;
    height: 45px;
}

.home-content .btn-box a {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 150px;
    height: 100%;
    background: transparent;
    color: var(--hover-color);
    border: 2px solid var(--hover-color);
    font-size: var(--text-color);
    letter-spacing: 1px;
    font-weight: 600;
    overflow: hidden;
    transition: .6s;
    box-shadow: var(--neon-box-shadow);
    z-index: 1;
    position: relative;
    border-radius: 5px;
}

.btn-box a:hover {
    color: var(--bg-color);
}

.home-content .btn-box a::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    background: var(--hover-color);
    width: 0;
    z-index: -1;
    transition: .6s;
}

.home-content .btn-box a:hover::before {
    width: 100%;
}

.btn-box a:nth-child(1) {
    background: var(--hover-color);
    color: var(--bg-color);
    animation: leftToRight 4s ease forwards;
}

.btn-box a:nth-child(1)::before {
    background: var(--bg-color);
}

.btn-box a:nth-child(1):hover {
    color: var(--hover-color);
}

.btn-box a:nth-child(2) {
    animation: leftToRight 4s ease forwards;
}

.home-image {
    position: relative;
}

.img-box {
    text-align: center;
}

.img-box img {
    width: 100%;
    max-width: 300px;
    height: auto;
    margin-top: -320px;
    animation: topToBottom ease 3s forwards;
}

.liquid-shape {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
    top: -70px;
}

.liquid-shape:nth-child(2) {
    filter: blur(50px);
}

/* /KEY FRAMES/ */
@keyframes showTop {
    100% {
        width: 0;
    }
}

@keyframes neon-animation {
    from {
        opacity: 1.0;
        text-shadow: var(--font-neon-text-shadow);
    }

    to {
        opacity: 0.6;
        text-shadow: none;
    }
}

@keyframes topToBottom {
    0% {
        opacity: 0;
        transform: translate(-200px);
    }

    100% {
        opacity: 1;
        transform: translate(0);
    }
}

@keyframes slideAnimate {
    0% {
        opacity: 0;
        transform: translate(100px);
    }

    100% {
        opacity: 1;
        transform: translate(0);
    }
}

@keyframes leftToRight {
    0% {
        opacity: 0;
        transform: translate(100px);
    }

    100% {
        opacity: 1;
        transform: translate(0);
    }
}

.img-box2 {
    margin-top: -20rem;
}

.liquid-shape2 {
    position: absolute;
    width: 60%;
    height: 40%;
    z-index: -1;
    top: 20rem;
    left: -7rem
}

.liquid-shape2:nth-child(2) {
    filter: blur(50px);
}

.home2 {
    min-height: 100vh;
    height: 100%;
    width: 100%;
    display: grid;
    margin-top: -15rem;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    grid-gap: 4rem;
}
#c3{
    margin-top : 50px;
}

.home-content2 h1 {
    font-size: var(--big-font);
    font-weight: 700;
    animation: leftToRight 1.5 ease forwards;
}

.home-content2 h3 {
    font-size: var(--normal-font);
    font-weight: 700;
    color: var(--hover-color);

    position: relative;
    text-shadow: var(--font-neon-text-shadow);
    animation: neon-animation 1.5s ease-in-out infinite alternate;
}

.home-content2 p {
    font-size: var(--p-font);
    color: #bdbdbd;
    line-height: 1.6;
}

.home-content2 p::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background: var(--bg-color);
    animation: showTop 2s ease forwards;
    animation-delay: 1s;
}

/* /our services work/ */
.home3 {
    display: flex;
    transition: 0.5s;
}

.ooo {
    text-align : center;
    margin-top : 50px;
    animation: topToBottom 1s ease forwards;
    font-size: 45px;
    font-weight: 700;
    color: var(--hover-color);

    position: relative;
    text-shadow: var(--font-neon-text-shadow);
    animation: neon-animation 1.5s ease-in-out infinite alternate;
}

.slider {
    width: 70%;
    /* Set the width of the slider container */
    margin: 0 auto;
    /* Center the slider */
}

.box {
    padding: 25px 30px;
    text-align: center;
    border: 1px solid #ccc;
    justify-conatent : center;
    align-items : center;
    border: 2px solid var(--hover-color);
    box-shadow: var(--neon-box-shadow);
}

.box h3 {
    color: #12f7ff;
    font-size: 25px;
    padding-top: 20px;
}

.box p {
    font-size: var(--text-color);
    color: var(--text-color);
    padding-top: 20px;
    line-height: 25px;
}

.row {
    padding-top: 100px;
    width: 1000px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.box {
    width: 320px;
    height: 550px;
    background: transparent;
    border-radius: 20px;
    text-align: center;
    animation: leftToRight 5s ease forwards;
}

.box img {
    width: 250px;
}

.box img {
    border: 2px solid var(--hover-color);
    box-shadow: var(--neon-box-shadow);
    border-radius: 5px;
}

.box .btn {
    width: 150px;
    height: 40px;
}

.home3 .btn-box {
    display: flex;
    justify-content: space-between;
    width: 320px;
    height: 45px;
    margin: 30px 60px;
}

.home3 .btn-box a {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 150px;
    height: 100%;
    background: transparent;
    color: var(--hover-color);
    border: 2px solid var(--hover-color);
    font-size: var(--text-color);
    letter-spacing: 1px;
    font-weight: 600;
    overflow: hidden;
    transition: .6s;
    box-shadow: var(--neon-box-shadow);
    z-index: 1;
    position: relative;
    border-radius: 5px;
}

.btn-box a:hover {
    color: var(--bg-color);
}

.home3 .btn-box a::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    background: var(--hover-color);
    width: 0;
    z-index: -1;
    transition: .6s;
}

.btn-box a:hover::before {
    width: 100%;
}

.btn-box a:nth-child(1) {
    background: var(--hover-color);
    color: var(--bg-color);
    animation: leftToRight 4s ease forwards;
}

.btn-box a:nth-child(1)::before {
    background: var(--bg-color);
}

.btn-box a:nth-child(1):hover {
    color: var(--hover-color);
}

/* /our services work/ */


/* /portfolio/ */
.home4 {
    display: flex;
    transition: 0.5s;
    margin-top: 300px;

}

.aaa {
    margin: -150px 530px;
    animation: topToBottom 1s ease forwards;
    font-size: 45px;
    font-weight: 700;
    color: var(--hover-color);

    position: absolute;
    text-shadow: var(--font-neon-text-shadow);
    animation: neon-animation 1.5s ease-in-out infinite alternate;
}

figure.snip1157 {

    font-family: 'Raleway', Arial, sans-serif;
    position: relative;
    overflow: hidden;
    margin: 10px;
    min-width: 220px;
    max-width: 310px;
    height: 40vh;
    width: 100%;
    color: var(--text-color);
    text-align: left;
    border: 2px solid var(--hover-color);
    box-shadow: var(--neon-box-shadow);
    border-radius: 10px;
}

figure.snip1157 * {
    animation: topToBottom 5s ease forwards;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
    transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
}

figure.snip1157 img {
    max-width: 100%;
    vertical-align: middle;
    height: 90px;
    width: 90px;
    border-radius: 50%;
    margin: 40px 0 0 10px;
    border: 2px solid var(--hover-color);
    box-shadow: var(--neon-box-shadow);
}

figure.snip1157 blockquote {
    display: block;
    border-radius: 8px;
    position: relative;
    background-color: transparent;
    padding: 25px 50px 30px 50px;
    font-size: 0.8em;
    font-weight: 500;
    margin: 0;
    line-height: 1.6em;
    font-style: italic;
    border: 2px solid var(--hover-color);
    box-shadow: var(--neon-box-shadow);
}

figure.snip1157 blockquote:before,
figure.snip1157 blockquote:after {
    font-family: 'FontAwesome';
    content: "\201C";
    position: absolute;
    font-size: 50px;
    opacity: 0.3;
    font-style: normal;
}

figure.snip1157 blockquote:before {
    top: 25px;
    left: 20px;
    color: var(--hover-color);
    text-shadow: var(--neon-box-shadow);
}

figure.snip1157 blockquote:after {
    content: "\201D";
    right: 20px;
    bottom: 0;
    color: var(--hover-color);
    text-shadow: var(--neon-box-shadow);
}

figure.snip1157 .arrow {
    top: 100%;
    width: 0;
    height: 0;
    border-left: 0 solid transparent;
    border-right: 25px solid transparent;
    border-top: 25px solid var(--hover-color);
    margin: 0;
    position: absolute;
}

figure.snip1157 .author {
    position: absolute;
    bottom: 45px;
    padding: 0 10px 0 120px;
    margin: 0;
    text-transform: uppercase;
    color: var(--text-color);
    -webkit-transform: translateY(50%);
    transform: translateY(50%);
    z-index: -1;
    box-shadow: var(--neon-box-shadow);

}

figure.snip1157 .author h5 {
    opacity: 0.8;
    margin: 0;
    font-weight: 800;
}

figure.snip1157 .author h5 span {
    font-weight: 400;
    text-transform: none;
    padding-left: 5px;
}

/* Zoom effect on figure elements */
.home4 {
    display: flex;
    justify-content: space-around;
}

.snip1157 {
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.snip1157:hover {
    transform: scale(1.1);
}

/* Restyle the blockquote */
.blockquote {
    background: rgba(0, 0, 0, 0.7);
    color: var(--text-color);
    padding: 10px;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    opacity: 0;
    transform: translateY(100%);
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.snip1157:hover .blockquote {
    opacity: 1;
    transform: translateY(0);
}

/* /portfolio/ */
/* /contact us/ */
.bbb {
    margin: 100px auto;
    text-align : center;
    animation: topToBottom 1s ease forwards;
    font-size: 45px;
    font-weight: 700;
    color: var(--hover-color);

    position: relative;
    text-shadow: var(--font-neon-text-shadow);
    animation: neon-animation 1.5s ease-in-out infinite alternate;
}

form {
    border: 1px solid var(--hover-color);
    padding: 20px;
    border-radius: 5px;
    box-shadow: var(--neon-box-shadow);

}

label,
input,
textarea {
    display: block;
    margin-bottom: 10px;
    color: var(--hover-color);

}

input,
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid var(--hover-color);
    box-shadow: var(--neon-box-shadow);
    border-radius: 3px;
}
.contact{
    width: 1000px;
    margin-left: 125px;
}
.contact .btn-box {
    display: flex;
    justify-content: space-between;
    width: 500px;
    height: 45px;
    margin: 50px 100px;
}

.contact .btn-box a {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 500px;
    height: 100%;
    background: transparent;
    color: var(--hover-color);
    border: 2px solid var(--hover-color);
    font-size: var(--text-color);
    letter-spacing: 1px;
    font-weight: 600;
    overflow: hidden;
    transition: .6s;
    box-shadow: var(--neon-box-shadow);
    z-index: 1;
    position: relative;
    border-radius: 5px;
}

.contact .btn-box a:hover {
    color: var(--bg-color);
}

.contact .btn-box a::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    background: var(--hover-color);
    width: 0;
    z-index: -1;
    transition: .6s;
}

.contact .btn-box a:hover::before {
    width: 100%;
}
/* /contact us/ */

/* /footer/ */

.footer {
    background-color: var(--bg-color);
    color: white;
    padding: 50px 40px;
    margin-top: 150px;
    box-shadow: var(--neon-box-shadow);
    transition: opacity 0.3s ease, transform 0.3s ease;


}

.footer-content {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
    animation: leftToRight 4s ease forwards;
}

.footer-content:hover {
    color: var(--hover-color);
}

.footer-content a {
    text-decoration: none;
    color: var(--text-color);
    font-size: 14px;
    font-family: sans-serif;
}

.footer-content p {
    padding-top: 5px;
}

.footer-content a:hover {
    color: var(--hover-color);
}

.footer-logo {
    flex: 1;
    max-width: 250px;
    animation: topToBottom 4s ease forwards;
}

/* Rest of the styles */

.footer-social {
    flex: 1;
    max-width: 200px;

}

.footer-social h3 {
    font-size: 18px;
    margin-bottom: 15px;
}

.footer-social ul {
    list-style: none;
    padding: 0;
}

.footer-social ul li {
    margin-bottom: 10px;

}

.footer-social ul li a {
    text-decoration: none;
    color: var(--text-color);
    font-size: 20px;
    font-family: sans-serif;
}

.footer-social ul li a:hover {
    color: var(--hover-color);
}


.footer-social ul li a img {
    width: 30px;
    height: auto;
    margin: -5px 5px;
    text-decoration: none;
}

.footer-subscribe {
    flex: 2;
    max-width: 300px;
    animation: topToBottom 4s ease forwards;

}

.footer-subscribe h3 {
    font-size: 18px;
    margin-bottom: 15px;
}

.footer-subscribe p {
    font-size: 14px;
    opacity: 0.7;
}

.footer-subscribe form {
    display: flex;
}

.footer-subscribe input[type="email"] {
    flex: 2;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.footer-subscribe button {
    flex: 1;
    background-color: var(--hover-color);
    color: rgb(0, 0, 0);
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.footer-subscribe button:hover {
    background-color: var(--hover-color);
}

center {
    color: var(--hover-color);
    animation: topToBottom 4s ease forwards;
}

center a {
    text-decoration: none;
    color: var(--hover-color);
}
/* /footer/ */

/* /preloader/ */
#preloader {
    background: #000 url(img/social-icons/preloader.gif) no-repeat center center;
    background-size: 30%;
    height: 100vh;
    width: 100%;
    position: fixed;
    z-index: 100;
}
/* /preloader/ */

