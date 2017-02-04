<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<div class="wrapper">
    <div class="container">

        <!-- Mini İstatistikler -->
        <div class="row" style="margin-top:20px">

            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="ion-folder pull-xs-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Toplam Sayfa</h6>
                    <h2 class="m-b-20" data-plugin="counterup"><?php echo $toplam_sayfa; ?></h2>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="ion-document-text pull-xs-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Toplam Filmler</h6>
                    <h2 class="m-b-20" data-plugin="counterup"><?php echo $toplam_filmler; ?></h2>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="ion-document pull-xs-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Toplam Kategori</h6>
                    <h2 class="m-b-20" data-plugin="counterup"><?php echo $toplam_kategori; ?></h2>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-rocket pull-xs-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Toplam İletişim</h6>
                    <h2 class="m-b-20" data-plugin="counterup"><?php echo $toplam_iletisim; ?></h2>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-rocket pull-xs-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Toplam Yorum</h6>
                    <h2 class="m-b-20" data-plugin="counterup"><?php echo $toplam_yorum; ?></h2>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-rocket pull-xs-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Toplam Slider</h6>
                    <h2 class="m-b-20" data-plugin="counterup"><?php echo $toplam_slider; ?></h2>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card-box tilebox-one">
                    <i class="icon-rocket pull-xs-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Bekleyen Yorum Onayı</h6>
                    <h2 class="m-b-20" data-plugin="counterup"><?php echo $onaysiz_yorum; ?></h2>
                </div>
            </div>
        </div>
        <!--#Mini İstatistikler -->

        <!-- Server Bilgileri -->
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="col-xs-12 col-md-3">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-20">Sunucu İp Adresi</h4>
                        <p class="font-600 m-b-5"><?php echo $_SERVER['SERVER_ADDR']; ?></p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-20">Sunucu İsmi</h4>
                        <p class="font-600 m-b-5"><?php echo $_SERVER['SERVER_NAME']; ?> </p>

                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-20">Server Protokol</h4>
                        <p class="font-600 m-b-5"><?php echo $_SERVER['SERVER_PROTOCOL']; ?> </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-20">Server Dizini</h4>
                        <p class="font-600 m-b-5"><?php echo $_SERVER['DOCUMENT_ROOT']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!--#Server Bilgileri -->

    </div>
</div>
