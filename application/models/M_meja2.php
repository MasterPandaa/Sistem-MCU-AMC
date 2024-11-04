<?php
    class M_meja2 extends CI_Model {
        function search(){
            $cari = $this->input->GET('cari', TRUE);
            $data = $this->db->query("SELECT * from pasien where nama like '%$cari%' and status='datang'");
            return $data->result();
        }
        function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }
        function vital_sign(){
            $this->db->select('*');
            $this->db->where('status','datang');
            $this->db->order_by('jam_datang','desc');
            return $this->db->get('pasien')->result();
           
        }
    }
