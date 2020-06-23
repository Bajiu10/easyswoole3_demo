<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-10-12
 * Time: 上午11:07
 */

namespace App\HttpController;


use EasySwoole\Http\AbstractInterface\REST;
use EasySwoole\Validate\Validate;

class Validator extends REST
{

    function GETValid()
    {
        $params = [
            'name' => 'blank',
            'age' => 25
        ];

        $valid = new Validate();
        $valid->addColumn('name', '姓名必填');
        $ret = $valid->validate($params);
        $this->response()->write($ret);
    }
}