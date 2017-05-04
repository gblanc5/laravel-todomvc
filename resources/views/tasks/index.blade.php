
@foreach($tasks as $task)
     
     {{-- <a href="{{ url('tasks', ['id' => $task['id']]) }}">With URL {{ $task['id'] }}</a> --}}
    {{ $task->id }}
    <a href="{{ route('tasks.show',  $task) }}">{{ $task->name }}</a>
    {{ $task['done'] }}
    {{-- {{ $task['done'] }} --}}
    <br/>
@endforeach
