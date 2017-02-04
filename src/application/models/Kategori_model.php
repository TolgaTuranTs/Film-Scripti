<?php
/**
 * Kategori İşlemlerinin Veritabanı Dosyası
 * User: Tolga TURAN
 * Date: 27.01.2017
 * Time: 15:28
 */

class Kategori_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // DB Yükle
        $this->load->database();
    }

    /**
     * @param $kategori_seflink - Gelen Kategori Seflinki
     * @return mixed
     * Gelen Kategori Bilgilerine Erişme
     */
    public function bilgiler($kategori_seflink){
        $this->db->select('*');
        $this->db->from('kategoriler');
        $this->db->where('kategori_seflink',$kategori_seflink);
        $data = $this->db->get()->row();
        if($data){
            return $data;
        }else{
            redirect(site_url());
        }
    }

    /**
     * @param $kategori_id
     * @return Kategori İD Ait Filmleri Listeleme İşlemi
     */
    public function film_bul($kategori_id){
        $this->db->select('*');
        $this->db->from('filmler');
        $this->db->where('film_kategori',$kategori_id);
        $kategori_filmler = $this->db->get()->result_array();
        if($kategori_filmler){
            return $kategori_filmler;
        }else{
            return FALSE;
        }
    }


}


?>