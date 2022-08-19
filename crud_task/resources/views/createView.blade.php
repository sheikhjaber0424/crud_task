@extends('layout') 
@section('content')
    
    <div class="container mt-5"> 
      <div class="row justify-content-center">
        
        <div class="col-lg-6">

            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
    <form action='/products' method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="">Price</label>
            <input type="text" name="price" class="form-control">
        </div>
        
        <div class="form-group mb-3">
            <label for="">Image</label>
            <input type="file" name="gallery" class="form-control">
        </div>
        <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Save </button>
        </div>
        
       
      </form>
    </div>


    </div>
    </div>

@endsection