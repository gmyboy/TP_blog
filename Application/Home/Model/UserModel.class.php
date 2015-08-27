<?php
namespace Home\Model;

use Think\Model;

// 用户表对用模型
class UserModel extends Model
{
    protected $tableName = 'user';
    
     // 自动验证设置
    protected $_validate = array(
     array('username','require','用户名必须！'), 
     array('email','require','邮箱必须！'), 
	 array('email','email','邮箱格式不正确！'), 
     array('username','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证username字段是否唯一
     array('email','','该邮箱已被注册！',0,'unique',1), // 在新增的时候验证email字段是否唯一
     // array('value',array(1,2,3),'值的范围不正确！',2,'in'), // 当值不为空的时候判断是否在一个范围内
     // array('repassword','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
     // array('password','checkPwd','密码格式不正确！',0,'function'), // 自定义函数验证密码格式
   );
   
     protected $_auto = array ( 
         array('status','1'),  // 新增的时候把status字段设置为1(用户的解锁状态)
         array('rank','0'),//设置新用户的等级为0
         array('password','md5',3,'function') , // 对password字段在新增和编辑的时候使md5函数处理
         // array('username','getName',3,'callback'), // 对username字段在新增和编辑的时候回调getName方法
         array('add_time','time',1,'function'), // 对add_time字段在新增的时候写入当前时间戳
     );
}
