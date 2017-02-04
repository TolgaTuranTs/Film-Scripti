<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<!-- Gelen Arama Kelimesine Ait Film Listesi -->
<div class="left">
    <div class="pTab">
        <div class="title main-tab">
            <h6><strong><?php echo $baslik; ?> </strong> Adlı Kelime Hakkında Bulunan Filmler</h6>
        </div>
        <div class="pContent">
            <ul class="filmler">
                <?php
                    if(!empty($ara)){
                    foreach($ara as $araFilm){
                ?>
                    <li data-fadeEffect data-target=".film-detail">
                        <a href="<?php echo site_url($araFilm['film_seflink']); ?>.html" title="<?php echo $araFilm['film_baslik']; ?> İzle">
                            <img src="<?php echo base_url('public/afisler/'.$araFilm['film_resim'].''); ?>" alt=""/>
                            <span class="title"><?php echo $araFilm['film_baslik']; ?></span>
                            <span class="film-lang">Türkçe Dublaj</span>
                            <span class="imdb">İMDB :  <?php echo $araFilm['film_imbd']; ?></span>
                            <span class="view"><?php echo $araFilm['film_hit']; ?></span>
                            <span class="film-detail">
                        <span class="film-title"><?php echo $araFilm['film_baslik']; ?> </span>
                        <span class="film-lang">Türkçe Dublaj</span>
                        <span class="other-detail">
                            <?php echo $araFilm['film_baslik']; ?><br />
                            <?php echo $araFilm['film_hit']; ?> izlenme<br />
                            İMDB :  <?php echo $araFilm['film_imbd']; ?>
                        </span>
                    </span>
                        </a>
                    </li>
               <?php }}else{echo '<h3 style="padding:10px;color:red;font-weight:bold">Böyle Bir Film Bulunamamaktadır</h3>';} ?>
            </ul>
        </div>
    </div>
</div>
<!--#Gelen Arama Kelimesine Ait Film Listesi -->