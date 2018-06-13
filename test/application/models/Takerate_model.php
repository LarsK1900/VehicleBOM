<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Takerate_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get takerate by idTakeRate
     */
    function get_takerate($idTakeRate)
    {
        return $this->db->get_where('takerate',array('idTakeRate'=>$idTakeRate))->row_array();
    }
    
    /*
     * Get all takerate count
     */
    function get_all_takerate_count()
    {
        $this->db->from('takerate');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all takerate
     */
    function get_all_takerate($params = array())
    {
        $this->db->order_by('idTakeRate', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('takerate')->result_array();
    }
        
    /*
     * function to add new takerate
     */
    function add_takerate($params)
    {
        $this->db->insert('takerate',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update takerate
     */
    function update_takerate($idTakeRate,$params)
    {
        $this->db->where('idTakeRate',$idTakeRate);
        return $this->db->update('takerate',$params);
    }
    
    /*
     * function to delete takerate
     */
    function delete_takerate($idTakeRate)
    {
        return $this->db->delete('takerate',array('idTakeRate'=>$idTakeRate));
    }
}
