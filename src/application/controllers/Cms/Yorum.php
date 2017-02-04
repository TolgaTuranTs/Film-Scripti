<?php
/**
 * Yorum İşlemleri
 * User: Tolga TURAN
 * Date: 31.01.2017
 * Time: 15:48
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

class Yorum extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Admin Giriş Yapmamışsa Login Sayfasına Git
        if(!$this->session->userdata('login')){redirect('Cms/giris');}
        // Yorum Veritabanı Model Dosyası
        $this->load->model('Cms/Yorum_model');
    }

    /**
     * Yorum Listesi ve İşlemleri
     */
    public function index(){
            // Sayfa başlığı
            $data['title'] = 'Yorum Paneli';
        $this->load->view('cms/static/header_view',$data);
            // Yorum Listeesi
            $yorumlar['yorumlar'] = $this->Yorum_model->listele();
        $this->load->view('cms/yorum/listele_view',$yorumlar);
        $this->load->view('cms/static/footer_view');
    }

    /**
     * @param $yorum_id
     * Yorum Onaylama Sayfası
     */
    public function onayla($yorum_id){
        // Gelen Bir şey Yoksa Yorum Listesine Dönsün
        if(!$yorum_id){redirect(site_url('Cms/Yorum'));}
        // Yorum Onaylama Model
        $onayla = $this->Yorum_model->onayla($yorum_id);
        if($onayla){
            echo '<script type="text/javascript">
            alert("Tebrikler ! Yorum Başarıyla Onaylandı");
            window.location="'.site_url('Cms/Yorum').'";
            </script>';
        }else{
            echo '<script type="text/javascript">
            alert("Hata , Lütfen Daha Sonra Tekrar Deneyiniz");
            window.location="'.site_url('Cms/Yorum').'";
            </script>';
        }
    }

    /**
     * @param $yorum_id
     * Yorum Bilgilerini Görüntüleme Sayfası
     */
    public function incele($yorum_id){
        // Gelen Bir şey Yoksa Yorum Listesine Dönsün
        if(!$yorum_id){redirect(site_url('Cms/Yorum'));}
        $data['title'] = 'Yorum İncele';
        $this->load->view('cms/static/header_view',$data);
            // Yoruma Ait Bilgilere Erişme
            $data['yorum'] = $this->Yorum_model->bilgiler($yorum_id);
        $this->load->view('cms/yorum/incele_view',$data);
        $this->load->view('cms/static/footer_view');
    }

    /**
     * @param $yorum_id
     * Yorum silme işlemi
     */
    public function sil($yorum_id){
        $sil = $this->Yorum_model->sil($yorum_id);
        if($sil){
            echo '<script type="text/javascript">
            alert("Tebrikler , Yorumunuz Başarıyla Silindi");
            window.location="'.site_url('Cms/Yorum').'";
            </script>';
        }else{
            echo '<script type="text/javascript">
            alert("Hata , Lütfen Daha Sonra Tekrar Deneyiniz");
            window.location="'.site_url('Cms/Yorum').'";
            </script>';
        }
    }

}

?>