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
    'USER_AUTH_ON'              =>true,
    'USER_AUTH_TYPE'        =>2,        // 默认认证类型 1 登录认证 2 实时认证
    'USER_AUTH_KEY'             =>'uid',    // 用户认证SESSION标记
    'ADMIN_AUTH_KEY'        =>'administrator',
    'USER_AUTH_MODEL'           =>'admin_user',    // 默认验证数据表模型
    'AUTH_PWD_ENCODER'          =>'md5',    // 用户认证密码加密方式
    'USER_AUTH_GATEWAY'         =>'/Public/login',// 默认认证网关
    'NOT_AUTH_MODULE'           =>'Public',    // 默认无需认证模块
    'REQUIRE_AUTH_MODULE'       =>'',        // 默认需要认证模块
    'NOT_AUTH_ACTION'           =>'',        // 默认无需认证操作
    'REQUIRE_AUTH_ACTION'       =>'',        // 默认需要认证操作
    'GUEST_AUTH_ON'             =>false,    // 是否开启游客授权访问
    'GUEST_AUTH_ID'             =>0,        // 游客的用户ID
    'SHOW_RUN_TIME'             =>true,        // 运行时间显示
    'SHOW_ADV_TIME'             =>true,        // 显示详细的运行时间
    'SHOW_DB_TIMES'             =>true,        // 显示数据库查询和写入次数
    'SHOW_CACHE_TIMES'          =>true,        // 显示缓存操作次数
    'SHOW_USE_MEM'              =>true,        // 显示内存开销
    'DB_LIKE_FIELDS'            =>'title|remark',
    'RBAC_ROLE_TABLE'           =>'tp_role',
    'RBAC_USER_TABLE'           =>'tp_role_user',
    'RBAC_ACCESS_TABLE'         =>'tp_access',
    'RBAC_NODE_TABLE'           =>'tp_node',
);