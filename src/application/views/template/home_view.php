<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<!-- Anasayfa Film Listesi -->
<div class="left">

    <div class="pTab">
        <div class="title main-tab">
            <h6>Yeni Eklenen Müthiş Filmler</h6>
            <ul class="pTabList">
                <li class="active">
                    <a href="#">En Çok İzlenen Filmler</a>
                </li>
            </ul>
        </div>
        <div class="pContent">
            <ul class="filmler">
                <?php
                    if(!empty($filmler)){
                        // Filmleri Listeleme
                        foreach($filmler as $film){
                ?>
                <li data-fadeEffect data-target=".film-detail">
                    <a href="<?php echo site_url(''.$film['film_seflink'].''); ?>.html" title="<?php echo $film['film_baslik']; ?> İzle">
                        <img src="<?php echo base_url('public/afisler/'); ?><?php echo $film['film_resim']; ?>" alt=""/>
                        <span class="title"><?php echo $film['film_baslik']; ?></span>
                        <span class="film-lang">Türkçe Dublaj</span>
                        <span class="imdb">İMDB :  <?php echo $film['film_imbd']; ?></span>
                        <span class="view"><?php echo $film['film_hit']; ?></span>
                        <span class="film-detail">
                            <span class="film-title"><?php echo $film['film_baslik']; ?> </span>
                            <span class="film-lang">Türkçe Dublaj</span>
                            <span class="other-detail">
                                <?php echo $film['kategori_baslik']; ?><br />
                                <?php echo $film['film_hit']; ?> izlenme<br />
                                İMDB :  <?php echo $film['film_imbd']; ?>
                            </span>
                        </span>
                    </a>
                </li>
                <?php }} ?>
            </ul>
        </div>
    </div>
</div>
<!--#Anasayfa Film Listesi -->