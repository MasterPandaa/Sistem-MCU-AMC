<?php
    class M_pasien extends CI_Model {

        function get_id(){
            $today = date('dmy');
           
            $today2 = date('Y-m-d');
            //  var_dump($today2);
            // die();
            $q = $this->db->query("SELECT MAX(RIGHT(kode_booking,4)) AS kd_max FROM pasien WHERE DATE(tgl_daftar)=CURDATE()");
          
            $kd = "";
            if($q->num_rows()>0){
                foreach($q->result() as $k){
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%04s", $tmp);
                    
                }
               
            }else{
                $kd = "0001";
            }
            return $kdbook = date('dmy').$kd;
                //  var_dump($kdbook);
                // die();
            
            // if ($query->num_rows() == 0) {
                
            //     return $kd_book =  $today."0001";
            //     var_dump($kd_book);
            //     die();
            // }else{
            //     $max = $query->row();
            //     $max2 = $max + 1;
            //     var_dump($max2);
            //     die();
            //     return $kd_book = sprintf($today.$max+1);
               
            // }
            
        }
        function in_data($data){
            return $this->db->insert('pasien', $data);
        }

        function hasil($kode_booking){
            $this->db->select('*');
            $this->db->where('kode_booking',$kode_booking);
            return $this->db->get('pasien')->result();
           
            // $this->db->from('kajian');
            // $this->db->where('data_id','31');
            
        }
    }
