@extends('layouts.app')

@section('title-block'){{$data->header}}@endsection

@section('content')
    <h1>{{$data->header}}</h1>
        <div class="alert alert-info">
            <p>{{ $data->content }}</p>
            <a href="{{ route('Article-update', $data->id) }}"><button class="btn btn-primary">Редактировать</button></a>
            <a href="{{ route('Article-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
        </div>

@endsection
