@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit Students Account</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
            </div>

            <div class="mb-3">
                <label for="school_id" class="form-label">School ID</label>
                <input type="text" name="school_id" class="form-control" value="{{ $user->school_id }}" required>
            </div>

            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="text" name="year" class="form-control" value="{{ $user->year }}" required>
            </div>

            <div class="mb-3">
                <label for="section" class="form-label">Section</label>
                <input type="text" name="section" class="form-control" value="{{ $user->section }}" required>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection
