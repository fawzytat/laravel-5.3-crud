@extends('layouts.master')

@section('content')

    @foreach ($users as $user)
      <li>
        {{ $user->name }}
      </li>

    @endforeach
    
@stop
