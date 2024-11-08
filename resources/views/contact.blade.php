<!-- resources/views/contact.blade.php -->
@extends('layouts.guest')

@section('content')

<div class="container mt-4">
    <h2>Contact Us</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ route('contact.send') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone number</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

@endsection