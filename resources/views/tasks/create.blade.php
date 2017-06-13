{{-- TASKS - Create new --}}

@extends('layouts.app')

@section('content')
  <h1>Create new Task</h1>
  {!! Form::open(['action' => 'TasksController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
      {{Form::label('title', 'Title')}}
      {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter Title...'])}}
    </div>
    <div class="form-group">
      {{Form::label('description', 'Description')}}
      {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Enter stuff...'])}}
    </div>
    <div class="form-group">
      {{Form::label('dueDate', 'Title')}}
      {{Form::date('dueDate', \Carbon\Carbon::now())}}
    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}

@endsection
