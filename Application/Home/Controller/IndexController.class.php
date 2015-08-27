<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
    public function index() {
        $uid = session('uid');
        
        // var_dump($uid['id']);
        // die;
        if ($uid !== null) {
            $this->assign('username', $uid['username']);
        } 
        else {
            $this->assign('username', '登陆');
        }
        $this->display();
    }
}
