<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<div class="wrapper">
    <div class="container">
        <!-- Başarılı ve Hatalı Bilgi Mesajları -->
        <?php if(!empty($basarili)){ ?>
            <div class="row">
                <div class="col-xs-12">
                    <div class="alert alert alert-success" role="alert">
                        <strong>Tebrikler ! </strong> <?php echo $basarili; ?>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php if(!empty($hatali)){ ?>
            <div class="row">
                <div class="col-xs-12">
                    <div class="alert alert-danger" role="alert">
                        <strong>Hata ! </strong><?php echo $hatali; ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!--#Başarılı ve Hatalı Bilgi Mesajları -->
        <!-- Profil Formu -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Profil Bilgilerimi Düzenle</h4>
                    <div class="row">
                        <form action="" method="POST">
                            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Kullanıcı E-Mail Adresiniz</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $bilgilerim->email; ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Adınız Soyadınız</label>
                                    <input type="text" name="adsoyad" class="form-control" id="exampleInputEmail1" value="<?php echo $bilgilerim->adsoyad; ?>">
                                </fieldset>
                            </div>
                            <button style="width:100%;height:45px" type="submit" name="profilF" class="btn btn-danger waves-effect waves-light">Bilgilerimi Güncelle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--#Profil Formu -->
    </div>
</div>