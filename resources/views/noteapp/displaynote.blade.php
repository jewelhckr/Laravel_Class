@extends('noteapp.notenav')

@section('main')
    <div class="section">
        <div class="mx-auto mt-5 col-6 shadow">
            {{dd(Auth::user())}}
            <table class="table table-striped bg-secondary">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Time</th>
                        <th>Format</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allnotes as $note)
                    <tr>
                        <td>{{$note->title}}</td>
                        <td>{{$note->content}}</td>
                        <td>{{$note->time_created}}</td>
                        <td>
                            <span class="p-2">
                                <a href="/view/{{$note->note_id}}">
                                    <button class="btn btn-sm bg-secondary">view</button>
                                </a>
                                <a href="/display/edit/{{$note->note_id}}">
                                    <button class="btn btn-sm bg-warning">edit</button>
                                </a>
                                <a href="">
                                    <button class="btn btn-sm bg-danger">delete</button>
                                </a>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection