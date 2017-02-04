<!-- İçerik Alanı -->
<div class="content">

    <!-- Sidebar Alanı -->
    <div class="right">

        <!-- Günün Filmleri -->
        <div class="title border-left-radius-none">
            <h6>GÜNÜN FİLMLERİNİ İZLEYİN</h6>
        </div>
        <div class="gunun-filmi">
            <div id="film-slider">
                <span class="prev-btn">Önceki</span>
                <span class="next-btn">sonraki</span>
                <?php
                    if(!empty($gunun_filmleri)){
                        foreach($gunun_filmleri as $filmler){
                ?>
                <a href="<?php echo $filmler['film_seflink']; ?>.html" title="<?php echo $filmler['film_baslik']; ?> - İzle">
                    <img src="<?php echo base_url('public/afisler/'); ?><?php echo $filmler['film_resim']; ?>" alt=""/>
                    <span class="title"><?php echo $filmler['film_baslik']; ?></span>
                    <span class="alt">
                        <span>Türkçe Dublaj</span>
                        <span><?php echo $filmler['film_hit']; ?> Kişi İzledi</span>
                        <span>IMDB  <?php echo $filmler['film_imbd']; ?></span>
					</span>
                </a>
                <?php }} ?>
            </div>
        </div>
        <!--#Günün Filmleri -->

        <!-- Sponsor Reklam Alanı -->
        <div class="title">
            <h6>SPONSOR REKLAM ALANI</h6>
        </div>
        <div class="ads300x250">
            <?php echo $reklam->sponsor; ?>
        </div>
        <!--#Sponsor Reklam Alanı -->

        <!-- Kategori Listesi -->
        <div class="category">
            <div class="title">
                <h6>FİLM KATEGORİLERİ</h6>
            </div>
            <ul>
                <?php
                    if(empty($kategoriler)){
                    foreach($kategori as $row){
                ?>
                <li>
                    <a href="<?php echo site_url('kategori/'.$row['kategori_seflink'].''); ?>" title="<?php echo $row['kategori_baslik']; ?>">
                        <?php echo $row['kategori_baslik']; ?>
                    </a>
                </li>
                <?php }}?>
            </ul>
        </div>
        <!--#Kategori Listesi -->

        <!-- Son Yorumlar -->
        <div class="last-comments">
            <div class="title">
                <h6>SON YORUMLAR</h6>
            </div>
            <ul>
                <?php
                    if(!empty($yorumlar)){
                    foreach($yorumlar as $yorum){
                ?>
                <li>
                    <a href="<?php echo $yorum['film_seflink']; ?>.html" title="Yoruma Git">
                        <img src="<?php echo base_url('public/template/'); ?>images/yorum_avatar.png" alt=""/>
                        <span class="title"><span><?php echo $yorum['yorum_zaman']; ?></span><?php echo $yorum['yorum_yapan']; ?></span>
                        <span class="text"><?php echo $yorum['yorum_text']; ?></span>
                    </a>
                </li>
                <?php }}else{echo '<h3 style="padding:10px;color:red;font-weight:bold">Hiç Yorum Yapılmamış</h3>';} ?>
            </ul>
        </div>
        <!--#Son Yorumlar -->

    </div>
    <!--/Sidebar Alanı -->