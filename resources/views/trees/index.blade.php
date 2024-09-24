@extends('layouts.app')

@section('content')
    <h1>Trees</h1>
    <a href="{{ route('trees.create') }}">Create New Tree</a>
    <ul>
        @foreach ($trees as $tree)
            <li>
                <a href="{{ route('trees.show', $tree->id) }}">{{ $tree->name }}</a>
                <a href="{{ route('trees.edit', $tree->id) }}">Edit</a>
                <form action="{{ route('trees.destroy', $tree->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection