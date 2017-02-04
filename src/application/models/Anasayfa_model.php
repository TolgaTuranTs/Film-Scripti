<?php
/**
 * Anasayfa Veritabanı İşlemleri
 * User: Tolga TURAN
 * Date: 30.01.2017
 * Time: 16:16
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

class Anasayfa_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // DB Yükle
        $this->load->database();
    }

    /**
     * @return bool
     * Filmleri Listeleme İşlemleri
     */
    public function listele(){
        $this->db->select('*');
        $this->db->from('filmler');
        $this->db->order_by('film_id','DESC');
        $this->db->join('kategoriler', 'filmler.film_kategori = kategoriler.kategori_id');
        $data = $this->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    public function slider(){
        $this->db->select('*');
        $this->db->from('slider');
        $this->db->order_by('slider_id','DESC');
        $this->db->join('filmler','slider.film_id = filmler.film_id');
        $this->db->join('kategoriler','filmler.film_kategori = kategoriler.kategori_id');
        $data = $this->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

}


?>