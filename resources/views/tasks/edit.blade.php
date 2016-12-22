@extends('layouts.master')

@section('content')

<h1>Edit Post  - Post  Name </h1>
<p class="lead">Edit this Post below. <a href="{{ route('tasks.index') }}">Go back to all News Posts .</a></p>
<hr>

@include('partials.alerts.errors')

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

{!! Form::model($task, [
    'method' => 'PATCH',
    'route' => ['tasks.update', $task->id]
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Update Post', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop
