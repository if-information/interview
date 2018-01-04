<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 2018/1/2
 * Time: 下午2:44
 */
namespace app\common\model;

use think\Model;

class Category extends Model{
    //获取所有分类信息(管理员看的)
    public function getAllCategories()
    {
        $con = [
//            'status' => 1
        ];
        $order = [
            'id' => 'desc'
        ];
        return $this->where($con)->order($order)->select();
    }

    //获取所有分类信息(用户看的)
    public function getAllNormalCategories()
    {
        $con = [
            'status' => 1
        ];
        $order = [
            'id' => 'desc'
        ];
        return $this->where($con)->order($order)->select();
    }

    public function getCategoryByID($id)
    {
        $con = [
            'id' => $id
        ];
        return $this->where($con)->find();
    }

}