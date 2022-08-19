@extends('layout') 
@section('content')

<h1 class="display-3 text-center my-3">All Products</h1>

<section id="apps">
    
<div class="container custom-rent mb-5">
    <div class="text-center">
        <a href="/create"><button class="btn btn-secondary ">Add Product</button></a>
    </div>
    <div class="rentals " style="display:flex;flex-flow:row;justify-content:start ;flex-wrap:wrap"> 
       
        
     @foreach ($products as $item) 
    

    <div class="card shadow p-3 card text-center cityimg border-0 me-1" style="width: 20rem;display:inline-block;margin:40px 0px">
        <img class="card-img-top " src="{{ asset('uploads/products/'.$item->gallery) }}" alt="Card image cap" height="250">   
      
        <div class="card-body">
            <h5>{{ $item['name'] }}</h5>
            <strong class="card-text ">{{ $item['price'] }}</strong>           
        </div>
   
        <div> 
            <button class="btn btn-primary mt-4">Edit</button>
            {{-- <a href="/delete/{{ $item['id'] }}"><button class="btn btn-danger mt-4">Delete</button></a> --}}
        </div>
        </div>



      @endforeach  
    </div>
</div>


@endsection