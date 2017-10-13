<?php
namespace app\index\controller;

//use think\Controller;

//url_param_type =>1 url按照参数顺序获取
use think\Db;

class Index extends \think\Controller
{
    public function hello($name = 'World', $city = '')
    {
        return 'Hello, ' . $name . '! ' . 'You come from ' . $city . '.';

    }

//    public function hello($name = 'thinkphp')
//    {
//        $this->assign('name', $name);
//        return $this->fetch();
//    }

    public function index(){
        $data = Db::name('name')->find();//表的后缀名，方法名要有对应view下相同名称的html页面
        $this->assign('result', $data);
        return $this->fetch();
    }
}
