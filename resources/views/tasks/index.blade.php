@extends('layouts.master')

@section('content')

<h1>Task List</h1>
<p class="lead">
    Here&apos; a list of all your tasks. <a href="{{ route('tasks.create') }}">Add a new one?</a>
</p>
<hr>
@endsection