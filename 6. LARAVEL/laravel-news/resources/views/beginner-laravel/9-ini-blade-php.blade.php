@extends('layouts.master')

@section('title', 'component')

@section('content')
<div class="container text-justify mt-5">
    <x-header data="blade header"></x-header>

    <h1>{{ 10+10 }}</h1>

    {{-- ini kondisi --}}
    @if ($name=="Victori")
    <h1>Hi {{ $name }}</h1>
    @else
    <h1 class="text-danger">Ini bukan victoria</h1>
    @endif

    {{-- ini perulangan --}}
    @foreach ($collection as $user)
    <table class="table">
        <thead>
            <tr>
                <th>{{ $user }}</th>
            </tr>
        </thead>
    </table>
    @endforeach
</div>
@endsection
