@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/category.css') }}" />
@endsection

@section('content')
    <div class="category__alert">
        @if(session('message'))
        <div class="category__alert--success">
            {{ session('message') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="category__alert--danger">
            <ul>
                @foreach
            </ul>
        </div>

    <div class="category__content">
        <form class="category-form">
            <div class="category-form__item">
                <input class="category-form__item-input" type="text" name="name" value="{{ old('name') }}">
            </div>
            <div class="category-form__button">
                <button class="category-form__button-submit" type="submit">作成</button>
            </div>
        </form>

            <div class="category-table">
                <table class="category-table__inner">
                    <tr class="category-table__row">
                        <th class="category-table__header">
                            category
                        </th>
                    </tr>
                    <tr class="category-table__row">
                        <td class="category-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <input class="update-form__item-input" type="text">
                                </div>
                                <div class="update-form__button">
                                    <button class="update-form__button-submit">更新</button>
                                </div>
                            </form>
                        </td>
                        <td class="category-table__item">
                            <form class="delete-form">
                                <div class="delete-form__button">
                                    <button class="delete-form__button-submit">削除</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection