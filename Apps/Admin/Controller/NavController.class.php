<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;
class NavController extends AdminController{
	/***
	 * index
	 * @author henry
	 */
	public function index(){
		$this->assign("title","导航");
		$this->display();
	}
}