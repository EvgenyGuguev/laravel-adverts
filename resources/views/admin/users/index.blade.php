@extends('layouts.app')

@section('content')
<ul class="nav nav-tabs mb-3">
    <li class="nav-item"><a class="nav-link" href="{{route('admin.home')}}">Dashboard</a></li>
    <li class="nav-item"><a class="nav-link active" href="{{route('admin.users.index')}}">Users</a></li>
</ul>

    <div class="text-right">
        <a class="btn btn-success mb-3" href="{{ route('admin.users.create') }}">New User</a>
    </div>

{{-- Filter for Table--}}
<div class="card mb-3">
    <div class="card-header">Filter</div>
    <div class="card-body">
        <form action="?" method="GET">
            <div class="row">

                <div class="col-sm-1">
                    <div class="form-group">
                        <label for="id" class="col-form-label">ID</label>
                        <input id="id" class="form-control" name="id" value="{{ request('id') }}">
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="name" class="col-form-label">Name</label>
                        <input id="name" class="form-control" name="name" value="{{ request('name') }}">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <input id="email" class="form-control" name="email" value="{{ request('email') }}">
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="role" class="col-form-label">Role</label>
                        <select id="role" class="form-control" name="role">
                            <option value=""></option>
                            @foreach ($roles as $value => $label)
                                <option value="{{ $value }}"{{ $value === request('role') ? ' selected' : '' }}>{{ $label }}</option>
                            @endforeach;
                        </select>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="col-form-label">&nbsp;</label><br />
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
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
