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



    public function show(Request $request)
    {
        $user = Organizer::find($request->userId);
        return view("dashboard/show", ["user" => $user]);
    }



    public function edit(Request $request)
    {
        $user = Organizer::find($request->userId);
        return view("dashboard/edit", ["user" => $user]);
    }



    public function update(Request $request)
    {
        $user = Organizer::find($request->userId);
        $user->update([
            "name" => $request->name,
            "creator" => $request->creator,
            "creator_kana" => $request->creator_kana,
            "email" => $request->email,
        ]);

        return redirect("dashboard");
    }



    public function delete(Request $request)
    {
        $user = Organizer::find($request->userId);
        $user->delete();

        return redirect("dashboard");
    }
}
