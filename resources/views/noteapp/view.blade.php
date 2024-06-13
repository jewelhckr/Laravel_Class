@extends('noteapp.notenav')

@section('main')
    <div class="container">
        <div class="col-6 shadow-lg bg-secondary mx-auto mt-5 rounded">
            @foreach($allnotes as $notes)
            <h2 class="text-center">Note Info</h2>
            <div class="my-2 p-3 shadow rounded">
                <label class="display-6" for="">Title</label>
                <p>
                    {{$note->title}}
                </p>
            </div>
            <div class="my-2 p-3 shadow rounded">
                <label class="display-6" for="">Content</label>
                <p>
                    {{$note->content}}
                </p>
            </div>
            <div class="my-2 p-3 shadow rounded">
                <label class="display-6" for="">Date/Time</label>
                <p>
                    {{$note->time_created}}
                </p>
            </div>
        </div>
        @endforeach
    </div>
@endsection