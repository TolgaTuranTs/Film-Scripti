<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<!-- slider -->
<div class="slider" id="main-slider">
    <a href="#" class="prev-btn">Önceki</a>
    <a href="#" class="next-btn">Sonraki</a>
    <div class="slider-inner">
        <ul>
            <?php
                if(!empty($slider)){
                    foreach($slider as $row){
            ?>
            <li data-fadeEffect data-target=".film-detail">
                <a href="<?php echo site_url($row['film_seflink']); ?>.html" title="">
                    <img style="height:200px" src="<?php echo base_url('public/afisler/'.$row['film_resim'].''); ?>" alt="" />
                    <span class="film-detail">
                        <span class="film-title"><?php echo $row['film_baslik']; ?> </span>
                        <span class="film-lang">Türkçe Dublaj</span>
                        <span class="other-detail">
                            <?php echo $row['kategori_baslik']; ?><br />
                            <?php echo $row['film_hit']; ?> izlenme<br />
                            İMDB  <?php echo $row['film_imbd']; ?>
                        </span>
					</span>
                </a>
            </li>
            <?php }} ?>
        </ul>
    </div>
    <div class="film-tavsiye">
        <h6>Donmadan Kesintisiz HD Film İzleme Adresi - <strong><?php echo $baslik; ?></strong></h6>
    </div>
</div>
<!--/slider -->