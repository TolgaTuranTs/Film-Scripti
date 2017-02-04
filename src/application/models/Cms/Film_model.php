<?php
/**
 * Film Veritabanı
 * User: Tolga TURAN
 * Date: 27.01.2017
 * Time: 16:05
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
     * @param $eklenecekler -> Formdan Gelen datalar
     * @return Film Ekleme Veritabanı
     */
    public function ekle($eklenecekler){
        $ekle = $this->db->insert('filmler',$eklenecekler);
        if($ekle){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     * @return bool
     * Film Eklerken Kategori Seçtirmek İçin Kategorileri Listeleme
     */
    public function kategoriler(){
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
     * @return bool
     * Film Listeleme İşlemleri
     * İnner Join İle Filme Ait Kategoriyi Çektik
     */
    public function listele(){
        $this->db->select('*');
        $this->db->from('filmler');
        $this->db->join('kategoriler','filmler.film_kategori = kategoriler.kategori_id');
        $data = $this->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }


    /**
     * @param $id - Gelen Sayfa
     * Filme Ait Bilgilere Erişme
     */
    public function bilgiler($id){
        $this->db->select('*');
        $this->db->from('filmler');
        $this->db->where('film_id',$id);
        $this->db->join('kategoriler','filmler.film_kategori = kategoriler.kategori_id');
        $data = $this->db->get()->row();
        if($data){
            return $data;
        }else{
            // Yoksa Sayfa Listesine Gitsin
            redirect(site_url('Cms/Film'));
        }
    }

    /**
     * @param $duzenlenecekler
     * @param $id
     * Film Düzenleme İşlemi
     */
    public function duzenle($duzenlenecekler,$id){
        $this->db->where('film_id',$id);
        $duzenle = $this->db->update('filmler',$duzenlenecekler);
        if($duzenle){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $id - Gelen Film
     * Film Silme Veritabanı İşlemi
     */
    public function sil($id){
        $this->db->where('film_id',$id);
        $sil = $this->db->delete('filmler');
        if($sil){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}


?>