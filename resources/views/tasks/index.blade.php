{{-- TASKS - Index page --}}

@extends('layouts.app')

@section('content')
  <h1>Tasks</h1>
  <p>Hi there tasks!!!</p>
  @if(count($tasks) > 0)
    @foreach($tasks as $task)
      <div class="well">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <h3><a href="/tasks/{{$task->id}}">{{$task->title}}</a></h3>
            <p>{!!$task->description!!}</p>
            <p>Completed: {{$task->completed}}</p>
            <p>Assigned: @if($task->assignedTo_id != null) {{$task->assigned->name}} @endif</p>
            <small>by {{$task->user->name}}</small>
          </div>
        </div>
      </div>
    @endforeach
    {{-- {{$tasks->links()}} --}}
  @else
    <p>No tasks found...</p>
  @endif
@endsection
