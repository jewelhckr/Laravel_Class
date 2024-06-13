@extends("nav")

@section("main")
<div class="section container">
    <div class="row p-3 shadow-lg col-8 mx-auto mt-5">
            <h2 class="text-center">Sign-Up</h2>
            <form class="form" action="/register" method="POST">
                @csrf
                <div class="form-group mb-2">
                    <label for="">Username:</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group mb-2">
                    <label for="">Email:</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group mb-2">
                    <label for="">Password:</label>
                    <input type="text" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <button class="btn bg-dark text-light form-control" type="submit">
                        Sign-Up
                    </button>
                </div>
                <div>
                    {{-- @if(isset($message))
                        <span class="alert alert-{{$status ? 'success' : 'danger'}}">{{$message}}</span>
                    @endif --}}
                </div>
            </form>
        </div>
    </div>
@endsection