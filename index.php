<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:url" content="https://islamiceducare.org">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Islamic Educare">
    <meta property="og:description" content="Komunitas sosial dan pendidikan yang bertujuan membentuk dan mengembangkan generasi muda muslim Indonesia yang profesional, beriman, dan berakhlak mulia.">
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/screenshot.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@educare_comm">
    <meta name="twitter:creator" content="@educare_comm">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <?php wp_head(); ?>

    <title>Islamic Educare - Sebuah komunitas sosial dan pendidikan di Bandung</title>
</head>

<body>

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Islamic Educare</h1>
            <p class="lead text-muted">Komunitas sosial dan pendidikan yang bertujuan membentuk dan mengembangkan<br>generasi muda muslim Indonesia yang
                profesional, beriman, dan berakhlak mulia.</p>
        </div>
    </section>
    <section class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <hr>
    <p class="text-center">Islamic Educare - Jalan Sekeloa Timur No. 38</p>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <?php wp_footer(); ?>
</body>

</html>