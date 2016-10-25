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
		$this->display();
	}
}