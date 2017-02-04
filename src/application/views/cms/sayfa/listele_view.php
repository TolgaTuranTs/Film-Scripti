<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                            <h4 class="header-title m-t-0">Sayfa Listesi ve İşlemler Paneli</h4>
                            <div class="p-20">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Sayfa Adı</th>
                                            <th>Sayfa Seflinki</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if(!empty($sayfalar)){
                                                foreach($sayfalar as $sayfa){
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $sayfa['sayfa_id']; ?></th>
                                            <td><?php echo $sayfa['sayfa_baslik']; ?></td>
                                            <td><?php echo $sayfa['sayfa_seflink']; ?></td>
                                            <td>
                                                <a href="<?php echo site_url('Cms/Sayfa/duzenle/'.$sayfa['sayfa_id'].''); ?>" title="Sayfa Düzenle">Düzenle</a>
                                                /
                                                <a href="<?php echo site_url('Cms/Sayfa/sil/'.$sayfa['sayfa_id'].''); ?>" title="Sayfa Sil">Sil</a>
                                            </td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>