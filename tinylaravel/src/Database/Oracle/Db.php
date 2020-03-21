<?php
namespace Rsj\TinyLaravel\Container\Databases\Oracle;

class Db
{
    private $type;
    function __construct()
    {
        $this->type = __CLASS__;
    }

    public function index(){
        echo '数据库:'.$this->type;
    }
}