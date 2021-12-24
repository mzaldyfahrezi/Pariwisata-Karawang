<!-- <!DOCTYPE html>
<html>

<head>
    <title>Login admin karawang</title>
</head>

<body>
    <h1>Login Admin</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>

</html> -->


<!doctype html>
<html lang="en">

<head>
    <title>Login Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(assets/imgs/img/defaultblur.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section"><b>LOGIN ADMIN</b></h2>
                    <a href="<?php echo base_url('pariwisata') ?> ">
                        <img src="<?= base_url('assets/'); ?>imgs/img/navbar-karawang.svg" style="max-width: 250px;" />
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">

                        <form action="<?php echo base_url('login/aksi_login'); ?>" class="signin-form" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="forgot w-100 text-center">
                                    <!-- <a href="#">Forgot Password</a> -->
                                </div>
                            </div>
                        </form>
                        <br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo base_url('assets/bootstrap/'); ?>js/jquery.js"></script>
    <script src="<?php echo base_url('assets/bootstrap/'); ?>js/popper.js"></script>
    <script src="<?php echo base_url('assets/bootstrap/'); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/bootstrap/'); ?>js/main.js"></script>

</body>

</html>
