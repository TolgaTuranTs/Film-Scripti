<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title><?php echo $baslik; ?></title>
    <META NAME="description" CONTENT="<?php echo $site_ayari->site_desc; ?>">
    <META NAME="keywords" CONTENT="<?php echo $key; ?>">
    <META NAME="author" CONTENT="<?php echo $site_ayari->site_yapimci; ?>">
    <!-- styles -->
    <link rel="stylesheet" href="<?php echo base_url('public/template'); ?>/styles/custom.css?versiyon=<?php echo time() ?>" />
</head>
<body>
<div class="container">

    <!-- Sol Alan Reklam-->
    <div class="ads160x600">
        <?php echo $reklam->sol; ?>
    </div>
    <!--#Sol Alan Reklam-->

    <!-- Sağ Alan Reklam -->
    <div class="ads160x600 ads-right">
        <?php echo $reklam->sag; ?>
    </div>
    <!--#Sağ Alan Reklam -->

    <!-- Header Alanı -->
    <div class="header">

        <!-- Header Yazısı -->
        <div class="header-text">
            <span>Sitemize hoşgeldin, Ziyaretçi! - Sitemize şimdi üye olabilir, Zaten üye iseniz giriş yapabilirsiniz.</span>
            Web sitemizde toplam 123 kategoride 2342 adet film ve 234242 yorum bulunuyor
        </div>
        <!--#Header Yazısı -->

        <!-- Header Reklam Alanı -->
        <div class="ads728x90">
            <?php echo $reklam->header; ?>
        </div>
        <!--#Header Reklam Alanı -->

        <!-- Logo Alanı -->
        <h1 class="logo">
            <a href="<?php echo site_url(); ?>" title="<?php echo $site_ayari->site_baslik; ?>">
                <img src="<?php echo base_url('public/template'); ?>/images/<?php echo $site_ayari->site_logo; ?>" alt="" />
            </a>
        </h1>
        <!--#Logo Alanı -->

        <!-- Sayfa ve Arama Alanı -->
        <div class="menu">
            <!-- Arama Alanı -->
            <?php echo form_open('ara'); ?>
            <div class="search">
                <input type="text" name="search" data-value="Aramak istediğiniz kelime .." />
            </div>
            <?php echo form_close(); ?>
            <!--#Arama Alanı -->
            <!-- Sayfalar Listesi -->
            <ul>
                <li>
                    <a href="<?php echo site_url(); ?>" title="<?php echo $site_ayari->site_baslik; ?>">Anasayfa</a>
                </li>
                <?php
                    foreach($sayfalar as $sayfa){
                ?>
                <li>
                    <a href="<?php echo site_url('sayfa/'.$sayfa['sayfa_seflink'].''); ?>" title="<?php echo $sayfa['sayfa_baslik']; ?>"><?php echo $sayfa['sayfa_baslik']; ?></a>
                </li>
                <?php } ?>
                <li>
                    <a href="<?php echo site_url('iletisim'); ?>" title="<?php echo $site_ayari->site_baslik; ?> İletişim Sayfası">İletişim</a>
                </li>
            </ul>
            <!--#Sayfalar Listesi -->
        </div>
        <!--#Sayfa ve Arama Alanı -->

    </div>
    <!--#Header Alanı -->