@extends('layouts.master')

@section('content')

<h1>Add a New Tasks</h1>
<p class="lead">Add to your task list below.</p>

@include('common.errors')
@include('common.flash')

<form method="POST" action="{{ route('tasks.store') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="title" name="title" class="form-control" id="title">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea type="title" name="description" class="form-control" id="description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" id="submit">Craete New Task</button>
</form>
@endsection