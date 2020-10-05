<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;

class MyPageController extends Controller
{
    public function index($user_id) {
        $works = Work::where('user_id', $user_id)
                    ->orderBy('created_at', 'DESC')
                    ->get();
        
        return view('mypage', compact('works'));
    }
}
