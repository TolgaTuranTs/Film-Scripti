<?php defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunamamaktadır'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Coderthemes">
    <!-- App Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('public/admin/'); ?>images/favicon.ico">
    <!-- App title -->
    <title>Yönetim Paneli Girişi</title>
    <!-- App CSS -->
    <link href="<?php echo base_url('public/admin/'); ?>css/style.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url('public/admin/'); ?>js/modernizr.min.js"></script>
</head>
<body>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="account-bg">
        <div class="card-box m-b-0">
            <div class="text-xs-center m-t-20">
                <a href="index.html" class="logo">
                    <i class="zmdi zmdi-group-work icon-c-logo"></i>
                    <span>Yönetim Paneli</span>
                </a>
            </div>
            <div class="m-t-10 p-20">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h6 class="text-muted text-uppercase m-b-0 m-t-0">Giriş Formu</h6>
                    </div>
                </div>
                <form class="m-t-20" action="" method="POST">

                    <div class="form-group row">
                        <div class="col-xs-12">
                            <input class="form-control" name="email" type="email" required="" placeholder="Yönetici E-Mail Adresiniz">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required="" placeholder="Yönetici Şifreniz">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-custom">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup">Beni Hatırla</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center row m-t-10">
                        <div class="col-xs-12">
                            <button class="btn btn-success btn-block waves-effect waves-light" name="loginF" type="submit">Sisteme Giriş Yap</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

</body>
</html>