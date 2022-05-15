@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
         
                <h1>{{ $post->title }}</h1>
                <a href="/dashboard/posts" class="btn btn-success mb-3"><i class="fa fa-arrow-left pr-2" ></i>Back to my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mb-3"><i class="fas fa-edit pr-2" ></i>Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger mb-3" onclick="return confirm('Yakin hapus data?')"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button>
                </form>

                @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
                @endif

               
                <article class="my-3 fs-5"> 
                    {!! $post->body  !!}
                </article>
               
        </div>
    </div>
</div>

@endsection

