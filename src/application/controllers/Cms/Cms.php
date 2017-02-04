<?php
/**
 * Yönetim Paneli Anasayfası
 * User: Tolga TURAN
 * Date: 22.01.2017
 * Time: 19:48
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunmamaktadır');

class Cms extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Admin Giriş Yapmamışsa Login Sayfasına Git
        if(!$this->session->userdata('login')){redirect('Cms/giris');}
        // Model Dosyası
        $this->load->model('Cms/Cms_model');
    }

    /**
     * Admin Anasayfası
     */
    public function index(){
            // Sayfa Başlığı
            $data['title'] = 'Yönetim Paneli Anasayfası';
        $this->load->view('cms/static/header_view',$data);
            // İstatistikler
            $data['toplam_sayfa']       = $this->Cms_model->toplam_sayfalar();
            $data['toplam_filmler']     = $this->Cms_model->toplam_filmler();
            $data['toplam_kategori']    = $this->Cms_model->toplam_kategori();
            $data['toplam_iletisim']    = $this->Cms_model->toplam_iletisim();
            $data['toplam_yorum']       = $this->Cms_model->toplam_yorum();
            $data['toplam_slider']      = $this->Cms_model->toplam_slider();
            $data['onaysiz_yorum']      = $this->Cms_model->onaysiz_yorumlar();
        $this->load->view('cms/home_view',$data);
        $this->load->view('cms/static/footer_view');
    }

}

?>