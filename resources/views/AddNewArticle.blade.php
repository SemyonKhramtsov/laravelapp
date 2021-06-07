@extends('layouts.app')

@section('title-block')Добавление новости@endsection

@section('content')
    <h1>Добавить новость: </h1>

    <form action="{{ route('AddNewArticleForm') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="header">Введите заголовок новости</label>
            <input type="text" name="header" placeholder="Заголовок новости" id="header" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Введите текст новости</label>
            <textarea name="content" id="content" class="form-control" placeholder="Текст новости" ></textarea>
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>

@endsection
