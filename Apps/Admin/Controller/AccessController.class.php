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
}