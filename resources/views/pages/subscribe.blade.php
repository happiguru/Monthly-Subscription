@extends('layouts.app')

@section('content')
<div class="hero">
    <div class="hero-content">
        <h1>You're Joining!</h1>
        <h2>Hurray!!</h2>
    </div>
</div>
<section class="container">
    <div class="card padded">
    {{-- only show if not logged in --}}
        {{-- user info --}}
        @if(Auth::guest())
            <div class="section-header">
                <h2>User Info</h2>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
        @endif

        {{-- subscription info --}}
            <div class="section-header">
                <h2>Subscription Info</h2>
            </div>
        {{-- credit card info --}}

            <div class="section-header">
                <h2>Credit Card Info</h2>
            </div>
    </div>
</section>
@endsection