@extends('layout')
@section('content')

<div class="container mt-5"> 
    <div class="row justify-content-center">
      
      <div class="col-lg-6">

          @if (session('status'))
          <h6 class="alert alert-success">{{ session('status') }}</h6>
      @endif
  <form action='/products/{{ $product['id'] }}' method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group mb-3">
          <label for="">Name</label>
          <input type="text" name="name" value="{{ $product['name'] }}" class="form-control">
      </div>
      <div class="form-group mb-3">
          <label for="">Price</label>
          <input type="text" name="price" value="{{ $product['price'] }}" class="form-control">
      </div>
      
      <div class="form-group mb-3 ">
          <label for="">Image</label>
          <input type="file" name="gallery" class="form-control">
          <img class="card-img-top w-50" src="{{ asset('uploads/products/'.$product['gallery']) }}" alt="Card image cap"  height="200px">   
      </div>
      <div class="form-group mb-3 ">
          <button type="submit" class="btn btn-primary">Update </button>
      </div>
      
     
    </form>
  </div>


  </div>
  </div>



@endsection