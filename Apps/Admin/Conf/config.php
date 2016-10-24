<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING'  =>array(
		'__ACSS__' => __ROOT__.'/Public/admin/css/', // 增加新的admin css类库路径替换规则
		'__AJS__' => __ROOT__.'/Public/admin/js/', // 增加新的admin js类库路径替换规则
		'__AIMG__' => __ROOT__.'/Public/admin/images/', // 增加新的admin images类库路径替换规则
		'__UPLOAD__' => '/Uploads', // 增加新的上传路径替换规则
	),
	// 错误页面模板
    'TMPL_ACTION_ERROR'   => APP_PATH.'Admin/View/Public/think/error.html',      // 错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS' => APP_PATH.'Admin/View/Public/think/success.html',    // 成功跳转对应的模板文件
    'TMPL_EXCEPTION_FILE' => APP_PATH.'Admin/View/Public/think/exception.html',  // 异常页面的模板文件
);