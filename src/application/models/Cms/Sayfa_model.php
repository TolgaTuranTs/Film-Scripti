<?php
/**
 * Sayfa Veritabanı
 * User: Tolga TURAN
 * Date: 27.01.2017
 * Time: 13:44
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

class Sayfa_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // DB Yükle
        $this->load->database();
    }

    /**
     * @param $eklenecekler -> Formdan Gelen datalar
     * @return Sayfa Ekleme Veritabanı
     */
    public function ekle($eklenecekler){
        $ekle = $this->db->insert('sayfalar',$eklenecekler);
        if($ekle){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     * Sayfa Listeleme
     */
    public function listele(){
        $this->db->select('*');
        $this->db->from('sayfalar');
        $data = $this->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $id - Gelen Sayfa
     * Sayfaya Ait Bilgilere Erişme
     */
    public function bilgiler($id){
        $this->db->select('*');
        $this->db->from('sayfalar');
        $this->db->where('sayfa_id',$id);
        $data = $this->db->get()->row();
        if($data){
            return $data;
        }else{
            // Yoksa Sayfa Listesine Gitsin
            redirect(site_url('Cms/Sayfa'));
        }
    }

    /**
     * @param $duzenlenecekler
     * @param $id
     * Sayfa Düzenleme İşlemi
     */
    public function duzenle($duzenlenecekler,$id){
        $this->db->where('sayfa_id',$id);
        $duzenle = $this->db->update('sayfalar',$duzenlenecekler);
        if($duzenle){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $id - Gelen Kategori
     * Sayfa Silme Veritabanı İşlemi
     */
    public function sil($id){
        $this->db->where('sayfa_id',$id);
        $sil = $this->db->delete('sayfalar');
        if($sil){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}


?>