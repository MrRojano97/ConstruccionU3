
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Sujetos</h1>
    @foreach($posts as $post)
    <li>{{$post->archivoJson}}</li>
    @endforeach
</div>
@stop
