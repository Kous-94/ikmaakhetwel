@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Banner Section -->
    <section class="banner">
        <div class="banner-text">
            <h1>Welcome to ikmaakhetwel</h1>
            <p>Ontdek onze uitgebreide diensten voor betrouwbare laptop- en PC-reparaties en upgrades</p>
        </div>
    </section>

    <!-- Main Content Section -->
    <div class="container mt-4">
        <h2>Main Content Section</h2>
        <p>This is the main content area below the banner.</p>
    </div>
</div>

<style>
    .banner {
        position: relative;
        background-image: url('{{ asset('images/banner.jpg') }}'); /* Replace with your banner image path */
        background-size: cover;
        background-position: center;
        height: 400px; /* Adjust the height as needed */
        width: 100%; /* Set width to 100% or adjust as needed */
        color: #fff; /* Text color */
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .banner-text {
        font-size: 2rem; /* Adjust font size */
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Optional: Text shadow for better readability */
    }
</style>

@endsection