<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                            <h4 class="header-title m-t-0">Slidera Eklenen Filmler</h4>
                            <div class="p-20">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Filmin Adı</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if(!empty($slider)){
                                            foreach($slider as $row){
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $row['slider_id']; ?></th>
                                            <td><?php echo $row['film_baslik']; ?></td>
                                            <td>
                                                <a href="<?php echo site_url('Cms/Slider/sil/'.$row['slider_id'].''); ?>" title="Kategori Düzenle">Sliderdan Çıkar</a>
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