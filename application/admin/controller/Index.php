<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 2018/1/2
 * Time: 上午10:31
 */
namespace app\admin\controller;

use think\controller;

class Index extends Controller{
    public function index()
    {
        return $this->fetch();
    }

    public function welcome()
    {
        return '欢迎来到面试题管理平台';
    }
}