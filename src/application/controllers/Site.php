<?php
/**
 * Site Anasayfası - Ön Yüz
 * User: Tolga TURAN
 * Date: 22.01.2017
 * Time: 18:18
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunmamaktadır');

class Site extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Anasayfa Model Dosyası
        $this->load->model('Anasayfa_model');
    }

    /**
     * Site Anasayfası
     */
    public function index(){
            // Site Ayarları
            $data['site_ayari'] = $this->tema->site_ayarlari();
            // Cache Açılmışsa Yükle
            $cache_durum = $data['site_ayari']->cache_durum;
            if($cache_durum == 1){$this->load->library('sCache');}
            // Sayfaya Özel Başlık ve Etiket Oluşturma
            $data['baslik'] = $data['site_ayari']->site_baslik;
            $data['key'] = $data['site_ayari']->site_key;
            // Reklam Ayarları
            $data['reklam'] = $this->tema->reklamlar();
            // Header Sayfaları Listele
            $data['sayfalar'] = $this->tema->sayfalar();
        $this->load->view('template/static/header_view',$data);
            // Slider Listeleme
            $data['slider'] = $this->Anasayfa_model->slider();
        $this->load->view('template/static/slider_view',$data);
            // Sidebar Kategorileri Listele
            $data['kategori'] = $this->tema->kategoriler();
            // Son Yorumlar Listesi - 3 Adet
            $data['yorumlar'] = $this->tema->son_yorumlar();
            // Günün Filmleri Listesi
            $data['gunun_filmleri'] = $this->tema->gunun_filmleri();
        $this->load->view('template/static/sidebar_view',$data);
            // Anasayfa Filmleri Listele
            $data['filmler'] = $this->Anasayfa_model->listele();
        $this->load->view('template/home_view',$data);
        $this->load->view('template/static/footer_view');
    }

}

?>