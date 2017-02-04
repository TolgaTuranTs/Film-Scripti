<?php
/**
 * Admin Kişisel Giriş Çıkış Profil Veritabanı İşlemleri
 * User: Tolga TURAN
 * Date: 24.01.2017
 * Time: 12:15
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Buraya Giriş İzniniz Bulunmamaktadır');

class Auth_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // DB Yükleme
        $this->load->database();
    }

    /**
     * @param $email
     * @param $password
     * @return Admin Giriş Sistemi
     */
    public function login($email,$password){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $data = $this->db->get();
        if($data->num_rows()>0)
            return TRUE;
        else
            return FALSE;
    }

    /**
     * Admin Profil Bilgilerine Erişme
     */
    public function bilgiler(){
        $this->db->select('*');
        $this->db->from('admin');
        $bilgiler = $this->db->get()->row();
        if($bilgiler){
            return $bilgiler;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $data -> Gelen Veriler
     * Profil Düzenleme Alanı
     */
    public function update($duzenlenecekler){
        $duzenle = $this->db->update('admin',$duzenlenecekler);
        if($duzenle){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}

?>