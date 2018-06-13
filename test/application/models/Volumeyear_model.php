<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Volumeyear_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get volumeyear by idVolumeYears
     */
    function get_volumeyear($idVolumeYears)
    {
        return $this->db->get_where('volumeyears',array('idVolumeYears'=>$idVolumeYears))->row_array();
    }
    
    /*
     * Get all volumeyears count
     */
    function get_all_volumeyears_count()
    {
        $this->db->from('volumeyears');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all volumeyears
     */
    function get_all_volumeyears($params = array())
    {
        $this->db->order_by('idVolumeYears', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('volumeyears')->result_array();
    }
        
    /*
     * function to add new volumeyear
     */
    function add_volumeyear($params)
    {
        $this->db->insert('volumeyears',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update volumeyear
     */
    function update_volumeyear($idVolumeYears,$params)
    {
        $this->db->where('idVolumeYears',$idVolumeYears);
        return $this->db->update('volumeyears',$params);
    }
    
    /*
     * function to delete volumeyear
     */
    function delete_volumeyear($idVolumeYears)
    {
        return $this->db->delete('volumeyears',array('idVolumeYears'=>$idVolumeYears));
    }
}
