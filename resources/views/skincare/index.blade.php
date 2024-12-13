@extends('layouts.app')

@section('content')
<h1>Skincare Products</h1>
@foreach ($products as $product)
    <div>
        <h2>{{ $product->name }} - {{ $product->brand }}</h2>
        <p>{{ $product->description }}</p>
        <p>Price: ${{ $product->price }}</p>
        <a href="/product/{{ $product->id }}">View Details</a>
    </div>
@endforeach
@endsection
