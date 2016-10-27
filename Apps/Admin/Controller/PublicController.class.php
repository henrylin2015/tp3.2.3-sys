<?php
namespace Admin\Controller;
use Think\Controller;
use Org\Util\Rbac;
class PublicController extends Controller{
	public function Index(){
		$this->assign('title', '管理员登录');
        $this->display();
	}
	public function login(){
        if(!IS_POST) $this->error("页面不存在！");
        //if (I('code', '', 'md5') == session("verify")) {
        //    $this->error("验证码错误！");
        //}
        $username = I("username");
        $password = I("password","","md5");
        $user = M("admin_user")->where(array("username"=>$username))->find();
        if(!$user || $user['password'] !=$password){
            $this->error("账户或密码错误！");
        }
        if(!$user['status']) $this->error("用户被锁定！");
        $data = array(
            'id' => $user['id'],
            'reg_ip'=>get_client_ip(),
            'update_time'=>time()
            );
        M('admin_user')->save($data);
        session(C('USER_AUTH_KEY'),$user['id']);
        session('username',$user['username']);
        session('update_time',date('Y-m-d H:i:s',$user['update_time']));
        if ($user['username'] == C('RBAC_SUPERADMIN')) {
            session(C('ADMIN_AUTH_KEY'),true);
        }
        Rbac::saveAccessList();
        //p($_SESSION);
        //die;
        $this->redirect("Admin/Index/index");
	}
	/**
     * 注销
     * @author henry
     */
    public function logout() {
        session(C('USER_AUTH_KEY'),null);
        session('username',null);
        session('update_time',null);
        session(C('ADMIN_AUTH_KEY'),null);
        $this->success('退出成功！', U('index'));
    }
	/**
     * 图片验证码生成，用于登录和注册
     * @author jry <598821125@qq.com>
     */
    public function verify($vid = 1) {
        $verify = new Verify();
        $verify->length = 4;
        $verify->entry($vid);
    }

    /**
     * 检测验证码
     * @param  integer $id 验证码ID
     * @return boolean 检测结果
     */
    function check_verify($code, $vid = 1) {
        $verify = new Verify();
        return $verify->check($code, $vid);
    }
}