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
		$this->title = "节点管理";
		$field = array("id","name","title","pid");
		$node = M('node')->field($field)->select();
		$this->node = node_merge($node);
		$this->display();
	}
	/****
	 * add Node
	 */
	public function addNode(){
		$this->pid = I('pid',0,'intval');
		$this->level = I('level', 1, 'intval');
		switch ($this->level) {
			case 1:
				$this->type = "应用";
				break;
			case 2:
				$this->type = "控制器";
				break;
			case 3:
				$this->type = "动作方法";
				break;
		}
		$this->title = "添加节点";
		$this->display();
	}
	/****
	 * addNodeHandle
	 */
	public function addNodeHandle(){
		if(IS_POST){
			if(M('node')->add($_POST)){
				$this->success("添加成功",U('Admin/Rbac/node'));
				exit();
			}
		}
		$this->error("添加失败");
	}
	/***
	 * access
	 */
	public function access(){
		$this->rid = I('rid',0,'intval');
		$field = array("id",'title','name','pid');
		$node = M('node')->order('sort')->field($field)->select();
		//原有的权限
		$access = M('access')->where(array("role_id"=>$this->rid))->getField('node_id',true);
		$this->node = node_merge($node,$access);
		$this->title = "权限分配";
		$this->display();
	}
	/**
	 * 设置权限
	 */
	public function setAccess(){
		if(IS_POST){
			$rid = I('rid', 0, 'intval');
			$db = M('access');
			$data = array();
			$db->where(array('role_id'=>$rid))->delete();
			//foreach 组装数组
			foreach ($_POST['access'] as $v) {
				$tmp = explode("_",$v);
				$data[] = array(
					'role_id' => $rid,
					'node_id' => $tmp[0],
					'level' => $tmp[1]
					);
			}
			if($db->addAll($data)){
				$this->success("修改成功！",U("Admin/Rbac/role"));
				exit();
			}
			$this->error("修改失败！");
			exit();
		}
		$this->error("修改失败！");
		exit();
	}
}