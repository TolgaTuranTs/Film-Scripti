<?php
/**
 * Film İzleme İşlemleri
 * User: Tolga TURAN
 * Date: 30.01.2017
 * Time: 15:15
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunmamaktadır');

class Film extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Film İzleme Model Dosyası
        $this->load->model('Film_model');
    }

    /**
     * @param $film_seflink - İzlenecek Film
     * Film İzleme Sayfası
     */
    function izle($film_seflink){
            // Site Ayarları
            $data['site_ayari'] = $this->tema->site_ayarlari();
            // Cache Açılmışsa Yükle
            $cache_durum = $data['site_ayari']->cache_durum;
            if($cache_durum == 1){$this->load->library('sCache');}
            // Film Bilgilerine Erişme
            $data['bilgiler'] = $this->Film_model->bilgiler($film_seflink);
            // Sayfaya Özel Başlık ve Etiket Oluşturma
            $data['baslik'] = $data['bilgiler']->film_baslik.' Adlı Filmi İzle';
            $data['key']    = $data['bilgiler']->film_etiket;
            // Reklam Ayarları
            $data['reklam'] = $this->tema->reklamlar();
            // Yorum Form Post Ettirmek İçin
            $data['url']    = $film_seflink;
            // Header Sayfaları Listele
            $data['sayfalar'] = $this->tema->sayfalar();
       $this->load->view('template/static/header_view',$data);
            // Sidebar Kategorileri Listele
            $data['kategori'] = $this->tema->kategoriler();
            $data['izle']     = $this->Film_model->izle($film_seflink);
            // Yorum Post Ettirme
            if($this->input->post()){
                $yorum_eklenecekler = array(
                    'yorum_yapan'   => $this->input->post('yorum_yapan'),
                    'yorum_mail'    => $this->input->post('yorum_mail'),
                    'yorum_text'    => $this->input->post('yorum_text'),
                    'yorum_zaman'   => date('d/m/Y'),
                    'yorum_ip'      => $_SERVER['REMOTE_ADDR'],
                    'yorum_onay'    => 0,
                    'film_id'       => $data['izle']->film_id
                );
                // Yorum Ekleme Modeli
                $yorum_ekle = $this->Film_model->yorum_ekle($yorum_eklenecekler);
                if($yorum_ekle){
                    echo '<script type="text/javascript">
                    alert("Tebrikler ! Yorumunuz Başarıyla Gönderildi. Yönetici Onayından Geçtikten Sonra Yayınlanacaktır");
                    window.location="'.site_url(''.$film_seflink.'.html').'";
                    </script>';
                }else{
                    echo '<script type="text/javascript">
                    alert("Hata ! Lütfen Daha Sonra Tekrar Deneyiniz");
                    window.location="'.site_url(''.$film_seflink.'.html').'";
                    </script>';
                }
            }
            // Yorum Listeleme
            $film_id = $data['izle']->film_id;
            $data['yorumlar'] = $this->Film_model->yorum_listele($film_id);
            // Sidebar Son Yorum Listeleme
            $data['son_yorumlar'] = $this->tema->son_yorumlar();
            // Sidebar Tavsiye Listesi
            $data['gunun_filmleri'] = $this->tema->gunun_filmleri();
        $this->load->view('template/izle_view',$data);
        $this->load->view('template/static/footer_view');
    }

}


?>