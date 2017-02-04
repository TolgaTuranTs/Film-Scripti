<?php
/**
 * Film İşlemleri
 * User: Tolga TURAN
 * Date: 27.01.2017
 * Time: 16:04
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İznini Bulunmamaktadır');

class Film extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Admin Giriş Yapmamışsa Login Sayfasına Git
        if(!$this->session->userdata('login')){redirect('Cms/giris');}
        // Film Veritabanı Model Dosyası
        $this->load->model('Cms/Film_model');
        // Seflink Fonksiyonu
        $this->load->helper('seflink');
    }

    /**
     * Film Listeleme
     */
    public function index(){
            $data['title'] = 'Film İşlemleri';
        $this->load->view('cms/static/header_view',$data);
            // Film Listeleme Veritabanı Model İşlemi
            $data['filmler'] = $this->Film_model->listele();
        $this->load->view('cms/film/listele_view',$data);
        $this->load->view('cms/static/footer_view');
    }

    /**
     * Film Ekleme İşlemleri
     */
    public function ekle(){
            $data['title'] = 'Film Ekleme Sayfası';
        $this->load->view('cms/static/header_view',$data);
        // Form Post Ettirme
        if ($this->input->post()){
            // Resim Yükleme İşlemi
            $config['upload_path']      = 'public/afisler/';
            $config['allowed_types']    = 'gif|jpg|jpeg|png';
            $config['file_name']        = permalink($this->input->post('film_baslik'));
            $this->load->library('upload',$config);
            $sonuc                      = $this->upload->do_upload('film_resim');
            $bilgiler                   = $this->upload->data();
            if($sonuc){
                $eklenecekler = array(
                    'film_baslik'   => $this->input->post('film_baslik'),
                    'film_seflink'  => permalink($this->input->post('film_baslik')),
                    'film_kategori' => $this->input->post('film_kategori'),
                    'film_sure'     => $this->input->post('film_sure'),
                    'film_etiket'   => $this->input->post('film_etiket'),
                    'film_imbd'     => $this->input->post('film_imbd'),
                    'film_yili'     => $this->input->post('film_yili'),
                    'film_hakkinda' => $this->input->post('film_hakkinda'),
                    'film_resim'    => $bilgiler['raw_name'] . $bilgiler['file_ext'],
                    'film_tarih'    => date('d/m/Y'),
                    'film_hit'      => 0,
                    'film_linkler'  => json_encode($this->input->post('link'))
                );
                $ekle = $this->Film_model->ekle($eklenecekler);
                if($ekle){
                    $data['basarili'] = 'Film Başarılı Bir Şekilde Yüklendi';
                    header('Refresh: 2');
                }else{
                    $data['hatali'] = 'Film Yüklenemedi , Lütfen Daha Sonra Tekrar Deneyiniz';
                    header('Refresh: 2');
                }
            }else{
                $bilgiler['hatali'] = 'Resim Yüklenemedi , Lütfen Daha Sonra Tekrar Deneyiniz';
                header('Refresh: 2');
            }
        }
            // Kategorileri Listeleme
            $data['kategoriler'] = $this->Film_model->kategoriler();
        $this->load->view('cms/film/ekle_view',$data);
        $this->load->view('cms/static/footer_view');
    }

    /**
     * @param $id - Gelen Kategori
     * Kategoriye Ait Bilgileri Güncelleme İşlemi
     */
    public function duzenle($id){
            $data['title'] = $id.' numaralı Filmi Düzenle';
        $this->load->view('cms/static/header_view',$data);
            // Form Post İçin İD Alma
            $data['id'] = $id;
        // Form Post Ettirme
        if ($this->input->post()){
            // Resim Yükleme İşlemi
            $config['upload_path']      = 'public/afisler/';
            $config['allowed_types']    = 'gif|jpg|jpeg|png';
            $config['file_name']        = permalink($this->input->post('film_baslik')).'_1';
            $this->load->library('upload',$config);
            $sonuc                      = $this->upload->do_upload('film_resim');
            $bilgiler                   = $this->upload->data();
            if($sonuc){
                $eklenecekler = array(
                    'film_baslik'   => $this->input->post('film_baslik'),
                    'film_seflink'  => permalink($this->input->post('film_baslik')),
                    'film_kategori' => $this->input->post('film_kategori'),
                    'film_sure'     => $this->input->post('film_sure'),
                    'film_etiket'   => $this->input->post('film_etiket'),
                    'film_imbd'     => $this->input->post('film_imbd'),
                    'film_yili'     => $this->input->post('film_yili'),
                    'film_hakkinda' => $this->input->post('film_hakkinda'),
                    'film_resim'    => $bilgiler['raw_name'] . $bilgiler['file_ext'],
                    'film_linkler'  => json_encode($this->input->post('link'))
                );
                $ekle = $this->Film_model->duzenle($eklenecekler,$id);
                if($ekle){
                    $data['basarili'] = 'Film Başarılı Bir Şekilde Düzenlendi';
                    header('Refresh: 2');
                }else{
                    $data['hatali'] = 'Film Düzenlenemedi , Lütfen Daha Sonra Tekrar Deneyiniz';
                    header('Refresh: 2');
                }
            }else{
                // Resim Yüklenmemişse
                $eklenecekler = array(
                    'film_baslik'   => $this->input->post('film_baslik'),
                    'film_seflink'  => permalink($this->input->post('film_baslik')),
                    'film_kategori' => $this->input->post('film_kategori'),
                    'film_sure'     => $this->input->post('film_sure'),
                    'film_etiket'   => $this->input->post('film_etiket'),
                    'film_imbd'     => $this->input->post('film_imbd'),
                    'film_yili'     => $this->input->post('film_yili'),
                    'film_hakkinda' => $this->input->post('film_hakkinda'),
                    'film_linkler'  => json_encode($this->input->post('link'))
                );
                $ekle = $this->Film_model->duzenle($eklenecekler,$id);
                if($ekle){
                    $data['basarili'] = 'Film Başarılı Bir Şekilde Düzenlendi';
                    header('Refresh: 2');
                }else{
                    $data['hatali'] = 'Film Düzenlenemedi , Lütfen Daha Sonra Tekrar Deneyiniz';
                    header('Refresh: 2');
                }
            }
        }
            // Gelen İD Ait Verilere Ulaşma
            $data['film'] = $this->Film_model->bilgiler($id);
            // Kategorileri Listeleme
            $data['kategoriler'] = $this->Film_model->kategoriler();
        $this->load->view('cms/film/duzenle_view',$data);
        $this->load->view('cms/static/footer_view');
    }

    /**
     * @param $id Gelen Film
     * Film Silme İşlemi
     */
    public function sil($id){
        $sil = $this->Film_model->sil($id);
        if($sil){
            redirect(site_url('Cms/Film'));
        }else{
            redirect(site_url('Cms/Film'));
        }

    }


}

?>