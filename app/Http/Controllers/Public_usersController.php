<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Public_usersController extends Controller
{
    public function requestForm(){
        return view('samples.request_form', [
          'title' => 'フォームサンプル',
        ]);
    

        // メッセージのデータを取得する
        $sql = "SELECT facility_name, FROM public_users";
        $tenpo = $->query($sql);
      }
    }
  

