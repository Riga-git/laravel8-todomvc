@extends('layout')

@section('content')
<h1>New task</h1>

<form method="POST" action="{{ route('tasks.store') }}">
    @csrf

    <label>Task name</label>
    <input type="text" id="name" name="name" />

    <button type="submit">Save new task</button>
    <a href="{{ route('tasks.index') }}">Return to task list</a>
</form>

@endsection
