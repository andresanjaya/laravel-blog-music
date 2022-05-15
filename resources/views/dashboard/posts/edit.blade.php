@extends('dashboard.layouts.main')

@section('container')

    <h5 class="m-0 py-1 font-weight-bold text-primary ">Form Edit Posts</h5>
    <hr class="mb-4">

    <div class="card mb-4  ">
        <div class="card-header py-3 ">
            <h6 class="m-0 font-weight-bold  ">Edit Posts</h6>
        </div>
        <div class="card-body">
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="title">
                        Title :
                    </label>
                    <input type="text" name="title" id="title" autocomplete="on" class="form-control @error('title') is-invalid @enderror" required autofocus value="{{ old('title', $post->title) }}">
                    @error('title')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div> 
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nama">
                        Slug :
                    </label>
                    <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" required value="{{ old('slug', $post->slug) }}">
                    @error('slug')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div> 
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="category">
                        Category :
                    </label>
                    <select class="form-control" name="category_id">
                        @foreach ($categories as $category)
                        @if (old('category_id', $post->category_id == $category->id))
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                        <option class="option" value="{{ $category->id }}">{{ $category->name }} </option>
                        @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="image" class="form-label">Post Image</label>
                    <input type="hidden" name="oldImage" value="{{ $post->image }}">
                    @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    @endif
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control py-1 pl-0 @error('image') is-invalid @enderror" name="image" style="margin-bottom: 10px" type="file" id="image" onchange="previewImage()">
                    @error('image')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div> 
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="category">
                        Body :
                    </label>
                    
                    <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                    <trix-editor input="body"></trix-editor>    
                    @error('body')
                    <p class="text-danger ">{{ $message }}</p>
                    @enderror 
                </div>

              
                <hr>

                <button class="btn btn-primary" type="submit" name="submit" value="Simpan">Update Data</button>

            </form>
        </div>
    </div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

     title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data=> slug.value = data.slug)
     });

     document.clickEventListener('trix-file-accept', function(e) {
         e.preventDefault();
     });

     function previewImage() {
         const image = document.querySelector('#image');
         const imgPreview = document.querySelector('.img-preview');

         imgPreview.style.display = 'block';

         const oFReader = new FileReader();
         oFreader.readAsDataURL(image.files[0]);
         
         oFReader.onload = function(oFREvent) {
             imgPreview.src = oFREvent.target.result;
         }
        }
</script>


@endsection

