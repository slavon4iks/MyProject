<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mysite;
class MySiteController extends Controller
{
    public function show(){
        $title = 'My Site';
        $name = 'Slava Kutaev';
        $content = 'My New Content';
        $info = Mysite::all();
        return view('mysite', compact('info','title','content','name'));

    }
}
