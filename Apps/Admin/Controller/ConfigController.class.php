<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;
class ConfigController extends AdminController{
	/***
	 * 获取某个分组的配置参数
	 * @author henry
	 */
	public function group($group = 1){
		$this->assign("title","系统管理");
		$this->display();
	}
	
}