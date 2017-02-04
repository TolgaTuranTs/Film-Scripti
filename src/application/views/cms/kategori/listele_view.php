<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                            <h4 class="header-title m-t-0">Kategori Listesi ve İşlemler Paneli</h4>
                            <div class="p-20">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Kategori Adı</th>
                                            <th>Kategori Seflinki</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if(!empty($kategoriler)){
                                                foreach($kategoriler as $kategori){
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $kategori['kategori_id']; ?></th>
                                            <td><?php echo $kategori['kategori_baslik']; ?></td>
                                            <td><?php echo $kategori['kategori_seflink']; ?></td>
                                            <td>
                                                <a href="<?php echo site_url('Cms/Kategori/duzenle/'.$kategori['kategori_id'].''); ?>" title="Kategori Düzenle">Düzenle</a>
                                                /
                                                <a href="<?php echo site_url('Cms/Kategori/sil/'.$kategori['kategori_id'].''); ?>" title="Kategoriyi Sil">Sil</a>
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