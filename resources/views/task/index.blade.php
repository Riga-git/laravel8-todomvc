
@extends('layout')

@section('content')
<h1>TodoMVC</h1>

<a href="{{ route('tasks.create') }}" class="btn">New task</a>

<table class="striped highlight">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->name }}</td>
            <td>
                <a href="{{ route('tasks.show', ['task' => $task->id]) }}" class="btn left">Show</a>
                <form method="POST" action="{{ route('tasks.destroy', ['task' => $task->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn waves-effect waves-light red left" type="submit" name="action">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
