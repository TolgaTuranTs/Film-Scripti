<?php
/**
 * İletişim Veritabanı İşlemleri
 * User: Tolga TURAN
 * Date: 02.02.2017
 * Time: 21:16
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İzniniz Bulunmamaktadır');

class Contact_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // DB Yükle
        $this->load->database();
    }

    /**
     * @return bool
     * İletişim Mesajlarını Listele
     */
    public function listele(){
        $this->db->select('*');
        $this->db->from('iletisim');
        $this->db->order_by('iletisim_id','DESC');
        $data = $this->db->get()->result_array();
        if($data){
            return $data;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $iletisim_id
     * @return bool
     * İletişim Bilgilerine Erişme
     */
    public function oku($iletisim_id){
        $this->db->select('*');
        $this->db->from('iletisim');
        $this->db->where('iletisim_id',$iletisim_id);
        $data = $this->db->get()->row();
        if($data){
            return $data;
        }else{
            redirect(site_url('Cms/iletisim'));
        }
    }

    /**
     * @param $iletisim_id
     * @return bool
     * İletişim Mesajını Silme
     */
    public function sil($iletisim_id){
        $this->db->where('iletisim_id',$iletisim_id);
        $sil = $this->db->delete('iletisim');
        if($sil){
            return TRUE;
        }else{
            return FALSE;
        }
    }


}

?>