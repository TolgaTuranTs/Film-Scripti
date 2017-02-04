<?php
/**
 * İletişim Sayfası
 * User: Tolga TURAN
 * Date: 02.02.2017
 * Time: 16:31
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunmamaktadır');

class Contact extends CI_Controller{

    function __construct(){
        parent::__construct();
        // İletişim Model Dosyaso
        $this->load->model('Contact_model');
    }

    /**
     * İletişime Geç Sayfası
     */
    public function index(){
            // Site Ayarları
            $data['site_ayari'] = $this->tema->site_ayarlari();
            // Cache Açılmışsa Yükle
            $cache_durum = $data['site_ayari']->cache_durum;
            if($cache_durum == 1){$this->load->library('sCache');}
            // Sayfaya Özel Başlık ve Etiket Oluşturma
            $data['baslik'] = 'İletişim Sayfası';
            $data['key'] = $data['site_ayari']->site_key;
            // Reklam Ayarları
            $data['reklam'] = $this->tema->reklamlar();
            // Header Sayfaları Listele
            $data['sayfalar'] = $this->tema->sayfalar();
        $this->load->view('template/static/header_view',$data);
            // Sidebar Kategorileri Listele
            $data['kategori'] = $this->tema->kategoriler();
            // Son Yorumlar Listesi - 3 Adet
            $data['yorumlar'] = $this->tema->son_yorumlar();
            // Günün Filmleri Listesi
            $data['gunun_filmleri'] = $this->tema->gunun_filmleri();
        $this->load->view('template/static/sidebar_view',$data);
            if($this->input->post()){
                // Formdan gelen veriler
                $eklenecekler = array(
                  'iletisim_adsoyad'    => $this->input->post('iletisim_adsoyad'),
                  'iletisim_mail'       => $this->input->post('iletisim_mail'),
                  'iletisim_konu'       => $this->input->post('iletisim_konu'),
                  'iletisim_text'       => $this->input->post('iletisim_text'),
                  'iletisim_ip'         => $_SERVER['REMOTE_ADDR'],
                  'iletisim_zaman'      => date('d/m/Y')
                );
                $kaydet = $this->Contact_model->kaydet($eklenecekler);
                if($kaydet){
                    echo '<script type="text/javascript">
                    alert("Tebrikler ! İletişim Mesajınız Gönderildi , En Kısa Sürede İrtibat Sağlayacağız");
                    window.location="'.site_url('iletisim').'";
                    </script>';
                }else{
                    echo '<script type="text/javascript">
                    alert("Hata ! Lütfen Daha Sonra Tekrar Deneyiniz");
                    window.location="'.site_url('iletisim').'";
                    </script>';
                }
            }
        $this->load->view('template/iletisim_view');
        $this->load->view('template/static/footer_view');
    }

}


?>