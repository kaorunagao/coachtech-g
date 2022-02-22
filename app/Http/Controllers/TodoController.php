<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        return view('index', ['text' => 'フォームを入力']);
    }
    public function post(Request $request)
    {
        $form = $request->all();
				unset($form['_token_']);
				Todo::create($form);
				return view('/');

        $validate_rule = [
            'content' => 'required', 'string', 'max:20'
        ];
        $this->validate($request, $validate_rule);
        return view('index',['text' => '正しい入力です']);
    }
    





}