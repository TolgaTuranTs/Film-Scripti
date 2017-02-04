<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><b>Film Listesi</b></h4>
                    <p class="text-muted font-13 m-b-30">
                        Siteye Eklenen Film Listesi
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Afiş</th>
                                <th>Başlık</th>
                                <th>Kategori</th>
                                <th>Eklenme</th>
                                <th>İzlenme</th>
                                <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if(!empty($filmler)){
                                foreach($filmler as $film){
                            ?>
                            <tr>
                                <td>
                                    <center>
                                        <img style="width:64px;height:64px" src="<?php echo site_url('public/afisler/'.$film['film_resim'].''); ?>" title="" />
                                    </center>
                                </td>
                                <td><?php echo $film['film_baslik']; ?></td>
                                <td><?php echo $film['kategori_baslik']; ?></td>
                                <td><?php echo $film['film_tarih']; ?></td>
                                <td><?php echo $film['film_hit']; ?> Kişi İzledi</td>
                                <td>
                                    <a href="<?php echo site_url('Cms/Film/duzenle/'.$film['film_id'].''); ?>" title="Filmi Düzenle">Düzenle</a>
                                    /
                                    <a href="<?php echo site_url('Cms/Film/sil/'.$film['film_id'].''); ?>" title="Filmi Sil">Sil</a>
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