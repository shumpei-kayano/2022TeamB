<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Public_usersController extends Controller
{
    public function requestForm(){
        return view('samples.request_form', [
          'title' => 'フォームサンプル',
        ]);
      }
      public function requestSample(Request $request){
  
        $user_name = $request->input('user_name');
        $tenpo = $request->input('facility_name');
        $tel = $request->input('comment');
        $comment = $request->input('comment');
  
        return view('samples.request_sample', [
          'title' => 'リクエストの受け取り',
          'user_name' => $user_name,
          'comment' => $comment,
        ]);
      }
}
