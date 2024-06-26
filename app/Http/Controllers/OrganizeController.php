<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organizer;

class OrganizeController extends Controller
{
    public function index()
    {
        $object = new Organizer();
        //users テーブルのデータを User Model のgetData メソッド経由で取得する
        $data = $object->getData();
        //データを一旦出力
        // var_dump($data);

        return view('dashboard', ['data' => $data]);
    }
}
