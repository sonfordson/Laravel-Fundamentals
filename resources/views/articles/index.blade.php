@extends('master')
@section('content')

    <h1>Articles</h1>

    @foreach($articles as $article)
            <h2><a href="{{ url('/articles',$article->id)}}">{{ $article->title }}</a></h2>
            <h3>{{ $article->body }}</h3>

    @endforeach
@stop