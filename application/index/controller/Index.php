<?php
namespace app\index\controller;

class Index
{
    public function index($name = 'World')
    {
        return 'Hello,' . $name . '!';
    }
}
