@extends('layouts.app')

@section('content')
{{--    @include('admin.users._nav')--}}
<ul class="nav nav-tabs mb-3">
    <li class="nav-item"><a class="nav-link" href="{{route('admin.home')}}">Dashboard</a></li>
    <li class="nav-item"><a class="nav-link active" href="{{route('admin.users.index')}}">Users</a></li>
</ul>

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

{{--    {{$users->links()}}--}}
@endsection
