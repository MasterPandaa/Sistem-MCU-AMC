<?php
    class M_meja3 extends CI_Model {

        function search(){
            $cari = $this->input->GET('cari', TRUE);
            $data = $this->db->query("SELECT * from pasien where nama like '%$cari%' and status='lengkap, siap diresume'");
            return $data->result();
        }

        function hasil(){
            $this->db->select('*');
            return $this->db->get('pasien')->result();
        }
        function saran(){
            $this->db->select('*');
            $this->db->where('status','lengkap, siap diresume');
            $this->db->order_by('jam_datang','desc');
            return $this->db->get('pasien')->result();
        }
        function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }
        
         function result($id){
            $this->db->select('*');
            $this->db->from('pasien');
            $this->db->where('id',$id);
            $query=$this->db->get();
            return $query;
        }

        function get_pasien($id) {
            $this->db->select('*');
            $this->db->where('id', $id);
            return $this->db->get('pasien')->row();
        }

        function get_pasien_by_paket($paket) {
            $this->db->select('*');
            $this->db->where('status', 'lengkap, siap diresume');
            $this->db->where_in('paket_periksa', $paket);
            $this->db->order_by('jam_datang', 'desc');
            return $this->db->get('pasien')->result();
        }

        function get_paket_type($paket) {
            if (in_array($paket, ['C1', 'C2', 'FLEXI'])) {
                return 'c1c2flexi';
            } elseif ($paket == 'Bina BNI') {
                return 'bni';
            } elseif ($paket == 'TAD') {
                return 'tad';
            } elseif ($paket == 'D') {
                return 'd';
            } else {
                return 'default';
            }
        }

    }
