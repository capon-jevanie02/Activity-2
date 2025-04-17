@extends('layouts.app')

@section('content')
<h2>{{ isset($user) ? 'Edit' : 'Create' }} Studenst Account</h2>

<form action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}" method="POST" class="card card-body shadow">
    @csrf
    @if(isset($user)) @method('PUT') @endif

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $user->name ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">School ID</label>
        <input type="text" name="school_id" class="form-control" value="{{ old('school_id', $user->school_id ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Year</label>
        <input type="text" name="year" class="form-control" value="{{ old('year', $user->year ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Section</label>
        <input type="text" name="section" class="form-control" value="{{ old('section', $user->section ?? '') }}" required>
    </div>

    <button type="submit" class="btn btn-success">{{ isset($user) ? 'Update' : 'Save' }}</button>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
