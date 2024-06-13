@extends('noteapp.notenav')

@section('main')
    <div class="container">
        <div class="shadow bg-secondary col-6 mx-auto p-4 m-4">
            <h2 class="text-center">Note App</h2>
            <form action="noteprocess" method="post" enctype="multipart/form-data">
                @csrf
                <input class="input form-control my-2" type="text" name="title" placeholder="Note title...">
                <input class="form-control my-2" type="file" name="image" id="">
                <textarea class="form-control my-2" name="content" id="" cols="60" rows="10" placeholder="Note content..."></textarea>
                <button type="submit" class="btn form-control bg-dark text-light">Create Note</button>
            </form>
        </div>
    </div>
@endsection