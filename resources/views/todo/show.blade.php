@extends('master.app')

@section('content')
<h1 class="text-center"> SHOW TASK</h1>
<div class="well">
    <h2> {{ $todo->title }}</h2>
    <p>{{ $todo->body }}</p> <br>
    <span class="badge bg-primary">{{ $todo->due }}</span>
</div>


@endsection
