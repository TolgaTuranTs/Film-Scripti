<?php defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır'); ?>
<link rel="stylesheet" href="<?php echo base_url('public/template/styles/iletisim.css') ?>">
<div class="left">

    <div id="content" style="">
        <?php echo form_open('iletisim'); ?>
            <p>
                <label for="username" class="icon-user"> Adınız Soyadınız
                    <span class="required">*</span>
                </label>
                <input type="text" name="iletisim_adsoyad" id="" required="required" placeholder="Adınız Soyadınız" />
            </p>
            <p>
                <label for="usermail" class="icon-envelope"> E-mail address
                    <span class="required">*</span>
                </label>
                <input type="email" name="iletisim_mail" id="usermail" placeholder="E-Mail Adresiniz" required="required" />
            </p>
            <p>
                <label for="usersite" class="icon-link"> Konu</label>
                    <span class="required">*</span>
                <input type="text" name="iletisim_konu" id="usersite" placeholder="İletişim Konusu" required="required" />
            </p>
            <p>
                <label for="message" class="icon-comment"> Mesajınız
                    <span class="required">*</span>
                </label>
                <textarea placeholder="Mesajınız" name="iletisim_text" required="required"></textarea>
            </p>
            <p class="indication">Doldurulması
                <span class="required"> * </span>Zorunlu</p>
            <input type="submit" value="İletişime Geçin !" />
        <?php echo form_close(); ?>
    </div>
</div>