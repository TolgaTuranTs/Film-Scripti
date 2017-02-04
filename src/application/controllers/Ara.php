<?php
/**
 * Arama İşlemleri Sayfası
 * User: Tolga TURAN
 * Date: 02.02.2017
 * Time: 16:04
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

class Ara extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Arama Modeli
        $this->load->model('Ara_model');
    }

    public function index(){
        if($this->input->post()){
            // Formdan gelen aranan kelime
            $search = $this->input->post('search');
                // Site Ayarları
                $data['site_ayari'] = $this->tema->site_ayarlari();
                // Sayfaya Özel Başlık ve Etiket Oluşturma
                $data['baslik'] = $search;
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
                $data['ara'] = $this->Ara_model->ara($search);
            $this->load->view('template/ara_view',$data);
            $this->load->view('template/static/footer_view');
        }else{
            // Direk Bu Sayfaya Girişini Engelleme
            redirect(site_url());
        }
    }

}

?>