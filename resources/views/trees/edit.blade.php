@extends('layouts.app')

@section('content')
    <h1>Edit Tree</h1>
    <form method="POST" action="{{ route('trees.update', $tree->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $tree->name }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection