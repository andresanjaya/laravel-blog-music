@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
         
                <h1>{{ $post->title }}</h1>
                <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }} </a>  in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}"> {{ $post->category->name }}</a></p>
                @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
                @endif
               
                <article class="my-3 fs-5"> 
                    {!! $post->body  !!}
                </article>
               
                <a href="/posts" class="text-decoration-none d-block mt-3" >Back to Posts</a>
            
 
        </div>
    </div>
</div>


    
@endsection