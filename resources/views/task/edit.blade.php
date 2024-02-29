@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url("/task/{$tasks->id}") }}">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" value="{{ $tasks->name }}" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ $tasks->description }}</textarea>
        </div>

        <button type="submit">Update Task</button>
    </form>

    @endsection
</body>
</html>