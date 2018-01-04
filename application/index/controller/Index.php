<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        //获取所有学科:
        $categories = model('Category')->getAllNormalCategories();
        //获取所有题目
        $interviews = model('Questions')->getAllNormalQuestions();
        return $this->fetch('', [
            'categories' => $categories,
            'interviews' => $interviews
        ]);
    }
}
