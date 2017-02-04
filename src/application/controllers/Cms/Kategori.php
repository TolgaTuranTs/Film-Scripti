<?php
/**
 * Kategori İşlemleri
 * User: Tolga TURAN
 * Date: 27.01.2017
 * Time: 11:31
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İznini Bulunmamaktadır');

class Kategori extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Admin Giriş Yapmamışsa Login Sayfasına Git
        if(!$this->session->userdata('login')){redirect('Cms/giris');}
        // Kategori Veritabanı Model Dosyası
        $this->load->model('Cms/Kategori_model');
        // Seflink Fonksiyonu
        $this->load->helper('seflink');
    }

    /**
     * Kategori Listeleme
     */
    public function index(){
            $data['title'] = 'Kategori İşlemleri';
        $this->load->view('cms/static/header_view',$data);
            // Kategori Listeleme VEritabanı Model İşlemi
            $data['kategoriler'] = $this->Kategori_model->listele();
        $this->load->view('cms/kategori/listele_view',$data);
        $this->load->view('cms/static/footer_view');
    }

    /**
     * Kategori Ekleme İşlemleri
     */
    public function ekle(){
            $data['title'] = 'Kategori Ekleme Sayfası';
        $this->load->view('cms/static/header_view',$data);
        // Form Post Ettirme
        if ($this->input->post()){
            $eklenecekler = array(
              'kategori_baslik'     => $this->input->post('kategori_baslik'),
              'kategori_seflink'    => permalink($this->input->post('kategori_baslik')),
              'kategori_etiket'     => $this->input->post('kategori_etiket')
            );
            // Ekleme model dosyası
            $ekle = $this->Kategori_model->ekle($eklenecekler);
            if($ekle){
                $data['basarili'] = 'Kategoriniz Başarıyla Eklendi';
                header('Refresh : 2');
            }else{
                $data['hatali'] = 'Kategoriniz Eklenemedi , Lütfen Daha Sonra Tekrar Deneyiniz';
                header('Refresh : 2');
            }
        }
        $this->load->view('cms/kategori/ekle_view',$data);
        $this->load->view('cms/static/footer_view');
    }

    /**
     * @param $id - Gelen Kategori
     * Kategoriye Ait Bilgileri Güncelleme İşlemi
     */
    public function duzenle($id){
            $data['title'] = $id.' numaralı Kategoriyi Düzenle';
        $this->load->view('cms/static/header_view',$data);
            // Form Post İçin İD Alma
            $data['id'] = $id;
            // Form Post Ettirme
            if($this->input->post()){
                $duzenlenecekler = array(
                    'kategori_baslik'     => $this->input->post('kategori_baslik'),
                    'kategori_seflink'    => permalink($this->input->post('kategori_baslik')),
                    'kategori_etiket'     => $this->input->post('kategori_etiket')
                );
                // Düzenleme Modeli
                $duzenle = $this->Kategori_model->duzenle($duzenlenecekler,$id);
                if($duzenle){
                    $data['basarili'] = 'Kategoriniz Başarıyla Düzenlendi';
                    header('Refresh : 2');
                }else{
                    $data['hatali'] = 'Kategoriniz Düzenlenemedi , Lütfen Daha Sonra Tekrar Deneyiniz';
                    header('Refresh : 2');
                }
            }
            // Gelen İD Ait Verilere Ulaşma
            $data['kategori'] = $this->Kategori_model->bilgiler($id);
        $this->load->view('cms/kategori/duzenle_view',$data);
        $this->load->view('cms/static/footer_view');
    }

    public function sil($id){
        $sil = $this->Kategori_model->sil($id);
        if($sil){
            redirect(site_url('Cms/Kategori'));
        }else{
            redirect(site_url('Cms/Kategori'));
        }

    }


}

?>