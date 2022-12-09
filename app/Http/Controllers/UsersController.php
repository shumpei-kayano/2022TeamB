<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UsersController extends Controller
{
    public function withdrawal()
    {
        $user = Auth::user();
        $user->delete();
        Auth::logout();
        return view('auth.account_deleted');
    }
    public function add(Request $request){
        // user情報をAuthで取得する
        $user = Auth::user();
        // useridが一致するものをテーブルから取り出す
        $users = User::whereid($user->id) -> first();
        // 入力した情報を$formにいれる
        $form = $request->all();
        // カラムごとにデータをテーブルに入れる。
        $users["hobby1"] = $form["hobby1"];
        $users["hobby2"] = $form["hobby2"];
        $users["hobby3"] = $form["hobby3"];
        $users["name"] = $form["name"];
        $users["email"] = $form["email"];
        $users["self_introduction"] = $form["self_introduction"];
        // dd($form,$users);
        // トークンイラン券外す
        unset($form['_token']);

        $users->fill($form)->save();
        // redirectでトップのルートを見る
        return redirect('/');
    }
}
