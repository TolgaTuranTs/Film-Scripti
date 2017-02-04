<?php
/**
 * Film Arama İşlemleri
 * User: Tolga TURAN
 * Date: 30.01.2017
 * Time: 16:31
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

class Ara_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // DB Yükle
        $this->load->database();
    }

    /**
     * @param $ara - Gelen Film
     * @return Film Arama İşlemi
     */
    public function ara($search){
        $this->db->select('*');
        $this->db->from('filmler');
        $this->db->like('film_baslik',$search);
        $this->db->or_like('film_hakkinda',$search);
        $this->db->or_like('film_etiket',$search);
        $data = $this->db->get()->result_array();
        if($data) {
            return $data;
        }else{
            return FALSE;
        }
    }



}


?>