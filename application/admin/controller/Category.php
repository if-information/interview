<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 2018/1/2
 * Time: 上午10:58
 */
namespace app\admin\controller;

use think\Controller;

class Category extends Controller{
    public function index()
    {
        //获取所有分类
        $category = model('Category');
        $result = $category->getAllCategories();
        return $this->fetch('', [
            'categories' => $result
        ]);
    }

    public function add()
    {
        if (request()->isPost())
        {
            $data = input('post.');
            //数据校验
            $validate = validate('category');
            $result = $validate->scene('add')->check($data);
            if (!$result)
            {
                $this->error($validate->getError());
            }
            $category = model('Category');
            $res = $category->save(['name' => $data['name']]);
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
            return $this->fetch();
        }
    }

    public function status()
    {
        //获取当前id的详情
        $id = input('id');
        $status = input('status');
        //修改状态
        $res = model('Category')->save(['status'=>$status], ['id'=>$id]);
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
            //数据校验
            $validate = validate('category');
            $result = $validate->scene('add')->check($data);
            if (!$result)
            {
                $this->error($validate->getError());
            }
            $category = model('Category');
            $res = $category->save(['name' => $data['name']], ['id' => $data['id']]);
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
            //获取当前分类的id
            $id = input('id');
            //根据id查询信息
            $category = model('Category')->getCategoryByID($id);
            return $this->fetch('', [
                'category' => $category
            ]);
        }
    }
}