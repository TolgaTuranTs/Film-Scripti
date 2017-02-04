<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                            <h4 class="header-title m-t-0">Gelen İletişim Mesaj Listesi</h4>
                            <div class="p-20">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Gönderen</th>
                                        <th>Maili</th>
                                        <th>Konu</th>
                                        <th>Zaman</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if(!empty($iletisim)){
                                        foreach($iletisim as $row){
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $row['iletisim_adsoyad']; ?></th>
                                                <td><?php echo $row['iletisim_mail']; ?></td>
                                                <td><?php echo $row['iletisim_konu']; ?></td>
                                                <td><?php echo $row['iletisim_zaman']; ?></td>
                                                <td>
                                                    <a href="<?php echo site_url('Cms/iletisim/oku/'.$row['iletisim_id'].''); ?>" title="İletişim Mesajını">Oku</a>
                                                    /
                                                    <a href="<?php echo site_url('Cms/iletisim/sil/'.$row['iletisim_id'].''); ?>" title="İletişim Mesajını Sil">Sil</a>
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