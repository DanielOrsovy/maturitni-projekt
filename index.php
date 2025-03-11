<?php
    include 'navbar.php'; 
?>
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osobní portfolio</title>
    <link rel="icon" 
        href="./obrazky/logo/bwlogo.svg"
        type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="./css/styles.css">

</head>

<body id="home">
    <div class="content">
        <nav id="navbar">
            <div id="logo"><a href="index.html"> <span class="text-primary"><img src="./obrazky/logo/bwlogo.svg" alt="logo" class="logo"> Osobní potrfolio</span></a></div>
            <ul>
                <li><a href="index.html"><i class="fa-solid fa-house"></i></a></li>
                <li><a href="obrazy.html">Obrazy</a></li>
                <li><a href="komiks.html?pg=1#showComic">Komiks</a></li>
                <li><a href="objednavka.html">Objednávka</a></li>
                <li><a href='o-me.html'>O mě</a></li>
            </ul>
        </nav>
        <div id="showcase">
            <div class="showcase-content">
                <h1 class="l-heading">Osobní portfolio</h1>
                <p class="lead">Vše od Daniela Oršového</p>
                <a href="#what" class="btn">Dozvědět se víc</a>
            </div>
        </div>

    </div>
    <section id="what">
        <div class="container">
            <h2 class="m-heading text-center">Najdete tu</h2>
            <div class="items">
                <div class="item">
                    <i class="fa-solid fa-book fa-2x" style="color: white;"></i>                    <div>
                        <h3>Psychoza</h3>
                        <p>Osobní komiks</p>
                    </div>
                </div>
                <div class="item">
                    <i class="fa-regular fa-image fa-2x" style="color: white"></i>                    <div>
                        <h3>Obrazy</h3>
                        <p>Moje obrazy které jsem nakreslil nebo namaloval</p>
                    </div>
                </div>
                <div class="item">
                    <i class="fa-solid fa-user fa-2x" style="color: white;"></i>                    <div>
                        <h3>Osobní informace</h3>
                        <p>Informace o mě</p>
                    </div>

                </div>


            </div>
        </div> 
    </section>

    <video width="500px" 
           height="400px" 
           controls="controls">
        <source src="./obrazky/reklama/reklama.mp4" 
                type="video/mp4" />
    </video>
    
    <footer id="footer" class="bg-dark text-center py-1">
        <div class="container">
            <p>Copyright &copy; 2024</p>
        </div>
    </footer>
<script>

    function debounce(func, wait = 20, immediate = true) {
        var timeout;
        return function () {
            var context = this, args = arguments;
            var later = function () {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    };

    const sliderImages = document.querySelectorAll('.item');

    function checkSlide() {
        
        sliderImages.forEach(sliderImage => {
            console.log("height",sliderImage.offsetTop);
            // half way through the image
            const slideInAt = (window.scrollY + window.innerHeight) - sliderImage.offsetHeight / 2;
            // bottom of the image
            const imageBottom = sliderImage.offsetTop + sliderImage.offsetHeight;
            const isHalfShown = slideInAt > sliderImage.offsetTop;
            const isNotScrolledPast = window.scrollY < imageBottom;
            if (isHalfShown && isNotScrolledPast) {
                sliderImage.classList.add('active');
            } else {
                sliderImage.classList.remove('active');
            }
        });
    }

    window.addEventListener('scroll', debounce(checkSlide));


</script>
</body>
</html>