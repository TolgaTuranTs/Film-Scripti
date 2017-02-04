<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<!-- Kategoriye Ait Film Listesi -->
<div class="left">
    <div class="pTab">
        <div class="title main-tab">
            <h6><strong><?php echo $baslik ?> </strong> Kategoriye Ait Filmler</h6>
        </div>
        <div class="pContent">
            <ul class="filmler">
                <?php
                    if(!empty($kategori_filmler)){
                    foreach($kategori_filmler as $kategoriFilm){
                ?>
                <li data-fadeEffect data-target=".film-detail">
                    <a href="<?php echo site_url($kategoriFilm['film_seflink']); ?>.html" title="<?php echo $kategoriFilm['film_baslik']; ?> İzle">
                        <img src="<?php echo base_url('public/afisler/'.$kategoriFilm['film_resim'].''); ?>" alt=""/>
                        <span class="title"><?php echo $kategoriFilm['film_baslik']; ?></span>
                        <span class="film-lang">Türkçe Dublaj</span>
                        <span class="imdb">İMDB :  <?php echo $kategoriFilm['film_imbd']; ?></span>
                        <span class="view"><?php echo $kategoriFilm['film_hit']; ?></span>
                        <span class="film-detail">
                            <span class="film-title"><?php echo $kategoriFilm['film_baslik']; ?> </span>
                            <span class="film-lang">Türkçe Dublaj</span>
                            <span class="other-detail">
                                <?php echo $kategoriFilm['film_baslik']; ?><br />
                                <?php echo $kategoriFilm['film_hit']; ?> izlenme<br />
                                İMDB :  <?php echo $kategoriFilm['film_imbd']; ?>
                            </span>
                        </span>
                    </a>
                </li>
                <?php }}else{echo '<h3 style="padding:10px;color:red;font-weight:bold">Bu Kategoriye Ait Film Bulunamamaktadır</h3>';} ?>
            </ul>
        </div>
    </div>
</div>
<!--#Kategoriye Ait Film Listesi -->