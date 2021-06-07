@extends('layouts.app')

@section('title-block')Обновление записи@endsection

@section('content')
    <h1>Обновление записи</h1>

    <form action="{{ route('Article-update-submit', $data->id) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="header">Введите заголовок новости</label>
            <input type="text" name="header" value="{{ $data->header }}" placeholder="Заголовок новости" id="header" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Введите текст новости</label>
            <textarea name="content" id="content" class="form-control" placeholder="Текст новости" >{{ $data->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Обновить</button>
    </form>

@endsection
