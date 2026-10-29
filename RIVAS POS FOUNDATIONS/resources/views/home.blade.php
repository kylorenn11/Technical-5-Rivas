@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="eyebrow">IT0049 · Technical Formative Assessment 5</div>
        <h1>Your first Laravel POS application.</h1>
        <p>A small point-of-sale foundation demonstrating Laravel routes, controllers, Blade views, and temporary static array data.</p>
        <a class="button" href="{{ route('customers') }}">View customer accounts →</a>
    </section>

    <div class="section-head">
        <div><h2>Explore the application</h2><p>Each page demonstrates a different part of the MVC flow.</p></div>
    </div>
    <section class="cards">
        <a class="card" href="{{ route('about') }}"><div class="icon">i</div><h2>About</h2><p>Review the course and module represented by this Laravel activity.</p></a>
        <a class="card" href="{{ route('customers') }}"><div class="icon">C</div><h2>Customer Accounts</h2><p>Browse five sample customer records rendered with a Blade loop.</p></a>
        <a class="card" href="{{ route('users') }}"><div class="icon">U</div><h2>User Accounts</h2><p>Browse five sample POS user records and their assigned roles.</p></a>
    </section>
@endsection
