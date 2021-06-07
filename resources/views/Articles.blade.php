@extends('layouts.app')

@section('title-block')Все новости@endsection

@section('content')
    <h1>Все новости</h1>
    @foreach($data as $element)
        <div class="alert alert-info">
            <h3>{{ $element->header }}</h3>
            <p>{{ $element->content }}</p>
            <a href="{{ route('Articles-data-one', $element->id) }}"><button class="btn btn-warning">Изменить</button></a>
        </div>
    @endforeach
@endsection
