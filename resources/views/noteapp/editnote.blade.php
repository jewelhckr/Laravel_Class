@extends('noteapp.notenav')

@section('main')
    <div class="container">
        <div class="shadow bg-secondary col-6 mx-auto p-4 m-4">
            <h2 class="text-center">Edit Note</h2>
            <form action="/display/edit/{{$note->note_id}}" method="post">
                @csrf
                <input value="{{$note->title}}" class="input form-control my-2" type="text" name="title">
                <textarea class="form-control my-2" name="content" id="" cols="60" rows="10">{{$note->content}}</textarea>
                <button type="submit" class="btn form-control bg-success">Save</button>
            </form>
        </div>
    </div>
@endsection