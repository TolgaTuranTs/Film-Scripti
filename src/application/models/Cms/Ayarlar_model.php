<?php
/**
 * Site Ayarlar Veritabanı İşlemleri
 * User: Tolga TURAN
 * Date: 24.01.2017
 * Time: 12:15
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

class Ayarlar_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // DB Yükle
        $this->load->database();
    }

    /**
     * Genel Ayarlara Erişme Fonksiyonu
     */
    public function genel(){
        $this->db->select('*');
        $this->db->from('site_ayarlari');
        $bilgiler = $this->db->get()->row();
        if($bilgiler){
            return $bilgiler;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $duzenlenecekler
     * @return Genel Ayarları Kaydetme Fonksiyonu
     */
    public function genel_kaydet($duzenlenecekler){
        $duzenle = $this->db->update('site_ayarlari',$duzenlenecekler);
        if($duzenle){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $duzenlenecekler
     * @return Cache Ayarlarını Kaydetme Fonksiyonu
     */
    public function cache_kaydet($duzenlenecekler){
        $duzenle = $this->db->update('site_ayarlari',$duzenlenecekler);
        if($duzenle){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     * Reklam Ayarlara Erişme Fonksiyonu
     */
    public function reklam(){
        $this->db->select('*');
        $this->db->from('reklamlar');
        $bilgiler = $this->db->get()->row();
        if($bilgiler){
            return $bilgiler;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $duzenlenecekler
     * Reklam Ayarlarını Güncelleme İşlemi
     */
    public function reklam_kaydet($duzenlenecekler){
        $duzenle = $this->db->update('reklamlar',$duzenlenecekler);
        if($duzenle){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}

?>