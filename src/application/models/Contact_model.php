<?php
/**
 * İletişim Veri tabanı işlemleri
 * User: Tolga TURAN
 * Date: 02.02.2017
 * Time: 16:59
 */

class Contact_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // DB Yükle
        $this->load->database();
    }

    /**
     * @param $eklenecekler
     * @return bool
     * İletişim Kaydetme
     */
    public function kaydet($eklenecekler){
        $kaydet = $this->db->insert('iletisim',$eklenecekler);
        if($kaydet){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}

?>