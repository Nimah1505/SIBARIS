
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <title>Form Login</title>

    <!-- Custom fonts for this template-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/sweet-alert.css">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <style type="text/css">
        .bg-login-image {
            border: 1px solid white;
            padding: 50px;
            background-image: url("<?= base_url('assets/img/2.png'); ?>");
            background-attachment: fixed
            background-position: 50px 150px;
            background-repeat: no-repeat;
            background-size: 50%;
            top: -10px;
            border-radius: 50px;
            left: 30%;
        }

        .bg-register-image {
            border: 1px solid white;
            padding: 50px;
            background-image: url("<?= base_url('assets/img/2.png'); ?>");
            background-attachment: fixed
            background-position: center;
            background-repeat: no-repeat;
            background-size: 40%;
            top: -10px;
            border-radius: 50px;
            left: 30%;
        }
        .outer-form-login {
            padding: 20px;
            background: #EEEEEE;
            position: relative;
            border-radius: 5px;
        }

        .logo-login {
            position: absolute;
            font-size: 35px;
            background: #21A957;
            color: #FFFFFF;
            padding: 10px 18px;
            top: -20px;
            border-radius: 50px;
            left: 40%;
}

    </style>
</head>


<body style="background: url(assets/img/1_5TRuG7tG0KrZJXKoFtHlSg.jpeg) no-repeat; background-size: cover;">

    <div class="container">

        <?= $contents; ?>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>