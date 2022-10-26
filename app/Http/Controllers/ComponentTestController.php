<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    //
    public function showComponet1 (){
        $message = 'メッセージ';
        return view('tests.component-test1',
        compact('message'));
    }
    public function showComponet2 (){
        return view('tests.component-test2');

    }

}
