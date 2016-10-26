<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;
/***
* user 用户管理
* @author henry
*/
class UserController extends AdminController{
	/***
	* index
	*/
	public  function index(){
		$this->assign("title","用户管理");
		$users = M('admin_user')->select();
		$this->users = $users;
		$this->display();
	}
	/***
	 * add User
	 */
	public function addUser(){
		$this->title = "用户添加";
		$this->display();
	}
	/***
	 * add user handle
	 */
	public function addUserHandle(){
		if(IS_POST){
			$_POST['password'] = I('password','','md5');
			if(M('admin_user')->add($_POST)){
				$this->success("添加成功！",U('Admin/User/index'));
				exit();
			}
		}
		$this->error("添加失败！");
		exit();
	}
}