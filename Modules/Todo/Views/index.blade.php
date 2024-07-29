<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
</head>
<body>
    <h1>Todo List</h1>
    <form action="/todo/create" method="POST">
        @csrf
        <input type="text" name="title" required>
        <button type="submit">Add</button>
    </form>
    <ul>
        @foreach($todos as $todo)
            <li>
                {{ $todo->title }}
                <form action="/todo/update/{{ $todo->id }}" method="POST" style="display: inline;">
                    @csrf
                    <input type="text" name="title" value="{{ $todo->title }}" required>
                    <button type="submit">Update</button>
                </form>
                <form action="/todo/delete/{{ $todo->id }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
