@extends('layouts.master')

@section('content')

<h1>Welcome Home</h1>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, possimus, ullam? Deleniti dicta eaque facere, facilis in inventore mollitia officiis porro totam voluptatibus! Adipisci autem cumque enim explicabo, iusto sequi.</p>
<hr>

<a href="{{ route('tasks.index') }}" class="btn btn-info">View Posted news</a>
<a href="{{ route('tasks.create') }}" class="btn btn-primary">Add News</a
  <?php
//  $task = App\Task::find(3);  trying to test the models .. ( if the record is deleted it will show error)

  ?> <br /> <br /> <br /> <?php
//  echo $task->title;
  ?>
@stop
