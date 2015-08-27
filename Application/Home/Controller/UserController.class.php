<?php
namespace Home\Controller;

use Think\Controller;

class UserController extends Controller
{
    
    public function index() {
        
        // $ip = get_client_ip();
        $this->display();
    }
    
    // 用户注册
    public function regist() {
        $this->display();
    }
    
    /* 注册表单处理*/
    public function signin() {
        $inputName = I('inputName');
        $inputPassword = md5(I('inputPassword'));
        $verify = I('verify');
        $auto = I('auto');
        
        //自动验证之前的验证验证码
        $check_verify = new \Think\Verify();
        if (!$check_verify->check($verify)) {
            $this->error('验证码错误');
        }
        $User = M("User");
        $where = array('username' => $inputName);
        $data = $User->where($where)->find();
        if (!$data || $data['password'] != $inputPassword) {
            $this->error('用户名或者密码不正确');
        }
        
        //更新用户登陆信息
        $ip = get_client_ip();
        $data['login_time'] = $_SERVER['REQUEST_TIME'];
        $data['login_ip'] = $ip;
        $User->where($where)->save($data);
        
        // var_dump($auto);
        // die;
        //处理下一次自动登录
        if (isset($auto)) {
            
            // $username = $user['username'];
            // $ip = get_client_ip();
            // $User->login_time = $_SERVER['REQUEST_TIME'];
            // $User->login_ip = $ip;
            // $User->where('id=5')->save();
            
            // $value = $account . '|' . $ip;
            // $value = encryption($value);
            // @setcookie('auto', $value, C('AUTO_LOGIN_TIME'), '/');
            
            
        }
        
        //登录成功写入SESSION并且跳转到首页
        session('uid', $data);
        
        header('Content-Type:text/html;Charset=UTF-8');
        redirect(__APP__, 3, '登录成功，正在为您跳转...');
    }
    
    /**
     * 注册表单处理
     */
    public function runRegis() {
        if (!IS_POST) {
            $this->error('页面不存在');
        }
        
        // 找的是name属性
        $inputName = I('inputName');
        $inputEmail = I('inputEmail');
        $inputPassword = I('inputPassword');
        $certainPassword = I('certainPassword');
        $verify = I('verify');
        
        //自动验证之前的验证验证码
        $check_verify = new \Think\Verify();
        if (!$check_verify->check($verify)) {
            $this->error('验证码错误');
        }
        if ($certainPassword != $inputPassword) {
            $this->error('两次密码不一致');
        }
        $User = D('User');
        $data = array('username' => $inputName, 'password' => $inputPassword, 'email' => $inputEmail);
        
        //create 涵盖了自动验证和自动填充
        if (!$User->create($data)) {
            
            // 如果创建失败 表示验证没有通过 输出错误提示信息
            // exit($User->getError());
            $this->error($User->getError());
        } 
        else {
            
            // 验证通过 可以进行其他数据操作(不用带上$data了)
            $id = $User->add();
            if ($id) {
                
                //插入数据成功后把用户ID写SESSION
                session('uid', $id);
                
                //跳转至首页 redirect(__APP__, 3, '注册成功，正在为您跳转...');
                //跳转至登陆 首页
                header('Content-Type:text/html;Charset=UTF-8');
                redirect('index', 3, '注册成功，正在为您跳转...');
            } 
            else {
                $this->error('注册失败，请重试...');
            }
        }
    }
    
    /**
     * 获取验证码
     */
    public function verify() {
        $config = array('fontSize' => 47,
        
        // 验证码字体大小
        'length' => 4,
        
        // 验证码位数
        'useNoise' => false,
        
        // 关闭验证码杂点
        );
        $Verify = new \Think\Verify($config);
        
        // $Verify->useImgBg = true; //使用背景图片
        $Verify->entry();
    }
    
    //用户登陆
    //    public function doLogin(){
    //      $name=I('name');
    //      $pass=I('pass');
    //      $rs=D('User')->checkLogin($name, $pass);
    //      if($rs){
    //          $this->log("尝试进行登录","success");
    //          die(json_encode(array('status'=>1,'msg'=>'/admin.php')));
    //      }else{
    //          $this->log("尝试进行登录","error");
    //          die(json_encode(array('status'=>0,'msg'=>'登陆失败')));
    //      }
    //    }
    //    //注销登录
    //    public function logout(){
    //      session('b_user',null);
    //      session('b_id',null);
    //      $this->redirect("Home/Index/index");
    //    }
    //    //相册密码验证
    //    public function photo(){
    //      $pwd=I('pwd');
    //      $id=I('id');
    //      $rs=M('photos')->where('id='.$id)->getField('pass');
    //      if($pwd==$rs){
    //          session('ey_photo_'.$id,$pwd);
    //          $this->log("验证相册密码成功","success");
    //          die(json_encode(array('status'=>1,'msg'=>'密码验证成功')));
    //      }else{
    //          $this->log("验证相册密码失败","error");
    //          die(json_encode(array('status'=>0,'msg'=>'密码验证失败')));
    //      }
    //    }
    
    
}
