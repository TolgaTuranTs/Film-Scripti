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
        <!-- Sayfa Düzeneleme Formu -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Sayfa Ekleme Formu</h4>
                    <div class="row">
                        <?php echo form_open('Cms/Sayfa/duzenle/'.$id.''); ?>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Sayfa Başlığı</label>
                                <input type="text" name="sayfa_baslik" class="form-control" id="exampleInputEmail1" value="<?php echo $sayfa->sayfa_baslik; ?>">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Sayfa Etiketleri</label>
                                <input class="form-control" data-role="tagsinput" name="sayfa_etiket" id="exampleInputEmail1" rows="3" value="<?php echo $sayfa->sayfa_key; ?>" />
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Sayfa İçeriği</label>
                                <textarea name="sayfa_text" class="ckeditor"><?php echo $sayfa->sayfa_text; ?></textarea>
                            </fieldset>
                        </div>
                        <button style="width:100%;height:45px" type="submit" class="btn btn-danger waves-effect waves-light">Sayfayı Düzenle</button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!--#Sayfa Düzeneleme Formu -->
    </div>
</div>