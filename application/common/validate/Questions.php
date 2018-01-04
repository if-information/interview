<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 2018/1/2
 * Time: 下午2:47
 */
namespace app\common\validate;

use think\Validate;

class Questions extends Validate{
    protected $rule = [
        'question' => 'require',
        'category_id' => 'gt:0',
        'answer' => 'require'
    ];

    protected $message = [
        'category_id.gt' => '请选择分类',
        'question.require' => '请填写问题',
        'answer.require' => '请填写答案'
    ];

    protected $scene = [
        'add' => ['question','category_id', 'answer']
    ];



}