@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 my-3">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>

        </div>
        @foreach ($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/' . $product->image_path) }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">Price: ${{ $product->price }}</p>
                    <p class="card-text">Quantity: {{ $product->quantity }}</p>
                    <a href="{{ route('products.show', ['id' => $product->id]) }}" class="btn btn-primary">View Product</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    .card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-img-top {
    height: 200px;
    object-fit: cover;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

</style>

@endsection


