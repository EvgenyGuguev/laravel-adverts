@extends('layouts.app')

@section('content')
{{--    @include('admin.users._nav')--}}

<ul class="nav nav-tabs mb-3">
    <li class="nav-item"><a class="nav-link" href="{{route('admin.home')}}">Dashboard</a></li>
    <li class="nav-item"><a class="nav-link active" href="{{route('admin.users.index')}}">Users</a></li>
</ul>

    <div class="d-flex flex-row mb-3">
        <a href="{{ route('admin.users.edit', $user ?? '') }}" class="btn btn-primary mr-1">Edit</a>
        <form method="POST" action="{{ route('admin.users.destroy', $user ?? '') }}" class="mr-1">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>

        @if($user->email_verified_at == null)
        <form method="POST" action="{{ route('admin.users.verify', $user) }}" class="mr-1">
            @csrf
            <button class="btn btn-success mr-1">Verify</button>
        </form>
        @endif
    </div>

    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <th>Id</th><td>{{$user->id}}</td>
            </tr>
            <tr>
                <th>Name</th><td>{{$user->name}}</td>
            </tr>
            <tr>
                <th>Email</th><td>{{$user->email}}</td>
            </tr>
            <tr>
                <th>Status</th>
                @if($user->email_verified_at)
                <td>Verified</td>
                @else
                <td>Not verified</td>
                @endif
            </tr>
        </tbody>
    </table>

@endsection