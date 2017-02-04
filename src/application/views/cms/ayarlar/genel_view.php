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
        <!-- Site Genel Ayarlar Formu -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Site Genel Ayarlar Formu</h4>
                    <div class="row">
                        <?php echo form_open_multipart('Cms/Ayarlar/genel'); ?>
                            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Site Başlığı</label>
                                    <input type="text" name="site_baslik" class="form-control" id="exampleInputEmail1" value="<?php echo $site->site_baslik; ?>">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Site Seo Açıklaması</label>
                                    <textarea class="form-control" name="site_desc" id="exampleTextarea" rows="2"><?php echo $site->site_desc; ?></textarea>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Footer Yazısı</label>
                                    <textarea class="form-control" name="footer_yazisi" id="exampleTextarea" rows="2"><?php echo $site->footer_yazisi; ?></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Site Etiketleri</label>
                                    <input type="text" name="site_key" data-role="tagsinput" class="form-control" id="exampleInputEmail1" value="<?php echo $site->site_key; ?>">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Site Logosu</label>
                                    <input type="file" name="site_logo" class="form-control" id="exampleInputEmail1" value="<?php echo $site->site_logo; ?>">
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="exampleInputEmail1">Site Yapımcısı</label>
                                    <input type="text" name="site_yapimci" class="form-control" id="exampleInputEmail1" value="<?php echo $site->site_yapimci; ?>">
                                </fieldset>
                            </div>
                            <button style="width:100%;height:45px" type="submit" name="genelayarlarF" class="btn btn-danger waves-effect waves-light">Site Ayarlarını Güncelle</button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!--#Site Genel Ayarlar Formu -->
    </div>
</div>