<?php
/**
 * Admin Kişisel Giriş Çıkış Profil İşlemleri
 * User: Tolga TURAN
 * Date: 24.01.2017
 * Time: 12:08
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunmamaktadır');

class Auth extends CI_Controller{

    function __construct(){
        parent::__construct();
        // Auth Veritabanı Model Dosyası
        $this->load->model('Cms/Auth_model');
    }

    /**
     * Admin Giriş İşlemi
     */
    public function login(){
        // Form Post İşlemleri
        if(isset($_POST['loginF'])){
             $email    = $this->input->post('email');
             $password = $this->input->post('password');
            // Giriş Veritabanı İşlemler Bölümü
            $login = $this->Auth_model->login($email,$password);
            if($login){
                // Session Kaydetme
                $this->session->set_userdata('username',$username);
                $this->session->set_userdata('password',$password);
                $this->session->set_userdata('login',TRUE);
                redirect('Cms');
            }else{
                redirect('Cms');
            }
        }
        $this->load->view('cms/auth/login_view');
    }

    /**
     * Admin Oturum Sonlandırma
     */
    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('login');
        redirect('Cms');
    }

    /**
     * Kişisel Profil Alanı
     * Profil Bilgilerini Düzenleme
     */
    public function profil(){
            // Sayfa Başlığı
            $data['title'] = 'Kişisel Profil Alanı';
        $this->load->view('cms/static/header_view',$data);
            // Admin Bilgilerine Erişme İşlemi
            $bilgiler['bilgilerim'] = $this->Auth_model->bilgiler();
            // Form Post Ettirme
            if(isset($_POST['profilF'])){
                $duzenlenecekler = array(
                    'adsoyad'   => $this->input->post('adsoyad'),
                    'email'     => $this->input->post('email')
                );
                // Profil Bilgilerini Düzenleme Model Veritabanı
                $duzenle = $this->Auth_model->update($duzenlenecekler);
                if($duzenle){
                    $bilgiler['basarili'] = 'Profil Bilgileriniz Güncellendi , Çıkış Yaparak Yeni Bilgileriniz Aktif Olacaktır';
                    header("Refresh: 2;");
                }else{
                    $bilgiler['basarili'] = 'Profil Bilgilerini Güncellerken Hata Oluştu , Lütfen Daha Sonra Tekrar Deneyiniz';
                    header("Refresh: 2;");
                }
            }
        $this->load->view('cms/auth/profil_view',$bilgiler);
        $this->load->view('cms/static/footer_view');
    }

    /**
     * Şifre Değiştirme Alanı
     */
    public function password(){
            // Sayfa Başlığı
            $data['title'] = 'Şifre Değiştirme Alanı';
        $this->load->view('cms/static/header_view',$data);
            // Şifreye Erişme Veritabanı Modeli
            $bilgiler['sifre'] = $this->Auth_model->bilgiler();
            // Form Post Ettirip Arraya Aktarma
            if(isset($_POST['sifreF'])){
                $duzenlenecekler = array(
                    'password'  => $this->input->post('password')
                );
                // Şifre Düzenleme Veritabanı Model Alanı
                $duzenle = $this->Auth_model->update($duzenlenecekler);
                if($duzenle){
                    $bilgiler['basarili'] = 'Şifreniz Başarıyla Değiştirildi , Çıkış Yaptıktan Sonra Yeni Şifreyi Kullanabilirsiniz';
                    header('Refresh: 2');
                }else{
                    $bilgiler['hatali'] = 'Şifreniz Değiştirilemedi , Lütfen Daha Sonra Tekrar Deneyiniz';
                    header('Refresh: 2');
                }
            }
        $this->load->view('cms/auth/password_view',$bilgiler);
        $this->load->view('cms/static/footer_view');
    }

}

?>