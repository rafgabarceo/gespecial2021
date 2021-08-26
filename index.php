<!DOCTYPE html>
<html lang="en">

<head>
    <title> The LaSallian | General Elections Special 2020 </title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/css.css">
</head>

<body>
    <?php include_once "modules/header.php"?>
    <section id="landing" class="flex items-center justify-center z-0">
        <?php include_once "modules/landing.php" ?>
    </section>
    <section id="articles">
        <?php include_once "modules/articles.php"?>
    </section>
    <section id="fasttalk">
        <!---Images only. no need for include no?-->
    </section>
    <section id="daily-tallies">
        <!---Images only. no need for include no?-->
    </section>
    <section id="headtohead">
        <?php include_once "modules/headtohead.php"?>
    </section>
    <section id="voxpop">
        <?php include_once "modules/voxpop.php"?>
    </section>
    <?php include_once "modules/footer.php"?>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="/js/main.js"></script>

</html>