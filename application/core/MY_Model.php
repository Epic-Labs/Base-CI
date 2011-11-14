<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {

	protected $tbl = NULL;

	/*********************************************************************************************************************
	 
	Constructor 
	 
	*********************************************************************************************************************/ 
	
	public function __construct() {

		parent::__construct();

	}

	/*********************************************************************************************************************
	
	Insert
	
	*********************************************************************************************************************/

	public function insert( $insert_data )
	{

		return $this->db->insert($this->tbl, $insert_data);
	}

	/*********************************************************************************************************************
	
	Get all 
	
	*********************************************************************************************************************/
	
	public function get_all(){
	
		return $this->db->get($this->tbl)->result();
	}

	/*********************************************************************************************************************
	
	Get by ID. Can get several by passing an array of IDs
	
	*********************************************************************************************************************/

	function get( $id ) {

		if( is_array( $id ) )
		{
			$this->firephp->log('modeling'); //debug only
		
			return $this->db->where_in( 'id', $id )->get( $this->tbl )->result();
		
		}
		
		return $this->db->get_where($this->tbl, array('id' => $id))->result();
	}

	/*********************************************************************************************************************
	
	Get by field name
	
	*********************************************************************************************************************/

	public function get_by_field($field_name, $field_value){

		return $this->db->get_where( $this->tbl, array( $field_name => $field_value ) )->result();
	}

	/*********************************************************************************************************************
	
	Update
	
	*********************************************************************************************************************/

	function update( $id, array $update_data){
	
		return $this->db->where( 'id', $id )->update($this->tbl, $update_data);
	
	}

	/*********************************************************************************************************************
	
	Delete
	
	*********************************************************************************************************************/
	
	public function delete(int $id){
	
		return $this->db->where('id', $id)->delete($this->tbl);
	
	}

}