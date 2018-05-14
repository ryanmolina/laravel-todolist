@extends('layouts.master')
@section('content')
<h1>{{ $task->title }}</h1>
<p class="lead">{{ $task->description }}</p>

<hr>

<a href="{{ route('tasks.index') }}" class="btn btn-info">Back to all tasks</a>
<a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-info">Edit Task</a>

<div class="pull-right">
    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>

@endsection