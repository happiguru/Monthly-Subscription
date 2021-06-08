@extends('layouts.app')

@section('content')

<div class="hero"></div>
    <div class="hero-content">
        <h1>Daily Dose of Cute Animals!</h1>
        <h2>Only $10/mo</h2>
        <div class="cta">
            <p>We promise you won't regret it.</p>
            <a href="/subscribe">Subscribe</a>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="section-header">
                <h2>Latest Animals</h2>
            </div>
            {{-- Post will go here --}}
        </div>
    </section>
</div>

@endsection