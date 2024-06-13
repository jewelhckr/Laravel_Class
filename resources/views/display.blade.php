@extends('nav')

@section('main')
    <div class="container">
        {{dd(Auth::user())}}
        <div class="row col-8 shadow p-3 rounded mt-5 mx-auto">
            <h2 class="text-center">User Table</h2>
            <table class="table table-dark table-striped-columns">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach($allusers as $user) --}}
                        <tr>
                            <td>{{ $users->id }}</td>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->email }}</td>
                            <td>{{ $users->updated_at }}</td>
                        </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
