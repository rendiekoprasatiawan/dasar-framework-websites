@extends('layouts.master')

@section('title', 'component')

@section('content')
<div class="container text-justify mt-5">
    <x-header data="submit header"></x-header>
    <form action="/submit" method="POST">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control @error('username') is-invalid @enderror" type="text" name="username"
                id="username" placeholder="Masukkan username!" value="{{ old('username') }}">
        </div>
        {{-- ini untuk error --}}
        @error('username')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror

        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                id="password" placeholder="Masukkan password!" value="{{ old('password') }}">
        </div>
        {{-- ini displaying untuk error --}}
        @error('password')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>
@endsection
