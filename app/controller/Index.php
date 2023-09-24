<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {

      return view('index',
        [
          'name'=>"ThinkPHP8 扩展blade 引擎",
          'demo' => ""
        ]);  
        
    }

    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;
    }
}
