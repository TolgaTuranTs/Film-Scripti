<?php
/**
 * Yorum Veritabanı İşlemleri
 * User: Tolga TURAN
 * Date: 31.01.2017
 * Time: 15:50
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

class Yorum_model extends CI_Model{

    function __construct(){
        // DB Yükle
        $this->load->database();
    }

    /**
     * @return bool
     * Yorum Listesi
     */
    public function listele(){
        $this->db->select('*');
        $this->db->from('yorumlar');
        $this->db->order_by('yorum_id','DESC');
        $this->db->join('filmler','yorumlar.film_id = filmler.film_id');
        $yorumlar = $this->db->get()->result_array();
        if($yorumlar){
            return $yorumlar;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $yorum_id
     * @return Yorum Onaylama İşlemi
     */
    public function onayla($yorum_id){
        $data = array(
            'yorum_onay' => 1
        );
        $this->db->where('yorum_id',$yorum_id);
        $onayla = $this->db->update('yorumlar',$data);
        if($onayla){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $yorum_id
     * Yoruma Ait Bilgilere Erişme
     */
    public function bilgiler($yorum_id){
        $this->db->select('*');
        $this->db->from('yorumlar');
        $this->db->where('yorum_id',$yorum_id);
        $data = $this->db->get()->row();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $yorum_id
     * Yorum silme işlemi
     */
    public function sil($yorum_id){
        $this->db->where('yorum_id',$yorum_id);
        $sil = $this->db->delete('yorumlar');
        if($sil){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}

?>