@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Task</h1>
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" required>{{ $task->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="long_description">Long description:</label>
                <textarea class="form-control" id="long_description" name="long_description">{{ $task->long_description }}</textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="completed" name="completed" {{ $task->completed ? 'checked' : '' }}>
                <label class="form-check-label" for="completed">Complete</label>
            </div>
            <button type="submit" class="btn btn-primary">Edit task</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection

