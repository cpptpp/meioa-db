<?php

namespace Meioa\Tools\connect;

use PDO;

class Mysql
{
    private function _parseDsn($config){
        $dsn = 'mysql:host=' . $config['hostname'];
        $dsn .= ';dbname=' . $config['database'];


        if (!empty($config['hostport'])) {
            $dsn .= ';port=' . $config['hostport'];
        }
        if (!empty($config['charset'])) {
            $dsn .= ';charset=' . $config['charset'];
        }
        return $dsn;
    }

    /**
     * @param $dbConfig
     * @return PDO
     */
    public function connent($dbConfig){
        $dsn = $this->_parseDsn($dbConfig);
        return new PDO($dsn,$dbConfig['username'],$dbConfig['password']);
    }
}
