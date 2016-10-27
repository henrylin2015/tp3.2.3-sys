<?php
/**
 * @file:  UserModel.class.php
 * @author: henry
 * @time: Thu Oct 27 16:04:11 2016
 * @ 继承医药 
 */
namespace Admin\Model;
use Think\Model\RelationModel;

class UserModel extends RelationModel{
	protected $tableName = "admin_user";
	protected $_link = array(
		'roles'=>array(
			'mapping_type' => self::MANY_TO_MANY,
			'class_name'   => 'role',
			'mapping_name' => 'roles',
			'foreign_key'  => 'user_id',
			'relation_foreign_key' => 'role_id',
			'relation_table' => 'tp_role_user',
			'mapping_fields' => 'id,name,remark'
		)
	);
}