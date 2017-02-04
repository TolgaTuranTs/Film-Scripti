<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30">Yapılan Yorum Bilgileri</h4>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Yorumu Yapan Kişi</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $yorum->yorum_yapan; ?>" >
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Yapan İp Adresi</label>
                                <input class="form-control" id="exampleInputEmail1" value="<?php echo $yorum->yorum_ip; ?>" rows="3" />
                            </fieldset>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Yapan E-Mail Adresi</label>
                                <input class="form-control" id="exampleInputEmail1" value="<?php echo $yorum->yorum_mail; ?>" rows="3" />
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Yorum Zamanı</label>
                                <input class="form-control" id="exampleInputEmail1" value="<?php echo $yorum->yorum_zaman; ?>" rows="3" />
                            </fieldset>
                        </div>
                        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Yorum İçeriği</label>
                                <textarea rows="6" style="width:100%;border-radius:5px"><?php echo $yorum->yorum_text; ?></textarea>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>