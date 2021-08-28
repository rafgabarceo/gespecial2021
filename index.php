<?php 
    session_start();
    require_once('../wp-blog-header.php');

    $query = new WP_Query(array('tag' => 'on-the-line'));
    
    if(!isset($query)){
        $_SESSION['articles'] = array(); // initialize array
    } else {
        $_SESSION['articles'] = $query;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta property="og:url" content="https://ge2021.thelasallian.com">
    <meta property=" og:type" content="website">
    <meta property="og:title" content="On the line: The LaSallian General Elections Special">
    <meta property="og:description" content="The LaSallian presents its annual General Elections Special.">
    <meta property="og:image" content="images/cover.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="On the line: The LaSallian General Elections Special">
    <meta name="twitter:image" content="https://ge2021.thelasallian.com/images/cover.png">
    <link href=" https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <?php include_once "modules/header.php"?>
    <section id="landing" style="margin-bottom: 5vh;" class="h-screen">
        <?php include_once "modules/landing.php" ?>
    </section>
    <section id="articles" class="py-28 h-auto">
        <?php include_once "modules/articles.php"?>
    </section>
    <sections id="offices" class="h-auto pt-16" style="background-color: #222222;">
        <?php include_once("modules/offices.php"); ?>
    </sections>
    <section id="fasttalk" class="bg-gray-700 h-auto pt-16">
        <?php include_once "modules/fastTalk.php"?>
    </section>
    <section id="voxpop" class="py-10 h-auto">
        <?php include_once "modules/voxpop.php"?>
    </section>
    <section id="offenses" class="py-10 h-auto bg-white">

    </section>
    <?php include_once "modules/footer.php"?>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/main.js"></script>
<script>
$('.carousel-vox').slick({
    infinite: true,
    slidesToShow: 3,
    lazyLoad: 'ondemand',
    arrows: true,
    prevArrow: $('.prev'),
    nextArrow: $('next'),
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                lazyload: 'ondemand'
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                lazyload: 'ondemand'
            }
        }
    ]
});
AOS.init();
</script>


</html>