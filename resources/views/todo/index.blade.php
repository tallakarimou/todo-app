<h1> TodoList</h1>
@if(count($todos)>0)
@foreach ($todos as $todo )
<div class="well">
    <h3>{{ $todo->title }}</h3>
    <span class="label label-danger"> {{ $todo->due }}</span>
</div>

@endforeach
@endif

