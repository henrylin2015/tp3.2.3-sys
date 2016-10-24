<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;
class IndexController extends AdminController {
	/***
	 * 默认方法
	 */
    public function index(){
		$this->assign("title","首页");
		$this->display();
    }
}