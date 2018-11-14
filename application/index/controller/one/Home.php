<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/12
 * Time: 14:05
 * Auther sl
 */

namespace app\index\controller\one;

use app\index\controller\one\Common;
use think\Request;
use app\index\logicModel\HomeLogic;
class Home extends Common
{    protected  $model = '';
    function __construct(Request $request = null)
    {
        parent::__construct($request);

    }

    public function index(Request $request)
    {
        $agent = $request->header('user-agent');
       // echo  $agent;
        $this->assign('title','ThinkPHP');
        $this->assign('is_phone',is_moble());
        $this->assign('url', $this->url);
       // return $this->fetch('index/index');
      return $this->fetch('index');
    }
}