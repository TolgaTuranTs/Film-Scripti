<?php
/**
 * İletişim Paneli
 * User: Tolga TURAN
 * Date: 02.02.2017
 * Time: 21:16
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

class Contact extends CI_Controller{

    function __construct(){
        parent::__construct();
        // İletişim Modeli
        $this->load->model('Cms/Contact_model');
    }

    /**
     * İletişim Mesajlarını Listele
     */
    public function index(){
            $data['title'] = 'İletişim Paneli';
        $this->load->view('cms/static/header_view',$data);
            // İletişim Mesajlarını Listele
            $data['iletisim'] = $this->Contact_model->listele();
        $this->load->view('cms/iletisim/listele_view',$data);
        $this->load->view('cms/static/footer_view');
    }

    /**
     * @param $iletisim_id
     * İletişim Mesajını Okuma
     */
    public function oku($iletisim_id){
        $data['title'] = 'İletişim Paneli';
        $this->load->view('cms/static/header_view',$data);
            // İletişim Mesajına Ait Bilgilere Erişme
            $data['oku'] = $this->Contact_model->oku($iletisim_id);
        $this->load->view('cms/iletisim/oku_view',$data);
        $this->load->view('cms/static/footer_view');
    }

    /**
     * @param $iletisim_id
     * @return bool
     * İletişim Mesajını silme
     */
    public function sil($iletisim_id){
        $sil = $this->Contact_model->sil($iletisim_id);
        if($sil){
            echo '<script type="text/javascript">
            alert("Tebrikler ! İletişim Mesajınız Silindi");
            window.location="'.site_url('Cms/iletisim').'";
            </script>';
        }else{
            echo '<script type="text/javascript">
            alert("Hata ! Lütfen Daha Sonra Tekrar Deneyiniz");
            window.location="'.site_url('Cms/iletisim').'";
            </script>';
        }
    }

}


?>