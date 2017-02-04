<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>

<!-- content -->
<div class="content">

    <!-- right -->
    <div class="right">

        <!-- Filmin Bilgileri -->
        <div class="title border-left-radius-none">
            <h6>FİLM OPSİYONEL ÖZELLİKLERİ</h6>
        </div>
        <div class="film-ozet">
            <span class="afis">
                <img src="<?php echo base_url('public/afisler/'); ?><?php echo $izle->film_resim; ?>" alt=""/>
            </span>
            <ul>
                <li><span>Filmin Yılı :</span> <?php echo $izle->film_yili; ?></li>
                <li><span>Kategorisi :</span> <?php echo $izle->kategori_baslik; ?></li>
                <li><span>İzlenme Oranı :</span> <?php echo $izle->film_hit; ?></li>
                <li><span>Süre :</span> <?php echo $izle->film_sure; ?> DK</li>
                <li><span>İmdb Puanı :</span> <?php echo $izle->film_imbd; ?></li>
            </ul>
        </div>
        <!--#Filmin Bilgileri -->

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
                if(!empty($son_yorumlar)){
                    foreach($son_yorumlar as $sonyorum){
                ?>
                <li>
                    <a href="<?php echo $sonyorum['film_seflink']; ?>.html" title="Yoruma Git">
                        <img src="<?php echo base_url('public/template/'); ?>images/yorum_avatar.png" alt=""/>
                        <span class="title"><span><?php echo $sonyorum['yorum_zaman']; ?></span><?php echo $sonyorum['yorum_yapan']; ?></span>
                        <span class="text"><?php echo $sonyorum['yorum_text']; ?></span>
                    </a>
                </li>
              <?php }}else{echo '<h3 style="padding:10px;color:red;font-weight:bold">Hiç Yorum Yapılmamış</h3>';} ?>
            </ul>
        </div>
        <!--#Son Yorumlar -->

        <!-- tavsiye ediyoruz -->
        <div class="title">
            <h6>!!! TAVSİYE EDİYORUZ !!!</h6>
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
        <!--/tavsiye ediyoruz -->

    </div>
    <!--/right -->

    <!-- Film İçerik Alanı -->
    <div class="left">
        <div class="left-inner">

            <div class="title">
                <h6><?php echo $izle->film_baslik; ?></h6>
            </div>

            <!-- film açıklama -->
            <div class="film-desc">
                <div class="film-desc-right">
                    <div class="film-desc-text"><?php echo $izle->film_hakkinda; ?></div>
                </div>
                <img src="<?php echo base_url('public/afisler/'); ?><?php echo $izle->film_resim; ?>" class="film-big-afis" alt=""/>
            </div>
            <!--/film açıklama -->

            <!-- film paylaş -->
            <div class="film-share">
                <div>
                    paylaş kodları..
                </div>
                <p>Bu filmi şimdi sosyal ağlarda paylaşabilirsiniz!</p>
            </div>

            <!-- video tab -->
            <div class="video pTab">
                <div class="video-tab">
                    <ul class="pTabList">
                        <?php
                            // Kaçtane Link Varsa O Kadar Alternatif Link ve Embed Kodu Yazsın
                            $linkler = $izle->film_linkler;
                            // Json Formatından Arraya Çevirme
                            $link = json_decode($linkler);
                            //var_dump($link);
                            foreach($link as $row){
                        ?>
                        <li><a href="#">Alternatif Link </a></li>
                        <?php } ?>
                    </ul>
                </div>
                <?php foreach($link as $row){ ?>
                <div class="video-embed pContent">
                    <div class="video-ads">
                        <div class="ads300x250">
                            <?php echo $reklam->yukleniyor; ?>
                        </div>
                        <div class="video-load">
                            Film yükleniyor, Lütfen bekleyiniz ..
                            <span>Reklamı geçmek ve filmi izlemek için lütfen <strong id="skip-ads">buraya</strong> tıklayınız..</span>
                        </div>
                    </div>
                    <div class="video-player">
                        <?php echo $row; ?>
                    </div>
                </div>
                <?php } ?>
            </div>

            <!-- Yorum Paneli -->
            <div class="pTab">
                <ul class="pTabList">
                    <li><a href="#" class="add-comment-text-right"><strong>+</strong> Şimdi <strong>yorumunuzu</strong> yazabilirsiniz.</a></li>
                    <li style="cursor:pointer"><span class="add-comment-text">Film Hakkında Yapılan Yorumlar</span></li>
                </ul>
                <!-- Yorum Yap Alanı -->
                <div class="pContent">
                    <div class="comment">
                        <?php echo form_open(''.$url.'.html'); ?>
                        <table class="yorumyap">
                            <tr>
                                <td><input type="text" name="yorum_yapan" placeholder="Adınız Soyadınız" /></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="yorum_mail" placeholder="E-Mail Adresiniz" /></td>
                            </tr>
                            <tr>
                                <td><textarea name="yorum_text" id="" cols="" rows="7" placeholder="Yorumunuz"></textarea></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Yorumu Gönder" /></td>
                            </tr>
                        </table>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <!--#Yorum Yap Alanı -->
                <!-- Yorum Listeleme Alanı -->
                <div class="pContent">
                    <?php
                        if(!empty($yorumlar)){
                        foreach($yorumlar as $yorum){
                    ?>
                    <div class="comment">
                        <img src="<?php echo base_url('public/template/images/yorum_avatar.png'); ?>" alt="" class="avatar" />
                        <span class="title">
					        <span><?php echo $yorum['yorum_zaman']; ?></span>
					        <a href=""><?php echo $yorum['yorum_yapan']; ?></a>
                        </span>
                        <div class="comment-text">
                            <p><?php echo $yorum['yorum_text']; ?></p>
                        </div>
                    </div>
                    <?php }}else{echo '<h3 style="padding:10px;color:red;font-weight:bold">Bu Filme Yorum Yapılmamış , İlk Yapan Siz Olun</h3>';} ?>
                </div>
                <!--#Yorum Listeleme Alanı -->
            </div>
            <!--#Yorum Paneli -->

        </div>
    </div>
    <!--#Film İçerik Alanı -->