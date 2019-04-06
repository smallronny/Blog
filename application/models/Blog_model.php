<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog_model extends CI_Model {
        public function getEntries(){
                $this->db->order_by('id DESC');
                $this->db->limit(6);
                return $this->db->get('entries')->result();
        }
        public function insert($table, $data){
                return $this->db->insert($table, $data);
        }
}