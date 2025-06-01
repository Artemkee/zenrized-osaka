@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
    <div class="container">
        <h1>Hello, {{ $user->name }}!</h1>

        @if ($user->email)
            <p>Email: <strong>{{ $user->email }}</strong></p>
        @else
            <p class="text-muted">No email provided.</p>
        @endif

        <ul>
            @foreach ($user->roles as $role)
                <li>{{ $role->name }}</li>
            @endforeach
        </ul>

        <form method="POST" action="{{ route('user.update', $user) }}">
            @csrf
            @method('PUT')

            <label for="name">Name:</label>
            <input id="name" name="name" value="{{ old('name', $user->name) }}" required>

            <button type="submit">Update Profile</button>
        </form>
    </div>
@endsection
