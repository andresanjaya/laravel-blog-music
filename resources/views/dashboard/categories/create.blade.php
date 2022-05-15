@extends('dashboard.layouts.main')

@section('container')

    <h5 class="m-0 py-1 font-weight-bold text-primary ">Form Create New Category</h5>
    <hr class="mb-4">

    <div class="card mb-4  ">
        <div class="card-header py-3 ">
            <h6 class="m-0 font-weight-bold  ">Create New Category</h6>
        </div>
        <div class="card-body">
            <form action="/dashboard/categories" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">
                        Name :
                    </label>
                    <input type="text" name="name" id="name" autocomplete="on" class="form-control @error('name') is-invalid @enderror" required autofocus value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div> 
                    @enderror
                </div>

                <div class="form-group">
                    <label for="slug">
                        Slug :
                    </label>
                    <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" required value="{{ old('slug') }}">
                    @error('slug')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div> 
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image" class="form-label">Category Image</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control py-1 pl-0 @error('image') is-invalid @enderror" name="image" style="margin-bottom: 10px" type="file" id="image" onchange="previewImage()">
                    @error('image')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div> 
                    @enderror
                </div>
                
               

              
                <hr>

                <button class="btn btn-primary" type="submit" name="submit" value="Simpan">Tambah Data!</button>

            </form>
        </div>
    </div>

<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

     name.addEventListener('change', function() {
        fetch('/dashboard/categories/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data=> slug.value = data.slug)
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

