@extends('layouts.master')

@section('content')

<h1>Edit Task - Task Name </h1>
<p class="lead">Edit this task below. <a href="{{ route('tasks.index') }}">Go back to all tasks.</a></p>
@include('common.errors')
@include('common.flash')
<form method="POST" action="{{ route('tasks.update', $task->id) }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-group">
        <label for="title">Title:</label>
    <input type="title" name="title" class="form-control" id="title" value="{{ $task->title }}">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea type="title" name="description" class="form-control" id="description">{{ $task->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary" id="submit">Update task</button>
</form>
@endsection