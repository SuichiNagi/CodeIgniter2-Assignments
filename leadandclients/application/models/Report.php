<?php 

class Report extends CI_Model{
    function get_all_lists_and_leads(){
        $query = "SELECT CONCAT(clients.first_name, ' ',clients.last_name) AS client_name, 
        COUNT(leads.leads_id) AS number_of_leads
        FROM 
            clients 
                INNER JOIN 
            sites ON clients.client_id = sites.client_id
                INNER JOIN leads
                ON sites.site_id = leads.site_id
        GROUP BY CONCAT(clients.first_name, ' ',clients.last_name)";
        return $this->db->query($query)->result_array();
    }
}