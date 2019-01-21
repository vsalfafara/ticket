<?php
class Fare_model extends CI_Model {

   public function __construct()
   {
      $this->load->database();
   }

   public function getUser($id) {
      $data = array(
         'login_gid' => $id
      );

      $this->db->select('*');
      $this->db->from('public.user');
      $this->db->where($data);

      $query = $this->db->get();

      return $query->row_array();
   }
}