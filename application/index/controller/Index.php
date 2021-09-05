<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\common\model\Moon;

class Index
{

    protected $noNeedLogin = 'index,test';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function index()
    {

        $choose = [
               'A'=>'你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好',
               'B'=>'你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好',
               'C'=>'你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好',
            ];

        for ($i=0;$i<10;$i++){
            $data[]=[
                'choose'=>json_encode($choose),
                'context'=>'你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好你好',
            ];
        }

        $model =new Moon();
//        $res = $model->insertAll($data);

        return json_encode($data);
    }


    public function count(){
        return 'success';
    }



}
