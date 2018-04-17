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
            <p class="lead">Komunitas sosial dan pendidikan yang bertujuan membentuk dan mengembangkan<br>generasi muda muslim Indonesia yang
                profesional, beriman, dan berakhlak mulia.</p>
        </div>
    </section>
    <section class="program">
        <div class="container-fluid">
            <br><br>
            <h2 class="text-center text-uppercase h5"><small>Program Pelatihan</small></h2>
            <br><br>
            <div class="row">
                <div class="col">
                    <div class="card text-center">
                        <h3 class="card-header text-uppercase h5">Pemrograman Basic</h3>                          
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Proses Input dan Output</li>
                                <li class="list-group-item">Seleksi Kondisi dan Perulangan</li>
                                <li class="list-group-item">Array, Fungsi dan Prosedur</li>
                                <li class="list-group-item">Struktur/Record</li>
                            </ul>
                        <div class="card-footer text-muted">
                            8 Pertemuan x 5 Jam
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center">
                        <h3 class="card-header text-uppercase h5">Web UX/UI Design</h3>                          
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Adobe XD</li>
                                <li class="list-group-item">HTML</li>
                                <li class="list-group-item">CSS</li>
                                <li class="list-group-item">Javascript</li>
                            </ul>
                        <div class="card-footer text-muted">
                            8 Pertemuan x 5 Jam
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center">
                        <h3 class="card-header text-uppercase h5">Web Programming</h3>                          
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">PHP</li>
                                <li class="list-group-item">MySQL</li>
                                <li class="list-group-item">Javascript</li>
                                <li class="list-group-item">NodeJS</li>
                            </ul>
                        <div class="card-footer text-muted">
                            8 Pertemuan x 5 Jam
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center">
                        <h3 class="card-header text-uppercase h5">Web Framework</h3>                          
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Bootstrap 4</li>
                                <li class="list-group-item">Code Igniter</li>
                                <li class="list-group-item">WordPress</li>
                                <li class="list-group-item">Ghost</li>
                            </ul>
                        <div class="card-footer text-muted">
                            8 Pertemuan x 5 Jam
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">                
                <div class="col">
                    <div class="card text-center">
                        <h3 class="card-header text-uppercase h5">Java Basic</h3>                          
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Seleksi Kondisi</li>
                                <li class="list-group-item">Perulangan</li>
                                <li class="list-group-item">Object Oriented Procedure</li>
                                <li class="list-group-item">Pewarisan</li>
                                <li class="list-group-item">Array</li>
                            </ul>
                        <div class="card-footer text-muted">
                            8 Pertemuan x 5 Jam
                        </div>
                    </div>
                </div>
                <div class="col">                    
                    <div class="card text-center">
                        <h3 class="card-header text-uppercase h5">Java Intermediate</h3>                          
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Object Oriented Procedure</li>
                                <li class="list-group-item">Database</li>
                                <li class="list-group-item">Graphic User Interface</li>
                                <li class="list-group-item">Desktop App Development</li>
                                <li class="list-group-item">Mobile App Development</li>
                            </ul>
                        <div class="card-footer text-muted">
                            8 Pertemuan x 5 Jam
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-center">
                        <h3 class="card-header text-uppercase h5">Jaringan</h3>                          
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Topologi Jaringan</li>
                                <li class="list-group-item">Personal Area Network</li>
                                <li class="list-group-item">Local Area Network</li>
                                <li class="list-group-item">Wide Area Network</li>
                                <li class="list-group-item">Metropolitan Area Network</li>
                            </ul>
                        <div class="card-footer text-muted">
                            8 Pertemuan x 5 Jam
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
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
    <br><br><br>
    <hr>
    <p class="text-center">Islamic Educare - Jalan Sekeloa Timur No. 38</p>
    <?php wp_footer(); ?>
</body>

</html>