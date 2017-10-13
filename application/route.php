<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
//        全局变量规则定义
        'name' => '\w+',
        'id' => '\d+',
        'year' => '\d{4}',
        'month' => '\d{2}',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
//    'hello/:name' => 'index/index/hello',
//    'hello/[:name]' => 'index/hello',
//    'hello/[:name]$' => 'index/hello', // 完全匹配
//  闭包定义
//    'hello/[:name]' => function($name) {
//        return 'Hello,' . $name . '!';
//    },
//    约束路由规则的请求类型和URL后缀
    'hello/[:name]' => ['index/hello', ['method' => 'get', 'ext' => 'html']],
    'hello_world/[:name]' => 'hello_world/index',

//    路由规则对变量进行规则约束，变量规则使用正则表达式进行定义
//    'blog/:year/:month' => [
//        'blog/archive',
//        ['method' => 'get'],
//        ['year' => '\d{4}', 'month' => '\d{2}']
//    ],
//     非正常规范，需要使用<变量>,这个不能用路由分组
//  当两个路由规则冲突时，优先使用顺序靠前的路由规则
    /*'blog-<year>-<month>' => [
        'blog/archive',
        ['method' => 'get'],
        ['year' => '\d{4}', 'month' => '\d{2}']
    ],
    'blog/:id' => [
        'blog/get',
        ['method' => 'get'],
        ['id' => '\d+']
    ],
    'blog/:name' =>[
        'blog/read',
        ['method' => 'get'],
        ['name' => '\w+']
    ],*/
//    路由分组，效果与上同
    /*'[blog]' => [
        ':year/:month' => [
            'blog/archive',
            ['method' => 'get'],
            ['year' => '\d{4}', 'month' => '\d{2}']
        ],
        ':id' => [
            'blog/get',
            ['method' => 'get'],
            ['id' => '\d+']
        ],
        ':name' => [
            'blog/read',
            ['method' => 'get'],
            ['name' => '\w+']
        ],
    ],*/
//使用全局变量规则
    '[blog]' => [
        ':year/:month' => 'blog/archive',
        ':id' => 'blog/get',
        //局部规则会覆盖全局规则
        ':name' => [
            'blog/read',
            ['method' => 'get'],
            ['name' => '\w{5,}']
        ],
    ],
];
