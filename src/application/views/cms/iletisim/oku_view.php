<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<div class="wrapper">
    <div class="container">
        <!-- İletişim Mesajını Oku -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Gelen İletişim Mesajı</h4>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Mesajı Gönderen</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" disabled value="<?php echo $oku->iletisim_adsoyad; ?>" />
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Mesajın Konusu</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" disabled value="<?php echo $oku->iletisim_konu; ?>" />
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Mesajı Gönderen İp</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" disabled value="<?php echo $oku->iletisim_ip; ?>" />
                            </fieldset>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Gönderen Mail Adresi</label>
                                <input class="form-control" id="exampleInputEmail1" disabled rows="3" value="<?php echo $oku->iletisim_mail; ?>" />
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Mesajın Gönderilme Tarihi</label>
                                <input type="text" class="form-control" disabled id="exampleInputEmail1" value="<?php echo $oku->iletisim_zaman; ?>" />
                            </fieldset>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Gönderen Mail Adresi</label>
                                <textarea class="form-control" style="height:120px" disabled id="exampleInputEmail1" rows="3"><?php echo $oku->iletisim_text; ?></textarea>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--#İletişim Mesajını Oku -->
    </div>
</div>