@extends('layouts.app')

@section('content')
{{--    @include('admin.users._nav')--}}
<ul class="nav nav-tabs mb-3">
    <li class="nav-item"><a class="nav-link" href="{{route('admin.home')}}">Dashboard</a></li>
    <li class="nav-item"><a class="nav-link active" href="{{route('admin.users.index')}}">Users</a></li>
</ul>

    <div class="text-right">
        <a class="btn btn-primary mb-3" href="{{ route('admin.users.create') }}">New User</a>
    </div>

    <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Status</td>
                    <td>Role</td>
                </tr>
            </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><a href="{{route('admin.users.show', $user)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>

{{--                    @if($user->email_verified_at)--}}
{{--                        <td class="alert-success">Verified</td>--}}
{{--                    @else--}}
{{--                        <td class="alert-danger">Not verified</td>--}}
{{--                    @endif--}}
                    <td>
                        @if($user->email_verified_at)
                            <span class="badge badge-primary px-2 py-2">Verified</span>
                        @else
                            <span class="badge badge-secondary px-2 py-2">Not verified</span>
                        @endif
                    </td>

                    <td>
                        @if($user->isAdmin())
                            <span class="badge badge-danger px-2 py-2">Admin</span>
                        @else
                            <span class="badge badge-secondary px-2 py-2">User</span>
                        @endif
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>

    {{$users->links()}}
@endsection
