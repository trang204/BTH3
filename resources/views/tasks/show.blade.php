@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>View Task</h1>
        <p><strong>Title:</strong> {{ $task->title }}</p>
        <p><strong>Description:</strong> {{ $task->description }}</p>
        <p><strong>Long description:</strong> {{ $task->long_description }}</p>
        <p><strong>Status:</strong> {{ $task->completed ? 'Complete' : 'Pending' }}</p>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
@endsection

