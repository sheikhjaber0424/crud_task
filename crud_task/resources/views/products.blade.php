@extends('layout') 
@section('content')

<h1 class="display-3 text-center my-3">All Products</h1>
<p class="text-center">only registered users can add, update and delete products</p>
<section id="apps">
    
<div class="container custom-rent mb-5">

    @if(Auth::check())
    <div class="text-center">
        <a href="/products/create"><button class="btn btn-secondary ">Add Product</button></a>
        {{-- <a href="products/create"><button class="btn btn-secondary ">Add Product</button></a> --}}
       
    </div>
    @endif

    @if (session('status'))
    <h6 class="alert alert-success mt-3">{{ session('status') }}</h6>
@endif
    <div class="rentals " style="display:flex;flex-flow:row;justify-content:start ;flex-wrap:wrap"> 
       
        
     @foreach ($products as $item) 
    

    <div class="card shadow p-3 card text-center cityimg border-0 me-1" style="width: 20rem;display:inline-block;margin:40px 0px">
        <img class="card-img-top " src="{{ asset('uploads/products/'.$item['gallery']) }}" alt="Card image cap" height="250">   
      
        <div class="card-body">
            <h5>{{ $item['name'] }}</h5>
            <strong class="card-text ">{{ $item['price'] }}</strong>           
        </div>
   
        <div> 
            @if(Auth::check())
            <a href="products/{{ $item['id'] }}/edit  "><button class="btn btn-primary mt-4">Edit</button></a>
            
            <form class="d-inline" action="/products/{{ $item['id'] }}" method="POST">
                @csrf
                @method('DELETE')

                <a href="/delete/{{ $item['id'] }}"><button class="btn btn-danger mt-4">Delete</button></a>
            </form>
            @endif
        </div>
        </div>



      @endforeach  
    </div>
</div>


@endsection