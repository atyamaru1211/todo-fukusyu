@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
    <div class="todo__alert">
        @if (session('message'))<!--下のメッセージと同じ-->
        <div class="todo__alert--success">
            {{ session('message') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="todo__alert--danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>

    <div class="todo__content">
        <div class="section__title"><!--追加～-->
            <h2>新規作成</h2>
        </div><!--～追加-->
        <form class="create-form" action="/todos" method="post">
            @csrf
            <div class="create-form__item">
                <input class="create-form__item-input" type="text" name="content" value="{{ old('content') }}">
                <select class="create-form__item-select"><!--追加～-->
                    <option value="">カテゴリ</option>
                </select><!--～追加-->
            </div>
            <div class="create-form__button">
                <button class="create-form__button-submit" type="submit">作成</button>
            </div>
        </form>

        <div class="section__title"><!--追加～-->
            <h2>Todo検索</h2>
        </div>
        <form class="search-form">
            <div class="search-form__item">
                <input class="search-form__item-input" type="text">
                <select class="search-form__item-select">
                    <option value="">カテゴリ</option>
                </select>
            </div>
            <div class="search-form__button">
                <button class="search-form__button-submit" type="submit">検索</button>
            </div>
        </form><!--～追加-->

        <div class="todo-table">
            <table class="todo-table__inner">
                <tr class="todo-table__row">
                    <th class="todo-table__header"><!--追加～-->
                        <span class="todo-table__header-span">Todo</span>
                        <span class="todo-table__header-span">カテゴリ</span>
                    </th><!--～追加-->
                </tr>
                @foreach($todos as $todo)
                <tr class="todo-table__row">
                    <td class="todo-table__item">
                        <form class="update-form" action="/todos/update" method="post">
                            @method('patch')
                            @csrf
                            <div class="update-form__item">
                                <input class="update-form__item-input" type="text" name="content" value="{{ $todo['content'] }}">
                                <input type="hidden" name="id" value="{{ $todo['id'] }}">
                            </div>
                            <div class="update-form__item"><!--追加～-->
                                <p class="update-form__item-p">Category 1</p>
                            </div><!--～追加-->
                            <div class="update-form__button">
                                <button class="update-form__button-submit" type="submit">更新</button>
                            </div>
                        </form>
                    </td>
                    <td class="todo-table__item">
                        <form class="delete-form" action="/todos/delete" method="post">
                            @method('delete')
                            @csrf
                            <div class="delete-form__button">
                                <input type="hidden" name="id" value="{{ $todo['id'] }}"> <!--ここに入れる！-->
                                <button class="delete-form__button-submit" type="submit">削除</button>
                            </div>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection                
