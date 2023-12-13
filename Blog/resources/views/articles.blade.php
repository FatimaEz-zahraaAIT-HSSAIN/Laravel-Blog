@extends('layout')

@section('links')
<link rel="stylesheet" href="css/articles.css">
@endsection

@section('content')
<div class="articles">
    <h2 class="title">Articles</h2>
    @foreach($articles as $article)
        <div class="wrapper">
            <div class="article">
                <h3 class="article-title">{{ $article->title }}</h3>
                <p class="article-slug">{{ $article->slug }}  </p>
                <p class="article-content">{{ $article->content }}  </p>
            </div>
        </div>
    @endforeach
</div> 

@endsection

@section('aside')
<div class="aside">
    <h2 class="title">Operations</h2>
    <ul>
        <li><a href="{{route('create')}}">Create Article</a></li>
        <li><a href="">Edit Article</a></li>
        <li><a href="">Delete Article</a></li>
    </ul>
    
</div>
@endsection