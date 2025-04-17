@extends('layouts.app')

@section('content')
<a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Create Students Accounts</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>Name</th>
            <th>School ID</th>
            <th>Year</th>
            <th>Section</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->school_id }}</td>
            <td>{{ $user->year }}</td>
            <td>{{ $user->section }}</td>
            <td>
                <a href="{{ route('users.profile', $user->id) }}" class="btn btn-sm btn-info">Profile</a>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete user?')">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5">No users found.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
