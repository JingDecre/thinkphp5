<?php
/**
 * Created by PhpStorm.
 * User: decre
 * Date: 2017/10/13
 * Time: 9:47
 */
//一定要加入命名空间，否则页面访问失败
//标准url访问：http://servername/index.php/模块/控制器/操作
//当url自动转换时，页面访问应http://servername/index.php/index/hello_world/index
//希望url严格区分大小写，可以在应用配置文件中设置:'url_convert' => false（关闭url自动转换），
//此时必须使用http://servername/index.php/index/HelloWorld/index
//如果服务器不支持pathinfo方式的url访问，可以使用兼容方式
//http://servername/index.php?s=/index/HelloWorld/index
namespace app\index\controller;

class HelloWorld
{
    public function index($name = 'World')
    {
        return 'Hello' . $name . '!';
    }
}