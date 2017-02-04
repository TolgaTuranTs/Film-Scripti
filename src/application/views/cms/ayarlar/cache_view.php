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
        <!-- Site Cache Ayarlar Formu -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Site Genel Ayarlar Formu</h4>
                    <div class="row">
                        <?php echo form_open_multipart('Cms/Ayarlar/cache'); ?>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Site Başlığı</label>
                                <select name="cache_durum" class="form-control" id="exampleSelect1">
                                    <?php
                                        $durum = $cache->cache_durum;
                                        if($durum == 0){
                                    ?>
                                    <option value="0" selected>Cache Pasif Durumda</option>
                                    <option value="1">Cache Aktif Et</option>
                                    <?php }else{ ?>
                                    <option value="1" selected>Cache Aktif Durumda</option>
                                    <option value="0">Cache Pasif Hale Getir</option>
                                    <?php } ?>
                                </select>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Cache Dosyalarını Temizle</label>
                                <a href="<?php echo site_url('Cms/Ayarlar/cache_sil'); ?>" class="form-control" id="exampleSelect1" title="">Cache Dosyalarının Tümünü Temizle</a>
                            </fieldset>
                        </div>
                        <button style="width:100%;height:45px" type="submit" name="genelayarlarF" class="btn btn-danger waves-effect waves-light">Cache Ayarlarını Güncelle</button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!--#Site Cache Ayarlar Formu -->
    </div>
</div>