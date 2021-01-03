@extends('layouts.master')

@section('title', 'component')

@section('content')
<div class="container text-justify mt-5">
    <x-header data="blade header"></x-header>
    @include('beginner-laravel.9-ini-blade-php')
    <h1>{{ $haha }}</h1>
</div>
@endsection

<var>
    <script>
        var data=@JSON($collection);
        console.warn(data[1]);
    </script>
</var>
