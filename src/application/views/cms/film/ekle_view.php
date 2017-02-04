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
        <!-- Film Kaydetme Formu -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Film Ekleme Formu</h4>
                    <div class="row">
                        <?php echo form_open_multipart('Cms/Film/ekle'); ?>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Film Başlığı</label>
                                <input type="text" name="film_baslik" class="form-control" id="exampleInputEmail1" value="">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Film Kategorisi</label>
                                <select class="form-control" name="film_kategori" id="exampleSelect1">
                                    <?php foreach($kategoriler as $kategori){ ?>
                                    <option value="<?php echo $kategori['kategori_id']; ?>"><?php echo $kategori['kategori_baslik']; ?></option>
                                    <?php } ?>
                                </select>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Filmin Süresi</label>
                                <input type="text" name="film_sure" class="form-control" id="exampleInputEmail1" value="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Film Etiketleri</label>
                                <input class="form-control" data-role="tagsinput" name="film_etiket" id="exampleInputEmail1" rows="3" />
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Film İmdb Puanı</label>
                                <input type="text" name="film_imbd" class="form-control" id="exampleInputEmail1" value="">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Filmin Yılı</label>
                                <input type="text" name="film_yili" class="form-control" id="exampleInputEmail1" value="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Filmin Resmi</label>
                                <input type="file" name="film_resim" class="form-control" id="exampleInputEmail1" value="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
                            <fieldset class="form-group input_fields_wrap">
                                <label for="exampleInputEmail1">Film Embed/İframe Kodu <a href="" class="add_field_button" style="margin-left:10px">Alternatif Embed/İframe Ekle</a></label>
                                <textarea name="link[]" id="" style="width:100%;border:1px solid #ddd;border-radius:5px" rows="5"></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Film İçeriği</label>
                                <textarea name="film_hakkinda" class="ckeditor"></textarea>
                            </fieldset>
                        </div>
                        <button style="width:100%;height:45px" type="submit" class="btn btn-danger waves-effect waves-light">Filmi Kaydet</button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!--#Film Kaydetme Formu -->
    </div>
</div>