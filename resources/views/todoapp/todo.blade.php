@extends('nav')

@section('main')
    <div class="container">
        <div class="row shadow-lg mt-5 mx-auto p-3">
            <h2 class="text-center">Todo Form</h2>
            <form action="displayTodo" method="post">
                @csrf
                <div class="form-group mb-2">
                    <label for="">Todo Title:</label>
                    <input type="text" class="form-control" name="todo_title" placeholder="...">
                </div>
                <div class="form-group mb-2">
                    <label for="">Todo Content:</label>
                    <textarea class="form-control" name="todo" id="" cols="40" rows="10" placeholder="Todo content..."></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-dark text-light form-control" type="submit">
                        Add Todo
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection