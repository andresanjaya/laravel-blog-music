@extends('dashboard.layouts.main')

@section('container')

<h5 class="mb-4 text-gray-900" >Post Categories</h5>
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
 {{ session('success') }}
</div>
@endif
<hr>
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="/dashboard/categories/create" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">Create New Category</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
           
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="width: 15%">No</th>
                        <th>Category Name</th>
                        <th style="width: 20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                      
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
            
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
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

