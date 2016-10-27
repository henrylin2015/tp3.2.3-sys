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
		$user = D('User');
		$this->users = $user->relation(true)->select();
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
	/** 
	 * 
	 * @author: henry
	 * @time: Thu Oct 27 15:53:40 2016
	 * @return [type] [true|false]
	 */
	public function addAccessHandle(){
		if(IS_POST){
			if(M('role_user')->add($_POST)){
				$this->success("添加成功过！",U('Admin/Access/index'));
				exit();
			}
		}
		$this->error("添加失败！");
	}
}