@extends('nav')

@section('main')
    <div class="container">
        <div class="row col-8 shadow p-3 rounded mt-5 mx-auto">
            <h2 class="text-center">Todo Table</h2>
            <table class="table table-dark table-striped-columns">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Todo item</th>
                        <th scope="col">Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alltodos as $todo)
                        <tr>
                            <td>{{ $todo->id }}</td>
                            <td>{{ $todo->todo_title }}</td>
                            <td>{{ $todo->todo }}</td>
                            <td>{{ $todo->time_created }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
