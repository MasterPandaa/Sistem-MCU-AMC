<?php
    class M_meja4 extends CI_Model {

        function search(){
            $cari = $this->input->GET('cari', TRUE);
            $data = $this->db->query("SELECT * from pasien where nama like '$cari' and status='sudah ada saran'");
            return $data->result();
        }

        function hasil(){
            $this->db->select('*');
            return $this->db->get('pasien')->result();
        }
        function saran(){
            $this->db->select('*');
            $this->db->where('status','sudah ada saran');
            $this->db->order_by('jam_datang','desc');
            return $this->db->get('pasien')->result();
        }
        function sudah_cetak(){
            $this->db->select('*');
            $this->db->where('status','sudah dicetak');
            return $this->db->get('pasien')->result();
        }
        function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }

        function print($id){
            $this->db->select('*');
            $this->db->from('pasien');
            $this->db->where('id',$id);
            $query=$this->db->get();
            return $query;
        }

        public function excel()
        {
             $this->db->select('*');
             $this->db->from('pasien');
   
             return $this->db->get();
        }

    }
