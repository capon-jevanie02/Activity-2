@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card text-center shadow-lg" style="width: 22rem; border-radius: 20px;">
        <div class="card-header" style="background: linear-gradient(135deg, #4a90e2, #357ABD); height: 130px; border-top-left-radius: 20px; border-top-right-radius: 20px;"></div>
        <div class="card-body position-relative">
            <img src="https://via.placeholder.com/100" alt="Profile Image"
                class="rounded-circle border border-3 border-white position-absolute top-0 start-50 translate-middle"
                style="width: 100px; height: 100px; object-fit: cover; margin-top: -50px;">

            <div style="margin-top: 60px;">
                <h5 class="card-title">{{ $user->name }}</h5>
                <p class="card-text text-muted">{{ $user->school_id }}</p>
                <p class="card-text">Year: {{ $user->year }}</p>
                <p class="card-text">Section: {{ $user->section }}</p>
            </div>

            <hr>

            <div class="d-flex justify-content-around">
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                <a href="{{ route('users.index') }}" class="btn btn-outline-secondary btn-sm">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
