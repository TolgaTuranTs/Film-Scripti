<?php defined('BASEPATH') OR exit ('Bu Sayfaya Giriş İzniniz Bulunamamaktadır'); ?>
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
        <title><?php echo $title; ?></title>
        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="<?php echo base_url('public/admin/'); ?>plugins/morris/morris.css">
        <!-- Switchery css -->
        <link href="<?php echo base_url('public/admin/'); ?>plugins/switchery/switchery.min.css" rel="stylesheet"/>
        <!-- Etiket -->
        <link href="<?php echo base_url('public/admin/'); ?>plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet"/>
        <!-- Data Table -->
        <link href="<?php echo base_url('public/admin/'); ?>plugins/datatables/dataTables.bootstrap4.min.css"rel="stylesheet" type="text/css"/>
        <!-- App CSS -->
        <link href="<?php echo base_url('public/admin/'); ?>css/style.css" rel="stylesheet" type="text/css"/>
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- Modernizr js -->
        <script src="<?php echo base_url('public/admin/'); ?>js/modernizr.min.js"></script>
    </head>
<body>
<!-- Header Alanı -->
<header id="topnav">
    <!-- Üst Alan -->
    <div class="topbar-main">
        <div class="container">

            <!-- Logo Alanı -->
            <div class="topbar-left">
                <a href="<?php echo site_url('Cms'); ?>" class="logo">
                    <i class="zmdi zmdi-group-work icon-c-logo"></i>
                    <span>Yönetim Paneli</span>
                </a>
            </div>
            <!-- Logo Alanı -->

            <!-- Head Menüleri -->
            <div class="menu-extras">
                <ul class="nav navbar-nav pull-right">

                    <!-- Mobil Menü -->
                    <li class="nav-item">
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </li>
                    <!--#Mobil Menü -->

                    <!-- Profil Alanı -->
                    <li class="nav-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user"
                           data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="<?php echo base_url('public/admin/'); ?>images/no-avatar.png" alt="user" class="img-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow profile-dropdown" aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow">
                                    <small>Hoşgeldin,Patron</small>
                                </h5>
                            </div>
                            <a href="<?php echo site_url('Cms/profil'); ?>" class="dropdown-item notify-item">
                                <i class="ion-android-social-user"></i> <span>Kişisel Profilim</span>
                            </a>
                            <a href="<?php echo site_url('Cms/sifre-duzenle'); ?>" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-lock-open"></i> <span>Şifremi Değiştir</span>
                            </a>
                            <a href="<?php echo site_url('Cms/cikis'); ?>" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-power"></i> <span>Oturumu Sonlandır</span>
                            </a>
                        </div>
                    </li>
                    <!--#Profil Alanı -->
                </ul>
            </div>
            <div class="clearfix"></div>
            <!--#Head Menüleri -->
        </div>
    </div>
    <!--#Üst Alan -->

    <!-- Menü Alanı -->
    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <ul class="navigation-menu">

                    <li>
                        <a href="<?php echo site_url('Cms'); ?>" title="Anasayfa">
                            <i class="ion-home"></i>
                            <span> Anasayfa </span>
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="<?php echo site_url('Cms/Ayarlar/genel'); ?>" title="Site Ayarları">
                            <i class="ion-settings"></i>
                            <span> Site Ayarları </span>
                        </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="<?php echo site_url('Cms/Ayarlar/genel'); ?>">Genel Ayarlar</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('Cms/Ayarlar/reklam'); ?>">Reklam Ayarları</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('Cms/Ayarlar/cache'); ?>">Cache Ayarları</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="<?php echo site_url('Cms/Kategori'); ?>">
                            <i class="ion-folder"></i>
                            <span> Kategoriler Paneli </span>
                        </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="<?php echo site_url('Cms/Kategori/ekle'); ?>">Kategori Ekle</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('Cms/Kategori'); ?>">Kategori İşlemleri</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="<?php echo site_url('Cms/Sayfa'); ?>">
                            <i class="ion-document"></i>
                            <span> Sayfa Paneli </span>
                        </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="<?php echo site_url('Cms/Sayfa/ekle'); ?>">Sayfa Ekle</a>

                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('Cms/Sayfa'); ?>">Sayfa İşlemleri</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="<?php echo site_url('Cms/Film'); ?>">
                            <i class="ion-document-text"></i>
                            <span> Film Paneli </span>
                        </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="<?php echo site_url('Cms/Film/ekle'); ?>">Film Ekle</a>

                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('Cms/Film'); ?>">Film İşlemleri</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo site_url('Cms/Yorum'); ?>" title="Anasayfa">
                            <i class="ion-document-text"></i>
                            <span> Yorum Paneli </span>
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="<?php echo site_url('Cms/Slider'); ?>">
                            <i class="ion-document-text"></i>
                            <span> Slider Paneli </span>
                        </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="<?php echo site_url('Cms/Slider/ekle'); ?>">Slider Ekle</a>

                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('Cms/Slider'); ?>">Slider İşlemleri</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo site_url('Cms/iletisim'); ?>" title="İletişim Paneli">
                            <i class="ion-document-text"></i>
                            <span> İletişim Paneli </span>
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </div>
    <!--$Menü Alanı -->


</header>
<!--#Header Alanı -->