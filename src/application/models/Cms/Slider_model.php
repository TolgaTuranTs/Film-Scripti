<?php
/**
 * Slider Veritabanı İşlemleri
 * User: Tolga TURAN
 * Date: 02.02.2017
 * Time: 15:16
 */

// Koruma Kalkanı
defined('BASEPATH') OR exit('Bu Sayfaya Giriş İznini Bulunmamaktadır');

class Slider_model extends CI_Model{

    function __construct(){
        parent::__construct();
        // DB Yükle
        $this->load->database();
    }

    /**
     * @param $film_id
     * @return bool
     * Filmi Slidera Ekleme
     * Eklenmişmi Eklenmemiş mi Kontrol Yapma
     */
    public function onayla($film_id){
        $data = array('film_id' => $film_id);
        // Daha Önce Eklenmişse Uyarı Ver
        $this->db->select('film_id');
        $this->db->from('slider');
        $this->db->where('film_id',$film_id);
        $kontrol = $this->db->get()->row();
        if($kontrol){
            echo '<script type="text/javascript">
            alert("Hata ! Bu Film Daha Önce Slidera Eklendi. Lütfen Farklı Slider Seçiniz");
            window.location="'.site_url('Cms/Slider/ekle').'";
            </script>';
        }else{
            $ekle = $this->db->insert('slider',$data);
            if($ekle){
                return TRUE;
            }else{
                return FALSE;
            }
        }
    }

    /**
     * @return bool
     * Slider Eklenen Filmleri Listeme
     */
    public function listele(){
        $this->db->select('*');
        $this->db->from('slider');
        $this->db->join('filmler','slider.film_id = filmler.film_id');
        $sliders = $this->db->get()->result_array();
        if($sliders){
            return $sliders;
        }else{
            return FALSE;
        }
    }

    /**
     * @param $slider_id
     * @return bool
     * Sliderdan Filmi Silme
     */
    public function sil($slider_id){
        $this->db->where('slider_id',$slider_id);
        $sil = $this->db->delete('slider');
        if($sil){
            return TRUE;
        }else{
            return FALSE;
        }
    }

}

?>