<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/13
 * Time: 9:30
 * Auther sl
 */

namespace app\index\controller\one;
use think\Controller;
use think\Request;

class Common extends Controller
{

    public $url;
     function __construct (Request $request){
         parent::__construct($request);
        $this->url=Request::instance()->url();
    }



}