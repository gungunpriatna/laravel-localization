<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FrontController extends Controller
{
    public function home()
    {
        $locale = App::currentLocale();
        $data = Post::where('lang', $locale)->get();
        return view('welcome', ['data' => $data]);
    }
}
