@extends('dashboard.layouts.main')

@section('container')

<h5 class="mb-4 text-gray-900" >My Posts</h5>
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
 {{ session('success') }}
</div>
@endif
<hr>
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="/dashboard/posts/create" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">Create New Posts</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
           
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th style="width: 70%">Title</th>
                        <th>Category</th>
                        <th >Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                      
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('Yakin hapus data?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
    
                        </td>
                       
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

