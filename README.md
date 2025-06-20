meioa-db
=======
A simple database connection tool in PHP

Installation
------------

Example
-------
```php
use Meioa\Db\Db;
$dbConfig = [
            'hostname'        =>  '127.0.0.1',            
            'database'        =>  'admin',          // 数据库名
            'username'        =>  'root',           // 用户名
            'password'        =>  '123123'          // 密码
            'hostport'        =>  '3306',           // 端口
            'charset'         =>  'utf8',           // 数据库编码
            ]
$db = new Db($dbConfig);
$sql = '';
$dbRes = $db->exec($sql);
