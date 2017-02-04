<?php
/**
 * Site İle İlgili Genel Ayarlar -> Tüm Yerden Çekilebilir
 * User: Tolga TURAN
 * Date: 27.01.2017
 * Time: 14:32
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunmamaktadır');

Class tema {

    /**
     * @return Site ayarlarına erişme
     */
    public function site_ayarlari(){
        $ci = & get_instance();
        $ci->db->select('*');
        $ci->db->from('site_ayarlari');
        $data = $ci->db->get()->row();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    /**
     * Site Reklamlarına Erişme
     */
    public function reklamlar(){
        $ci = & get_instance();
        $ci->db->select('*');
        $ci->db->from('reklamlar');
        $data = $ci->db->get()->row();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    /**
     * Sidebar Kategorileri Listeleme
     */
    public function kategoriler(){
        $ci = & get_instance();
        $ci->db->select('*');
        $ci->db->from('kategoriler');
        $ci->db->order_by('kategori_id','DESC');
        $kategoriler = $ci->db->get()->result_array();
        if($kategoriler){
            return $kategoriler;
        }else{
            return FALSE;
        }
    }

    /**
     * @return bool
     * Header Sayfa Listeleme
     */
    public function sayfalar(){
        $ci = & get_instance();
        $ci->db->select('*');
        $ci->db->from('sayfalar');
        $ci->db->order_by('sayfa_id','DESC');
        $data = $ci->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    /**
     * @return bool
     * Sidebar Son Yorumları Listeleme
     * 3 Adet - Limit
     */
    public function son_yorumlar(){
        $ci = & get_instance();
        $ci->db->select('*');
        $ci->db->from('yorumlar');
        $ci->db->order_by('yorum_id','DESC');
        $ci->db->where('yorum_onay',1);
        $ci->db->join('filmler','yorumlar.film_id = filmler.film_id');
        $ci->db->limit(3);
        $data = $ci->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    /**
     * @return bool
     * Sidebar Günün Filmlerini Listeleme
     */
    public function gunun_filmleri(){
        $ci = & get_instance();
        $ci->db->select('*');
        $ci->db->from('filmler');
        $ci->db->order_by('film_hit','DESC');
        $ci->db->limit(3);
        $data = $ci->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }


}

?>