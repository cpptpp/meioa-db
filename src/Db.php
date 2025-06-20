<?php

namespace Meioa\Tools;
use Meioa\Tools\connect\Mysql;
class Db
{
    private $_db;
    public function __construct($config)
    {
        $this->_db = (new Mysql())->connent($config);
    }

    public function query($sql,$params=null){
        $stmt = $this->_db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function exec($sql){
        return $this->_db->exec($sql);
    }

}
