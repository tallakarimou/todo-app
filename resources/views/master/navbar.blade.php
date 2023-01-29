<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">TodoList</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('todos') ? 'active':'' }}"><a href="{{ route('todos.index') }}">Home</a></li>
        <li class="{{ Request::is('todos/create') ? 'active':'' }}"><a href="{{ route('todos.create') }}" >ADD NEW TASK</a></li>
      </ul>
    </div>
  </nav>
