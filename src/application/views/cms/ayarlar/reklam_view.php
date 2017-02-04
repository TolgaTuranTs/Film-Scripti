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
        <!-- Reklam Ayarlar Formu -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Reklam Ayarlar Formu</h4>
                    <div class="row">
                        <?php echo form_open('Cms/Ayarlar/reklam'); ?>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Header Reklamı</label>
                                <textarea class="form-control" name="header" id="exampleTextarea" rows="3"><?php echo $reklam->header; ?></textarea>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Sponsor Reklamı</label>
                                <textarea class="form-control" name="sponsor" id="exampleTextarea" rows="3"><?php echo $reklam->sponsor; ?></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Sol Alan Reklam</label>
                                <textarea class="form-control" name="sol" id="exampleTextarea" rows="3"><?php echo $reklam->sol; ?></textarea>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Film Yükleniyor Reklam (İzle)</label>
                                <textarea class="form-control" name="yukleniyor" id="exampleTextarea" rows="3"><?php echo $reklam->yukleniyor; ?></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Sağ Alan Reklam</label>
                                <textarea class="form-control" name="sag" id="exampleTextarea" rows="3"><?php echo $reklam->sag; ?></textarea>
                            </fieldset>
                        </div>
                        <button style="width:100%;height:45px" type="submit" name="reklamayarF" class="btn btn-danger waves-effect waves-light">Reklam Ayarlarını Kaydet</button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!--#Reklam Ayarlar Formu -->
    </div>
</div>