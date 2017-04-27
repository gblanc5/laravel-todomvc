@extends('')

@foreach($tasks as $task)
     <a href="{{ route('tasks.show', ['id' => $task['id']]) }}">With Route PHP {{ $task['id'] }}</a>
     <a href="{{ url('tasks', ['id' => $task['id']]) }}">With URL {{ $task['id'] }}</a>
    {{ $task['name'] }}
    {{ $task['duration'] }}
    <br/>
@endforeach
