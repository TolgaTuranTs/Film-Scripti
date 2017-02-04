<?php
/**
 * Film İzleme İle İlgili İşlemler
 * User: Tolga TURAN
 * Date: 30.01.2017
 * Time: 16:31
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

class Film_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // DB Yükle
        $this->load->database();
    }

    /**
     * @param $film_seflink - Gelen Film
     * @return Film İzleme İşlemi
     */
    public function izle($film_seflink){
        $this->db->select('*');
        $this->db->from('filmler');
        $this->db->where('film_seflink',$film_seflink);
        $this->db->join('kategoriler','filmler.film_kategori = kategoriler.kategori_id');
        $data = $this->db->get()->row();
        if($data) {
            // Film Hit Sistemi - İzlenme
            $this->db->set('film_hit', 'film_hit+1', FALSE);
            $this->db->where('film_seflink', $film_seflink);
            $this->db->update('filmler');
            return $data;
        }else{
            // Gelen Film Yoksa Anasayfaya Git
            redirect(site_url());
        }
    }

    /**
     * @param $yorum_eklenecekler
     * Yorum Ekleme İşlemi
     */
    public function yorum_ekle($yorum_eklenecekler){
        $yorum_ekle = $this->db->insert('yorumlar',$yorum_eklenecekler);
        if($yorum_ekle){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $film_id
     * @return bool
     * Filme ait Yorumları Listeleme
     */
    public function yorum_listele($film_id){
        $this->db->select('*');
        $this->db->from('yorumlar');
        $this->db->where('film_id',$film_id);
        $this->db->where('yorum_onay',1);
        $this->db->order_by('yorum_id','DESC');
        $data = $this->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $film_seflink
     * @return bool
     * Silme Ait Seo Bilgilerine Erişme
     */
    public function bilgiler($film_seflink){
        $this->db->select('*');
        $this->db->from('filmler');
        $this->db->where('film_seflink',$film_seflink);
        $data = $this->db->get()->row();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

}


?>