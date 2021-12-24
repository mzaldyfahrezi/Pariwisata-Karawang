<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistem Informasi Pariwisata Karawang</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet" />
    <link href="<?= base_url('assets/'); ?>css/index-styles.css" rel="stylesheet" />

    <!-- Carousel -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/carousel/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/carousel/') ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/carousel/') ?>css/style.css">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="<?= base_url('assets/'); ?>imgs/img/navbar-karawang.svg" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Sejarah</a></li>
                    <li class="nav-item"><a class="nav-link" href="#wisata">Wisata</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>

                    <li class="nav-item">
                        <a class="btn btn-warning mt-1" href="<?= base_url('dashboard'); ?>">
                            
                            <?php if ($this->session->userdata('status') == 'login') {
                                echo '<i class="fa fa-user"></i> ' .
                                    $this->session->userdata('nama');
                            } else {
                                echo '<i class="fa fa-login"></i> Login';
                            }
                            ?>

                        </a>


                    </li>

                    <li class="nav-item"><a class="nav-link" href="#contact"></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <!-- <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Our Studio!</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
        </div>
    </header> -->

    <!-- Carousel -->
    <div class="home-slider owl-carousel js-fullheight">
        <?php foreach ($satasa as $c) : ?>
            <div class="slider-item js-fullheight" style="background-image:url(<?= base_url('assets/upload/') . $c['image']; ?>);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>Pariwisata Karawang</h2>
                                <h1 class="mb-3 text-white"><a href="#wisata"><?= $c['nama_tempat']; ?></a></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/'); ?>js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <!-- <script src="<?= base_url('assets/') ?>bootstrap/js/jquery.js"></script>
    <script src="<?= base_url('assets/') ?>bootstrap/js/popper.js"></script>
    <script src="<?= base_url('assets/') ?>bootstrap/js/bootstrap.js"></script> -->

    <!-- Carousel JS -->
    <script src="<?= base_url('assets/carousel/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/carousel/') ?>js/popper.js"></script>
    <script src="<?= base_url('assets/carousel/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/carousel/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/carousel/') ?>js/main.js"></script>
</body>

</html>
