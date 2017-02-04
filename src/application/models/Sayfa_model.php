<?php
/**
 * Created by PhpStorm.
 * User: Tolga TURAN
 * Date: 27.01.2017
 * Time: 15:28
 */

class Sayfa_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // DB Yükle
        $this->load->database();
    }

    /**
     * @param $sayfa_seflink - Gelen Sayfa Seflinki
     * @return mixed
     * Gelen Sayfa Bilgilerine Erişme
     */
    public function bilgiler($sayfa_seflink){
        $this->db->select('*');
        $this->db->from('sayfalar');
        $this->db->where('sayfa_seflink',$sayfa_seflink);
        $data = $this->db->get()->row();
        if($data){
            return $data;
        }else{
            redirect(site_url());
        }
    }

}


?>