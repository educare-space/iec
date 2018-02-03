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
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bootstrap.min.css">
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
    <?php wp_footer(); ?>
</body>

</html>