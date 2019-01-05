<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Model\Visit\LaravelBlogVisitModel;

class IndexController extends Controller
{
    public function index()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $model = new LaravelBlogVisitModel();
        //查询该ip是否曾经访问过
        $viewData = $model->findOneByWhere(['ip' => $ip]);
        if ($viewData) {
            //更新访问次数
            $viewNum = $viewData['view_num'] + 1;
            $updateRes = $model->updateByWhere(['ip' => $ip], ['view_num' => $viewNum]);
        } else {
            //创建访问记录
            $viewNum = 1;
            $data = [
                'ip' => $ip,
                'view_num' => $viewNum,
            ];
            $createRes = $model->createData($data);
        }
        //获取总访问量
        $totalViewNum = $model->getAllViewNum();
        return view('index', [
            'ip' => $ip,
            'viewNum' => $viewNum,
            'totalViewNum' => $totalViewNum,
        ]);
    }
}
