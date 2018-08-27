<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
class MessageBoard extends admin {
	function __construct() {
		parent::__construct();
		$this->db = pc_base::load_model('messageBoard_model');
	
	}

	public function init() {
	 
		$info = $this->db->select();
		include $this->admin_tpl('list');
	}	
	public function del(){
		$id = $_GET['id'];
		$res = $this->db->delete(array('id' => $id));
		if($res){
			showmessage('删除成功','?m=MessageBoard&c=MessageBoard&a=init');
		}
		else
		{
			showmessage('删除失败','?m=MessageBoard&c=MessageBoard&a=init');
		}
	}
}
?>