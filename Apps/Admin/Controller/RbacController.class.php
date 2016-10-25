<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;
/**
 * Rbac
 * @author henry
*/
class RbacController extends AdminController{
	/***
	 * index
	 */
	public function index(){
	}
	/***
	 * user
	 */
	public function user(){
		
	}
	/***
	 * role
	 */
	public function role(){
		$this->title = "角色管理";
		$this->list = M('role')->select();
		$this->display();
	}
	/***
	 * addRole
	 */
	public function addRole(){
		$this->title = "添加角色";
		$this->display();
	}
	/****
	 * addRoleHandle
	 */
	public function addRoleHandle(){
		if(IS_POST){
			$role = M('role');
			if($role->data($_POST)->add()){
				$this->success("添加成功！",U('Admin/Rbac/role'));
				exit();
			}
		}
		$this->error("添加错误！");
	}
	/****
	 * node
	 */
	public function node(){
		
	}
	/***
	 * access
	 */
	public function access(){
		
	}
}