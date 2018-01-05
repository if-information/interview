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


### 本地测试环境
* 为了保持和公网同样的测试环境, 本地测试环境不使用 Apache 虚拟主机
* 将项目放在 Apache 根目录 `Documents` 下, 即项目目录为 `Documents/interview`
* 之后的配置和上面的公网环境配置一样.


