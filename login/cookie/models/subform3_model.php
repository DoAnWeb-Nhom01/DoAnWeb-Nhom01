<?php
    class Subform3_model extends CI_Model {
    
        function __construct()
            {
                parent::__construct();
            }             
		function insert($data) 
            {
                $this->db->insert('sub1', $data);
            }                                              
    } 
?>