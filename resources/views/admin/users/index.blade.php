@extends('layouts.app')

@section('content')
    @include('admin.users._nav')

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
        </thead>
    <tbody>

        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><a href="{{route('admin.users.show', $user)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
            </tr>

        @endforeach

        </tbody>
    </table>

    {{$users->links()}}
@endsection
