<?php
/**
 * Slider İşlemleri
 * User: Tolga TURAN
 * Date: 02.02.2017
 * Time: 15:02
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İznini Bulunmamaktadır');

class Slider extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Admin Giriş Yapmamışsa Login Sayfasına Git
        if (!$this->session->userdata('login')) {
            redirect('Cms/giris');
        }
    }

    /**
     * Slidere Eklenen Filmleri Listeleme
     */
    public function index(){
            $data['title'] = 'Slider İşlemleri';
        $this->load->view('cms/static/header_view',$data);
            // Slider Listeleme
            $this->load->model('Cms/Slider_model');
            $sliders['slider'] = $this->Slider_model->listele();
        $this->load->view('cms/slider/listele_view',$sliders);
        $this->load->view('cms/static/footer_view');
    }

    /**
     * Slider Ekleme İşlemleri
     * Filmleri Listeleme
     */
    public function ekle(){
            $data['title'] = 'Seçtiğiniz Filmi Slidera Ekle';
        $this->load->view('cms/static/header_view',$data);
            // Film Listelemek İçin Film İşlemleri
            $this->load->model('Cms/Film_model');
            $data['filmler'] = $this->Film_model->listele();
        $this->load->view('cms/slider/ekle_view',$data);
        $this->load->view('cms/static/footer_view');
    }

    /**
     * @param $film_id
     * Seçilen Filmi Slidera Ekleme
     */
    public function onayla($film_id){
        $this->load->model('Cms/Slider_model');
        $onayla = $this->Slider_model->onayla($film_id);
        if($onayla){
            echo '<script type="text/javascript">
            alert("Tebrikler ! Film Slidera Eklendi");
            window.location="'.site_url('Cms/Slider').'";
            </script>';
        }else{
            echo '<script type="text/javascript">
            alert("Hata ! Lütfen Daha Sonra Tekrar Deneyiniz");
            window.location="'.site_url('Cms/Slider/ekle').'";
            </script>';
        }
    }

    /**
     * @param $slider_id
     * Filmi Sliderdan Çıkarma Sayfası
     */
    public function sil($slider_id){
        $this->load->model('Cms/Slider_model');
        $sil = $this->Slider_model->sil($slider_id);
        if($sil){
            echo '<script type="text/javascript">
            alert("Tebrikler ! Film Başarıyla Sliderdan Çıkarıldı");
            window.location="'.site_url('Cms/Slider').'";
            </script>';
        }else{
            echo '<script type="text/javascript">
            alert("Hata ! Lütfen Daha Sonra Tekrar Deneyiniz");
            window.location="'.site_url('Cms/Slider').'";
            </script>';
        }
    }



}


?>