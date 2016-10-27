<?php
return array(
	//'配置项'=>'配置值'
	// 数据库的配置
	'DB_TYPE'      =>  'mysql',     // 数据库类型
	'DB_HOST'      =>  '127.0.0.1',     // 服务器地址
	'DB_NAME'      =>  'tp3.2.3',     // 数据库名
	'DB_USER'      =>  'root',     // 用户名
	'DB_PWD'       =>  '',     // 密码
	'DB_PORT'      =>  '3306',     // 端口
	'DB_PREFIX'    =>  'tp_',     // 数据库表前缀
	'DB_CHARSET'   =>  'utf8', // 数据库的编码 默认为utf8
	//rbac配置项
    'RBAC_SUPERADMIN'       =>'admin', //超级管理员名称
    'ADMIN_AUTH_KEY'        =>'superadmin', //超级管理员识别号
    'USER_AUTH_ON'          =>true, //是否开启验证
    'USER_AUTH_TYPE'        =>1,        // 默认认证类型 1 登录认证 2 实时认证
    'USER_AUTH_KEY'         =>'uid',    // 用户认证SESSION标记
    'NOT_AUTH_MODULE'       =>'Public',    // 默认无需认证模块
    'NOT_AUTH_ACTION'       =>'logout',        // 默认无需认证操作
    'RBAC_ROLE_TABLE'       =>'tp_role',//角色表
    'RBAC_USER_TABLE'       =>'tp_role_user',//角色和用户名的中间表
    'RBAC_ACCESS_TABLE'     =>'tp_access',//权限表
    'RBAC_NODE_TABLE'       =>'tp_node',//节点表名称
    'USER_AUTH_MODEL'       =>'tp_admin_user',    //用户表
    
);