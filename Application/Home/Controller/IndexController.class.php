<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
    public function index() {
        
        // $data = session('user');
        // // var_dump($uid['id']);
        // // die;
        // if ($uid !== null) {
        //     $this->assign('username', $data['username']);
        // }
        $this->display();
    }
    
    // 用户登出
    public function signout() {
    	// 清空session
        session('user', null);
        header('Content-Type:text/html;Charset=UTF-8');
        redirect(__APP__, 3, '正在登出...');
    }
    
}
