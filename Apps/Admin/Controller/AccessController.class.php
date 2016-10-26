<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;
/***
* access controller
* @author henry
*/
class AccessController extends AdminController{
	/***
	* index
	*/
	public function index(){
		$this->assign("title","管理员管理");
		$this->display();
	}
	/***
	 * add 用户组管理
	 */
	public function addAccessUser(){
		$this->title = "添加用户组管理";
		$field = array('id','username');
		$users = M('admin_user')->field($field)->select();
		$this->users = $users;
		$role = M('role')->field(array('id','name','remark'))->select();
		$this->role = $role;
		$this->display();
	}
}