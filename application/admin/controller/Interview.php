<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 2018/1/2
 * Time: 上午11:01
 */
namespace app\admin\controller;

use think\Controller;

class Interview extends Controller{
    public function index()
    {
        //获取所有面试题内容:
        $questions = model('Questions')->getAllQuestions();
        return $this->fetch('', [
            'questions' => $questions
        ]);
    }

    public function add()
    {
        if (request()->isPost())
        {
            $data = input('post.');
            $validate = validate('Questions');
            $res = $validate->scene('add')->check($data);
            if (!$res)
            {
                $this->error($validate->getError());
            }

            $question = model('Questions');
            $res = $question->save($data);
            if (!$res)
            {
                $this->error('添加失败');
            }
            else
            {
                $this->success('添加成功');
            }
        }
        else
        {
            //获取所有分类信息
            $category = model('Category');
            $result = $category->getAllCategories();
            return $this->fetch('', [
                'categories' => $result
            ]);
        }
    }

    public function status()
    {
        //获取当前id的详情
        $id = input('id');
        $status = input('status');
        //修改状态
        $res = model('Questions')->save(['status'=>$status], ['id'=>$id]);
        if (!$res)
        {
            $this->error('状态修改失败');
        }
        else{
            $this->success('状态修改成功');
        }
    }

    public function edit()
    {
        if (request()->isPost())
        {
            $data = input('post.');
            $validate = validate('Questions');
            $res = $validate->scene('add')->check($data);
            if (!$res)
            {
                $this->error($validate->getError());
            }
            $question = model('Questions');
            $res = $question->save(['question' => $data['question'], 'category_id' => $data['category_id'], 'answer' => $data['answer']], ['id'=> $data['id']]);
            if (!$res)
            {
                $this->error('更新失败');
            }
            else
            {
                $this->success('更新成功');
            }
        }
        else
        {
            //获取当前问题的id
            $id = input('id');
            //根据id获取详情
            $interview = model('Questions')->getInterviewByID($id);
            //获取所有分类信息
            $categories = model('Category')->getAllCategories();
            return $this->fetch('', [
                'interview' => $interview,
                'categories' => $categories
            ]);
        }
    }
}