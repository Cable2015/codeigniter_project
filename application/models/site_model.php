<?php
class Site_model extends CI_Model {
    //  function get_all_courses()
    //  {
    //      return $this->db->query("SELECT * FROM courses")->result_array();
    //  }
    //  function get_course_by_id($course_id)
    //  {
    //      return $this->db->query("SELECT * FROM courses WHERE id = ?", array($course_id))->row_array();
    //  }
        function get_records()
        {
          $query = $this->db->get('data');
          return $query->result();
        }

        function add_record($data)
        {
          $this->db->insert('data', $data);
          return;
        }
        function update_record()
        {
          $this->db->where('id', 1);
          $this->db->update('data');
        }

        function delete_row()
        {
          $this->db->where('id', $this->uri->segment(3));
          $this->db->delete('data', $data);
        }

}
 ?>
