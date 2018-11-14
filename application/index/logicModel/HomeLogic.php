<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/14
 * Time: 13:30
 * Auther sl
 */

namespace app\index\logicModel;
use app\admin\logicModel\MyException;
use app\admin\model\Article;
use app\admin\model\ArticleDetail;
use think\Model;

class HomeLogic  extends Model
{
    public function getList()
    {
        try {
            $Art = new Article();// $ArtDetail = new ArticleDetail();
            $re = collection( $Art->with('ArticleDetail')->select())->toArray();
            return $re;
        } catch (\MyException $e) {
            return false;

        }catch (\Exception $e) {
            return false;

        }

    }
}