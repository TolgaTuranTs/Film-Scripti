<?php
/**
 * Sayfa İşlemleri
 * User: Tolga TURAN
 * Date: 27.01.2017
 * Time: 13:44
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İznini Bulunmamaktadır');

class Sayfa extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Admin Giriş Yapmamışsa Login Sayfasına Git
        if(!$this->session->userdata('login')){redirect('Cms/giris');}
        // Kategori Veritabanı Model Dosyası
        $this->load->model('Cms/Sayfa_model');
        // Seflink Fonksiyonu
        $this->load->helper('seflink');
    }

    /**
     * Sayfa Listeleme
     */
    public function index(){
            $data['title'] = 'Sayfa İşlemleri';
        $this->load->view('cms/static/header_view',$data);
            // Kategori Listeleme VEritabanı Model İşlemi
            $data['sayfalar'] = $this->Sayfa_model->listele();
        $this->load->view('cms/sayfa/listele_view',$data);
        $this->load->view('cms/static/footer_view');
    }

    /**
     * Sayfa Ekleme İşlemleri
     */
    public function ekle(){
            $data['title'] = 'Sayfa Ekleme Sayfası';
        $this->load->view('cms/static/header_view',$data);
        // Form Post Ettirme
        if ($this->input->post()){
            $eklenecekler = array(
              'sayfa_baslik' => $this->input->post('sayfa_baslik'),
              'sayfa_seflink'=> permalink($this->input->post('sayfa_baslik')),
              'sayfa_key'    => $this->input->post('sayfa_etiket'),
              'sayfa_text'   => $this->input->post('sayfa_text')
            );
            // Ekleme model dosyası
            $ekle = $this->Sayfa_model->ekle($eklenecekler);
            if($ekle){
                $data['basarili'] = 'Sayfanız Başarıyla Eklendi';
                header('Refresh : 2');
            }else{
                $data['hatali'] = 'Sayfanız Eklenemedi , Lütfen Daha Sonra Tekrar Deneyiniz';
                header('Refresh : 2');
            }
        }
        $this->load->view('cms/sayfa/ekle_view',$data);
        $this->load->view('cms/static/footer_view');
    }

    /**
     * @param $id - Gelen Sayfa
     * Sayfaya Ait Bilgileri Güncelleme İşlemi
     */
    public function duzenle($id){
            $data['title'] = $id.' numaralı Sayfayı Düzenle';
        $this->load->view('cms/static/header_view',$data);
            // Form Post İçin İD Alma
            $data['id'] = $id;
            // Form Post Ettirme
            if($this->input->post()){
                $duzenlenecekler = array(
                    'sayfa_baslik' => $this->input->post('sayfa_baslik'),
                    'sayfa_seflink'=> permalink($this->input->post('sayfa_baslik')),
                    'sayfa_key'    => $this->input->post('sayfa_etiket'),
                    'sayfa_text'   => $this->input->post('sayfa_text')
                );
                // Düzenleme Modeli
                $duzenle = $this->Sayfa_model->duzenle($duzenlenecekler,$id);
                if($duzenle){
                    $data['basarili'] = 'Sayfanız Başarıyla Düzenlendi';
                    header('Refresh : 2');
                }else{
                    $data['hatali'] = 'Sayfanız Düzenlenemedi , Lütfen Daha Sonra Tekrar Deneyiniz';
                    header('Refresh : 2');
                }
            }
            // Gelen İD Ait Verilere Ulaşma
            $data['sayfa'] = $this->Sayfa_model->bilgiler($id);
        $this->load->view('cms/sayfa/duzenle_view',$data);
        $this->load->view('cms/static/footer_view');
    }

    /**
     * @param $id - Gelen Sayfa
     * Sayfa Silme İşlemi
     */
    public function sil($id){
        $sil = $this->Sayfa_model->sil($id);
        if($sil){
            redirect(site_url('Cms/Sayfa'));
        }else{
            redirect(site_url('Cms/Sayfa'));
        }

    }

}

?>