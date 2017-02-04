<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><b>Yorum Listesi</b></h4>
                    <p class="text-muted font-13 m-b-30">
                        Yorum Onaylayabilir / Silebilirsiniz.
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Yorum Yapan</th>
                            <th>E-Mail</th>
                            <th>Ne Zaman</th>
                            <th>Hangi Film</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(!empty($yorumlar)){
                            foreach($yorumlar as $yorum){
                                ?>
                                <tr>
                                    <td><?php echo $yorum['yorum_yapan']; ?></td>
                                    <td><?php echo $yorum['yorum_mail']; ?></td>
                                    <td><?php echo $yorum['yorum_zaman']; ?></td>
                                    <td><?php echo $yorum['film_baslik']; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('Cms/Yorum/incele/'.$yorum['yorum_id'].''); ?>" title="Yorumu İncele">İncele</a>
                                        /
                                        <a href="<?php echo site_url('Cms/Yorum/sil/'.$yorum['yorum_id'].''); ?>" title="Yorumu Sil">Sil</a>
                                        <?php
                                            $onay = $yorum['yorum_onay'];
                                            if($onay == 0){
                                        ?>
                                        /
                                        <a href="<?php echo site_url('Cms/Yorum/onayla/'.$yorum['yorum_id'].''); ?>" title="Yorumu Onayla">Onayla</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php }} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>