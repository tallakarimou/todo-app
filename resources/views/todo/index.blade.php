@extends('master.app')

@section('content')
        <h1 class="text-center"> TodoList</h1>
        @if(count($todos)>0)
        @foreach ($todos as $todo )
        <div class="well">
            <h3> <a href="{{ route('todos.show', [$todo->id]) }}"> {{ $todo->title }} </a></h3>
            <span class="badge bg-primary"> {{ $todo->due }}</span>
        </div>

        @endforeach
        @endif
@endsection
