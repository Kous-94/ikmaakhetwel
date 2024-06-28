@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('storage/' . $product->image_path) }}" class="img-fluid" alt="{{ $product->name }}">
        </div>
        <div class="col-md-6">
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <p><strong>Price:</strong> ${{ $product->price }}</p>
            <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
        </div>
    </div>
</div>

@endsection
