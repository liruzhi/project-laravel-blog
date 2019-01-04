<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        //base_path()    "/data/www/project-laravel-blog"
        //app_path()    "/data/www/project-laravel-blog/app"
//        dd(base_path());
        return view('index', [
            'viewNum' => 57,
            'number' => 102,
        ]);
    }
}
