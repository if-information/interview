<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 2018/1/2
 * Time: 下午2:47
 */
namespace app\common\validate;

use think\Validate;

class Category extends Validate{
    protected $rule = [
        'name' => 'require'
    ];

    protected $message = [
        'name.require' => '类别名称不能为空'
    ];

    protected $scene = [
        'add' => ['name']
    ];
}