<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
class SowingMap extends admin {
	function __construct() {
		parent::__construct();
		
		$this->db = pc_base::load_model('SowingMap_model');
	
	}

	public function init() {
		$info = $this->db->select();
		$big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=SowingMap&c=SowingMap&a=add\', title:\''.L('轮播图添加').'\', width:\'700\', height:\'450\'}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', L('添加'));
		include $this->admin_tpl('list');
	}
 public function add() {
 		if(isset($_POST['dosubmit'])) {
 			if(empty($_POST['image'])){
 				showmessage(L('image'),HTTP_REFERER);
 			}
 			if(empty($_POST['text'])){
 				showmessage(L('text'),HTTP_REFERER);
 			}
 			if(empty($_POST['tag'])){
 				showmessage(L('tag'),HTTP_REFERER);
 			}
 		$this->db->insert(array('image' => $_POST['image'],'text' => $_POST['text'],'tag' => $_POST['tag']));
 		
 		showmessage(L('operation_success'),HTTP_REFERER,'', 'add');
		} else {
			$show_validator = $show_scroll = $show_header = true;
			pc_base::load_sys_class('form', '', 0);		
			//print_r($types);exit;
 			include $this->admin_tpl('link_add');
		}
	}
	public function del(){
		$id = $_GET['id'];
		$res = $this->db->delete(array('id' => $id));
		if($res){
			
			showmessage(L('operation_success'), HTTP_REFERER);
		}
		else
		{
			showmessage('删除失败','?m=SowingMap&c=SowingMap&a=init');
		}
		
	}
	public function edit(){

		$info =  $this->db->select(array('id' => $_GET['id']));
		//print_r($info[0]);
		//exit();
	    $big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=SowingMap&c=SowingMap&a=add\', title:\''.L('轮播图添加').'\', width:\'700\', height:\'450\'}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', L('添加'));
		include $this->admin_tpl('link_edit');
	}
	public function update(){
		if(isset($_POST['dosubmit'])){
			
	$res =	$this->db->update(array('image'=>$_POST['image'],'text'=>$_POST['text'],'tag'=>$_POST['tag']),array('id'=>$_GET['id']));
	if($res){
			showmessage(L('operation_success'),'?m=SowingMap&c=SowingMap&a=edit','', 'edit');
		}
	}
	}
	
}
?>