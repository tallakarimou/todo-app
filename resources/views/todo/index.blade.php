@extends('master.app')

@section('content')
        <h1 class="text-center"> TodoList</h1>
        {{-- @include('master.message') --}}
        <button class="btn btn-success">
            <a href="{{ route('todos.create') }}" class="text-white py-5"> ADD TASK</a>
        </button>
        <br>
        @if(count($todos)>0)
        @foreach ($todos as $todo )
        <div class="well">
            <h3> <a href="{{ route('todos.show', [$todo->id]) }}"> {{ $todo->title }} </a></h3>
            <p> {{ $todo->body }}</p>
            <span class="badge bg-primary"> {{ $todo->due }}</span>
            <button class="btn btn-default">
                <a href="{{ route('todos.edit',[$todo->id]) }}" class="text-white"> EDIT</a>
            </button>
            <button class="btn btn-secondary">
                <a href="{{ route('todos.show',[$todo->id]) }}" class="text-white"> SHOW</a>
            </button>

            <form method="POST" action="{{ route('todos.show',[$todo->id]) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"> <span>  DELETE </span> </button>
            </form>

        </div>

        @endforeach
        @endif
@endsection
