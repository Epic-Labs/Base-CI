<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class MY_Model extends CI_Model
{

	protected $tbl = NULL;

	/**
	 * Constructor
	 */
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Insert
	 */
	function insert(array $insert_data)
	{
		return $this -> db -> insert($this -> tbl, $insert_data);
	}

	/**
	 * Get all
	 */
	function get_all()
	{

		return $this -> db -> get($this -> tbl) -> result();

	}

	/**
	 * Get By Id
	 */
	function get($id)
	{
		return $this -> db -> get_where($this -> tbl, array('id' => $id)) -> result();
	}

	/**
	 * Get By Field
	 * 
	 * @todo Add options for limit and offset
	 */
	function get_by_field($field_name, $field_value)
	{
		return $this -> db -> get_where($this -> tbl, array($field_name => $field_value)) -> result();
	}

	/**
	 * Update
	 */
	function update($id, array $update_data)
	{
		return $this -> db -> where('id', $id) -> update($this -> tbl, $update_data);
	}

	/**
	 * Delete
	 */
	function delete($id)
	{
		return $this -> db -> where('id', $id) -> delete($this -> tbl);
	}

}
?>
