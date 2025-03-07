<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::all(); //なんかもうデータベース(テーブル)にあるtodo全部を取り出して箱に入れて、
        return view('index', compact('todos'));
    }

    public function store(TodoRequest $request) 
    {
        $todo = $request -> only(['content']);
        Todo::create($todo); //リクエストされたデータをデータベースに保存
        return redirect('/')->with('message', 'Todoを作成しました');
    }

    public function update(TodoRequest $request)
    {
        $todo = $request->only(['content']); //ここではcontentだけ取り出し
        Todo::find($request->id)->update($todo);
        return redirect('/')->with('message', 'Todoを更新しました');
    }

    public function destroy(Request $request)
    {
        Todo::find($request->id)->delete(); //$todoが定義されていないから無理、あとdelete()はそもそも引数を必要としない。
        return redirect('/')->with('message', 'Todoを削除しました');
    }
}
