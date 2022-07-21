@extends('dashboard.layouts.main')

@section('container')

<h1 class="mb-4 mt-5 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/dashboard/products">
            <div class="input-group mb-3">
                <input type="text" class="form-control rounded" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-primary rounded" type="submit" >Search</button>
            </div>
        </form>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-3 mb-3">
            <div class="card">
                <div class="position-absolute px-4 py-2" style="background-color: rgba(0,0, 0, 0.5)"><a href="/dashboard/products?category={{ $product->category->slug }}" class="text-white text-decoration-none">{{ $product->category->name }}</a></div>
                @if ($product->image)
                   <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->category->name }}" class="img-fluid">                   
                @elseif ($product->category->slug == 'food')
                    <img src="/img/food.jpg" class="card-img-top 400x300" alt="food" style="max-width: 350px; max-height: 370px">
                @else
                   <img src="/img/beverage.jpg" class="card-img-top" alt="beverage" style="max-width: 350px; max-height: 370px">
                @endif
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="/dashboard/products/{{ $product->slug }}" class="text-decoration-none text-dark">{{ $product->product }}</a>
                  </h5>
                  {{-- <p>By: <a href="/products?author={{ $product->author->username }}" class="text-decoration-none">{{ $product->author->name }}</a> {{ $products[0]->created_at->diffForHumans() }}</p>
                  <p class="card-text">{{ $product->excerpt }}</p> --}}
                  <a href="/products/{{ $product->slug }}" class="text-decoration-none text-dark"><h6>Rp. {{ $product->price }}</h6></a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
  </div>

  <div class="d-flex justify-content-center">
    {{ $products->links() }}
  </div>

@endsection

