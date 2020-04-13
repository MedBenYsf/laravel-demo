@extends('layout')

@section('content')
    {{ $post['title'] }}

    avec id = {{ $id }} et {{ $author }}
    
@endsection