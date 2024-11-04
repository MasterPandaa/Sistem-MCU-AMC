<?php
    class M_meja1 extends CI_Model {

        function search(){
            $cari = $this->input->GET('cari', TRUE);
            $data = $this->db->query("SELECT * from pasien where nama like '%$cari%'");
            return $data->result();
        }

        function hasil(){
            $this->db->select('*');
            return $this->db->get('pasien')->result();
        }
        function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }

        function datang(){
            $this->db->select('*');
            $this->db->where('status','');
            $this->db->order_by('prodi','asc');
            return $this->db->get('pasien')->result();
        }

        function cetak($id){
            $this->db->select('*');
            $this->db->from('pasien');
            $this->db->where('id',$id);
            $query=$this->db->get();
            return $query;
        }
    }
