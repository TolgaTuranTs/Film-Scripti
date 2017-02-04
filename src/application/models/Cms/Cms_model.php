<?php
/**
 * Admin Anasayfa Model Dosyası
 * User: Tolga TURAN
 * Date: 02.02.2017
 * Time: 22:31
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

class Cms_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // DB Yükle
        $this->load->database();
    }

    /**
     * @return mixed
     * Toplam Sayfalar Sayısı
     */
    public function toplam_sayfalar(){
        $this->db->select('*');
        $this->db->from('sayfalar');
        $data = $this->db->count_all_results();
        if($data){
            return $data;
        }else{
            return 0 ;
        }
    }

    /**
     * @return int
     * Onaysız Yorumların Toplamı
     */
    public function onaysiz_yorumlar(){
        $this->db->select('*');
        $this->db->from('yorumlar');
        $this->db->where('yorum_onay',0);
        $data = $this->db->count_all_results();
        if($data){
            return $data;
        }else{
            return 0 ;
        }
    }

    /**
     * @return mixed
     * Toplam Filmler Sayısı
     */
    public function toplam_filmler(){
        $this->db->select('*');
        $this->db->from('filmler');
        $data = $this->db->count_all_results();
        if($data){
            return $data;
        }else{
            return 0 ;
        }
    }

    /**
     * @return mixed
     * Toplam Kategori Sayısı
     */
    public function toplam_kategori(){
        $this->db->select('*');
        $this->db->from('kategoriler');
        $data = $this->db->count_all_results();
        if($data){
            return $data;
        }else{
            return 0 ;
        }
    }

    /**
     * @return mixed
     * Toplam İletişim Sayısı
     */
    public function toplam_iletisim(){
        $this->db->select('*');
        $this->db->from('iletisim');
        $data = $this->db->count_all_results();
        if($data){
            return $data;
        }else{
            return 0 ;
        }
    }

    /**
     * @return mixed
     * Toplam Yorum Sayısı
     */
    public function toplam_yorum(){
        $this->db->select('*');
        $this->db->from('yorumlar');
        $data = $this->db->count_all_results();
        if($data){
            return $data;
        }else{
            return 0 ;
        }
    }

    /**
     * @return mixed
     * Toplam Slider Sayısı
     */
    public function toplam_slider(){
        $this->db->select('*');
        $this->db->from('slider');
        $data = $this->db->count_all_results();
        if($data){
            return $data;
        }else{
            return 0 ;
        }
    }

}


?>