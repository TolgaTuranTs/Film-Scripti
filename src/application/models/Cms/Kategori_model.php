<?php
/**
 * Kategori Veritabanı
 * User: Tolga TURAN
 * Date: 27.01.2017
 * Time: 11:33
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

class Kategori_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // DB Yükle
        $this->load->database();
    }

    /**
     * @param $eklenecekler -> Formdan Gelen datalar
     * @return Kategori Ekleme Veritabanı
     */
    public function ekle($eklenecekler){
        $ekle = $this->db->insert('kategoriler',$eklenecekler);
        if($ekle){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     * Kategori Listeleme
     */
    public function listele(){
        $this->db->select('*');
        $this->db->from('kategoriler');
        $data = $this->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $id - Gelen Kategori
     * Kategoriye Ait Bilgilere Erişme
     */
    public function bilgiler($id){
        $this->db->select('*');
        $this->db->from('kategoriler');
        $this->db->where('kategori_id',$id);
        $data = $this->db->get()->row();
        if($data){
            return $data;
        }else{
            // Yoksa Kategori Listesine Gitsin
            redirect(site_url('Cms/Kategori'));
        }
    }

    /**
     * @param $duzenlenecekler
     * @param $id
     * Kategori Düzenleme İşlemi
     */
    public function duzenle($duzenlenecekler,$id){
        $this->db->where('kategori_id',$id);
        $duzenle = $this->db->update('kategoriler',$duzenlenecekler);
        if($duzenle){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $id - Gelen Kategori
     * Kategori Silme Veritabanı İşlemi
     */
    public function sil($id){
        $this->db->where('kategori_id',$id);
        $sil = $this->db->delete('kategoriler');
        if($sil){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}


?>