<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

function status($status)
{
    if($status == 1)
    {
        return "<label class='label label-success radius'>正常</label>";
    }
    else if ($status == 0)
    {
        return "<label class='label label-danger radius'>已关闭</label>";
    }
    else if ($status == -1)
    {
        return "<label class='label label-danger radius'>已删除</label>";
    }
}
