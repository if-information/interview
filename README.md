# 面试题管理系统

### 管理系统配置环境

### 公网环境
* 公网使用的是阿里云的Web托管, 本项目放在 `/htdocs` 下, 即项目目录为 `/htdocs/interview` 
* 将 `/public/.htaccess` 文件移动到 `/htdocs/interview/` 目录下
* 将 `/public/index.php` 文件移动到 `/htdocs/interview/` 目录下
* 修改 `/public/index.php` 文件, 路径重新配置.
```php
// 定义应用目录
define('APP_PATH', __DIR__ . '/application/');
// 加载框架引导文件
require __DIR__ . '/thinkphp/start.php';
```

* 修改 `/application/config.php` 文件, 添加 `view_replace_str` 配置
```php
    'view_replace_str'       => [
        '__STATIC__'=>'/interview/public/static' 
    ],
```

* 添加 `/application/database.php` 文件, 填写自己的MySQL服务器连接参数
```php
<?php

return [
    // 数据库类型
    'type'            => 'mysql',
    // 服务器地址
    'hostname'        => '',
    // 数据库名
    'database'        => '',
    // 用户名
    'username'        => '',
    // 密码
    'password'        => '',
    // 端口
    'hostport'        => '3306',
    // 连接dsn
    'dsn'             => '',
    // 数据库连接参数
    'params'          => [],
    // 数据库编码默认采用utf8
    'charset'         => 'utf8',
    // 数据库表前缀
    'prefix'          => 'interview_',
    // 数据库调试模式
    'debug'           => true,
    // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'deploy'          => 0,
    // 数据库读写是否分离 主从式有效
    'rw_separate'     => false,
    // 读写分离后 主服务器数量
    'master_num'      => 1,
    // 指定从服务器序号
    'slave_no'        => '',
    // 是否严格检查字段是否存在
    'fields_strict'   => true,
    // 数据集返回类型
    'resultset_type'  => 'array',
    // 自动写入时间戳字段
    'auto_timestamp'  => 'timestamp',
    // 时间字段取出后的默认时间格式
    'datetime_format' => 'Y-m-d H:i:s',
    // 是否需要进行SQL性能分析
    'sql_explain'     => false,
];


```


### 本地测试环境
* 为了保持和公网同样的测试环境, 本地测试环境不使用 Apache 虚拟主机
* 将项目放在 Apache 根目录 `Documents` 下, 即项目目录为 `Documents/interview`
* 之后的配置和上面的公网环境配置一样.


