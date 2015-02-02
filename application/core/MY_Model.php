<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {

	public $table;
	
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * selectAll()
	 * returns all data from the table
	 */
	public function selectAll(){
		return $this->db->get($this->table)->result();
	}

	/**
	 * selectByParameter()
	 * $args = array("id" => "id01");
	 */
	public function selectByParameter($args){
		return $this->db->get_where($this->table, $args)->result();
	}

	/**
	 * update()
	 * $args = array("id" => "id01");
	 * $data = array("name" => "new_name"); 
	 *
	 */
	public function update($args, $data){
		$this->db->update($this->table, $data, $args);

		if($this->db->affected_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	/**
	 * delete()
	 * $args = array("id" => "id01");
	 */
	public function delete($args){
		$this->db->delete($this->table, $args);

		if($this->db->affected_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	/**
	 * insert()
	 * $data = array("id" => "id", "name" => "name");
	 */
	public function insert($data){
		$this->db->insert($this->table, $data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	/**
	 * generateTable()
	 * generate table view
	 */
	public function generateTable(){
		$str = '';
		if($this->db->table_exists($this->table)){
			$fields = $this->db->list_fields($this->table);
			$rows = $this->selectAll();
			$str .= '<table class="table table-striped table-hover">';

			$str .= '<thead>';
			$str .= '<tr>';
			$str .= '<th>#</th>';
			foreach($fields as $field){
				$str .= '<th>'.$field.'</th>';
			}
			$str .= '<th>Delete</th>';
			$str .= '</tr>';
			$str .= '</thead>';

			$str .= '<tbody>';
			$count = 0;
			foreach($rows as $row){
				$count++;	
				$str .= '<tr>';
				$str .= '<td>'.$count.'</td>';
				foreach($fields as $field){
					$str .= '<td>'.$row->$field.'</td>';
				}
				$str .= '<td><a href="'.base_url($this->table.'/delete/'.$row->bidang_kode).'" onClick=\'return confirm("Are you sure?")\'>Delete</a></td>';
				$str .= '</tr>';
			}
			if($count == 0){
				$str .= '<tr><td colspan="'.(count($fields) + 1).'"><h2 id="empty-table" class="empty-table text-center">Empty table</h2></td></tr>';
			}
			$str .= '</tbody>';
			$str .= '</table>';
		}else{
			$str = '<p>Table not found</p>';
		}
		return $str;
	}
}

/* End of file MY_Model.php */
/* Location: ./application/models/MY_Model.php */