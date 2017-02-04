<?php
/**
 * Kategori Sayfası
 * User: Tolga TURAN
 * Date: 01.02.2017
 * Time: 20:34
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

class Kategori extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Model Dosyası
        $this->load->model('Kategori_model');
    }

    public function icerik($kategori_seflink){
            // Site Ayarları
            $data['site_ayari'] = $this->tema->site_ayarlari();
            // Cache Açılmışsa Yükle
            $cache_durum = $data['site_ayari']->cache_durum;
            if($cache_durum == 1){$this->load->library('sCache');}
            // Sayfa Bilgilerine Erişme
            $kategori['kategori'] = $this->Kategori_model->bilgiler($kategori_seflink);
            // Sayfaya Özel Başlık ve Etiket Oluşturma
            $data['baslik'] = $kategori['kategori']->kategori_baslik.' Kategorisi';
            $data['key']    = $kategori['kategori']->kategori_etiket.' Kategorisi';
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
        $this->load->view('template/static/sidebar_view', $data);
            // Gelen Kategoriye Ait Filmleri Listeleme
            $kategori_id = $kategori['kategori']->kategori_id;
            $kategori_filmler['kategori_filmler'] = $this->Kategori_model->film_bul($kategori_id);
        $this->load->view('template/kategori_view',$kategori_filmler);
        $this->load->view('template/static/footer_view');
    }

}



?>