<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // $this->show('admin');
		$this->assign('title',"测试标题");
		$this->display();
    }
}