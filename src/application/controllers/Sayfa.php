<?php
/**
 * Created by PhpStorm.
 * User: Tolga TURAN
 * Date: 27.01.2017
 * Time: 15:12
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunmamaktadır');

class Sayfa extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Model Dosyasını Çağır
        $this->load->model('Sayfa_model');
    }

    /**
     * Sayfa İçeriği
     */
    public function oku($sayfa_seflink){
            // Site Ayarları
            $data['site_ayari'] = $this->tema->site_ayarlari();
            // Cache Açılmışsa Yükle
            $cache_durum = $data['site_ayari']->cache_durum;
            if($cache_durum == 1){$this->load->library('sCache');}
            // Sayfa Bilgilerine Erişme
            $sayfalar['sayfa'] = $this->Sayfa_model->bilgiler($sayfa_seflink);
            // Sayfaya Özel Başlık ve Etiket Oluşturma
            $data['baslik'] = $sayfalar['sayfa']->sayfa_baslik.' Sayfası';
            $data['key']    = $sayfalar['sayfa']->sayfa_key;
            // Reklam Ayarları
            $data['reklam'] = $this->tema->reklamlar();
            // Header Sayfaları Listele
            $data['sayfalar'] = $this->tema->sayfalar();
        $this->load->view('template/static/header_view', $data);
            // Sidebar Kategorileri Listele
            $data['kategori'] = $this->tema->kategoriler();
            // Son Yorumlar Listesi - 3 Adet
            $data['yorumlar'] = $this->tema->son_yorumlar();
            // Günün Filmleri Listesi
            $data['gunun_filmleri'] = $this->tema->gunun_filmleri();
        $this->load->view('template/static/sidebar_view', $data);
        $this->load->view('template/sayfa_view',$sayfalar);
        $this->load->view('template/static/footer_view');
    }
}

?>