@extends('layouts.app')

@section('content')
    <section class="about">
        <div class="eyebrow">About this project</div>
        <h1>{{ $course }}</h1>
        <p>{{ $module }} is a Laravel recreation of the earlier POS application exercise. The route maps the request to a controller method, the controller prepares data, and the Blade view renders the response.</p>
        <div class="card" style="margin-top: 24px;">
            <h2>Learning objectives</h2>
            <p>Set up a Laravel project, use Artisan, define routes, create controllers, build Blade views, and pass temporary data from controllers to views.</p>
        </div>
    </section>
@endsection
