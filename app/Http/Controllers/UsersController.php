<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function withdrawal()
    {
        $user = Auth::user();
        $user->delete();
        Auth::logout();
        return view('auth.account_deleted');
    }
    public function display()
    {
        // $human = Users::all();
        $id = Auth::id();
        $human = DB::table('users')->find($id);
        return view('MyPage.user_mypage', ['human' => $human]);
    }
}
