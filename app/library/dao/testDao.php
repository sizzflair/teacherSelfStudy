<?php 
class testDao extends Dao {
	
	public $table_name = 'test';
	private $fields = "id,username";
	
	/**
	 * 新增用户
	 * @param $user
	 */
	// public function addUser($user) {
	// 	$user = $this->dao->db->build_key($user, $this->fields);
	// 	return $this->dao->db->insert($user, $this->table_name);
	// }

	public function test()
	{
		return $this->dao->db->get_all($this->table_name);
	}
}