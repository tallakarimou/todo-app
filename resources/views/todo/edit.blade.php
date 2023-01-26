@extends('master.app')

@section('content')
<h1 class="text-center"> EDIT TASK</h1>

<form action="{{ route('todos.store') }}" method="POST">
@csrf
<div class="form-group">
    <label for="title">title</label>
    <input id="title" class="form-control" type="text" name="title" value="{{ $todo->title }}">
</div>

.<div class="form-group">
    <label for="body">body</label>
    <textarea name="body" id="body" cols="150" rows="10" class="form-control"> {{ $todo->body }} </textarea>
</div>

.<div class="form-group">
    <label for="due">due</label>
    <input id="due" class="form-control" type="text" name="due" value= "{{ $todo->due }}">
</div>

    <button type="submit"> ok </button>
    <button type="reset" class="pull-right btn-danger"> Cancel </button>



</form>

@endsection
