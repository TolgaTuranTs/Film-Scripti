<?php
/**
 * Site ayarları
 * User: Tolga TURAN
 * Date: 24.01.2017
 * Time: 14:56
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

class Ayarlar extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Admin Giriş Yapmamışsa Login Sayfasına Git
        if(!$this->session->userdata('login')){redirect('Cms/giris');}
        // Ayarlar Veritabanı Model Dosyası
        $this->load->model('Cms/Ayarlar_model');
    }

    /**
     * Genel Ayarlar Sayfası
     */
    public function genel(){
            // Sayfa başlığı
            $data['title'] = 'Genel Site Ayarlar Paneli';
        $this->load->view('cms/static/header_view',$data);
            // Form Post Ettirme
            if(isset($_POST['genelayarlarF'])) {
                // Resim Yükleme İşlemi
                $config['upload_path']      = 'public/template/images/';
                $config['allowed_types']    = 'gif|jpg|jpeg|png';
                $config['file_name']        = 'site_logo';
                $this->load->library('upload', $config);
                $sonuc = $this->upload->do_upload('site_logo');
                if ($sonuc) {
                    $bilgiler = $this->upload->data();
                    $duzenlenecekler = array(
                        'site_baslik'   => $this->input->post('site_baslik'),
                        'site_desc'     => $this->input->post('site_desc'),
                        'footer_yazisi' => $this->input->post('footer_yazisi'),
                        'site_key'      => $this->input->post('site_key'),
                        'site_yapimci'  => $this->input->post('site_yapimci'),
                        'site_logo'     => $bilgiler['raw_name'] . $bilgiler['file_ext']
                    );
                    // Veritabanına Kaydetme Modeli
                    $kaydet = $this->Ayarlar_model->genel_kaydet($duzenlenecekler);
                    if ($kaydet) {
                        $bilgiler['basarili'] = 'Site Ayarlarınız Güncellendi';
                        header('Refresh: 2');
                    } else {
                        $bilgiler['hatali'] = 'Lütfen Daha Sonra Tekrar Deneyiniz';
                        header('Refresh: 2');
                    }
                } else {
                    $duzenlenecekler = array(
                        'site_baslik'   => $this->input->post('site_baslik'),
                        'site_desc'     => $this->input->post('site_desc'),
                        'footer_yazisi' => $this->input->post('footer_yazisi'),
                        'site_key'      => $this->input->post('site_key'),
                        'site_yapimci'  => $this->input->post('site_yapimci'),
                    );
                    // Veritabanına Kaydetme Modeli
                    $kaydet = $this->Ayarlar_model->genel_kaydet($duzenlenecekler);
                    if ($kaydet) {
                        $bilgiler['basarili'] = 'Site Ayarlarınız Güncellendi';
                        header('Refresh: 2');
                    } else {
                        $bilgiler['hatali'] = 'Lütfen Daha Sonra Tekrar Deneyiniz';
                        header('Refresh: 2');
                    }
                }
            }
            // Site Bilgilerine Erişme
            $bilgiler['site'] = $this->Ayarlar_model->genel();
        $this->load->view('cms/ayarlar/genel_view',$bilgiler);
        $this->load->view('cms/static/footer_view');
    }

    /**
     * Reklam Ayarlar Sayfası
     */
    public function reklam(){
            // Sayfa başlığı
            $data['title'] = 'Reklam Ayarlar Paneli';
        $this->load->view('cms/static/header_view',$data);
        // Form Post Etme
        if ($this->input->post()){
            // Formdan gelen bilgiler
            $duzenlenecekler = array(
              'header'       => $this->input->post('header'),
              'sol'          => $this->input->post('sol'),
              'sponsor'      => $this->input->post('sponsor'),
              'yukleniyor'   => $this->input->post('yukleniyor'),
              'sag'          => $this->input->post('sag')
            );
            // Düzenleme Model Dosyası
            $kaydet = $this->Ayarlar_model->reklam_kaydet($duzenlenecekler);
            if($kaydet){
                $bilgiler['basarili'] = 'Reklam Ayarlarınız Başarıyla Düzenlendi';
                header('Refresh : 2');
            }else{
                $bilgiler['hatali'] = 'Reklam Ayarları Düzenlenemedi , Lütfen Daha Sonra Tekrar Deneyiniz';
                header('Refresh : 2');
            }
        }
            // Reklam Bilgilerine Erişme
            $bilgiler['reklam'] = $this->Ayarlar_model->reklam();
        $this->load->view('cms/ayarlar/reklam_view',$bilgiler);
        $this->load->view('cms/static/footer_view');
    }

    public function cache(){
        // Sayfa başlığı
        $data['title'] = 'Cache Ayarlar Paneli';
        $this->load->view('cms/static/header_view',$data);
        // Form Post Etme
        if ($this->input->post()){
            // Formdan gelen bilgiler
            $duzenlenecekler = array(
                'cache_durum' => $this->input->post('cache_durum'),
            );
            // Düzenleme Model Dosyası
            $kaydet = $this->Ayarlar_model->cache_kaydet($duzenlenecekler);
            if($kaydet){
                $bilgiler['basarili'] = 'Cache Ayarlarınız Başarıyla Düzenlendi';
                header('Refresh : 2');
            }else{
                $bilgiler['hatali'] = 'Cache Ayarları Düzenlenemedi , Lütfen Daha Sonra Tekrar Deneyiniz';
                header('Refresh : 2');
            }
        }
            // Cache Bilgilerine Erişme
            $bilgiler['cache'] = $this->Ayarlar_model->genel();
        $this->load->view('cms/ayarlar/cache_view',$bilgiler);
        $this->load->view('cms/static/footer_view');
    }

    /**
     * Kayıtlı Cache Kayıtlarını Temizleme
     */
    public function cache_sil(){
        $dir = getcwd().'/application/cache/';
        foreach(glob($dir.'*.html*') as $v){
            unlink($v);
        }
        echo '<script type="text/javascript">
        alert("Tebrikler ! Kayıtlı Tüm Cache Dosyaları Temizlendi");
        window.location="'.site_url('Cms/Ayarlar/cache').'";
        </script>';
    }

}



?>