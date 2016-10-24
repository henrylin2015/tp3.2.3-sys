<?php
namespace Admin\Controller;
use Think\Controller;
/***
 * 后台公共类
 * @author henry
 */
class AdminController extends Controller{
	/***
	 * 初始化方法
	 * @author henry
	 */
	public function _initialize(){
		// 登录检测
		if(!session('user_auth')){
			$this->redirect('Admin/Public/login');
		}
		// 权限检测
        // $current_url = MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
        // if ('Admin/Index/index' !== $current_url) {
        //     if (!D('Admin/Group')->checkMenuAuth()) {
        //         $this->error('权限不足！', U('Admin/Index/index'));
        //     }
        //     $this->assign('_admin_tabs', C('ADMIN_TABS'));
        // }

        // 获取所有导航
        // $module_object = D('Admin/Module');
        // $menu_list = $module_object->getAllMenu();
        // $this->assign('_menu_list', $menu_list);  // 后台主菜单

        // 获取左侧导航
        // if (!C('ADMIN_TABS')) {
        //     $parent_menu_list = $module_object->getParentMenu();
        //     if (isset($parent_menu_list[0]['top'])) {
        //         $current_menu_list = $menu_list[$parent_menu_list[0]['top']];
        //     } else {
        //         $current_menu_list = $menu_list[MODULE_NAME];
        //     }
        //     $this->assign('_current_menu_list', $current_menu_list);  // 后台左侧菜单
        //     $this->assign('_parent_menu_list', $parent_menu_list);  // 后台父级菜单
        // }
	}
}