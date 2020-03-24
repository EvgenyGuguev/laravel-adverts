@extends('layouts.app')

@section('content')
{{--    @include('admin.users._nav')--}}
<ul class="nav nav-tabs mb-3">
    <li class="nav-item"><a class="nav-link" href="{{route('admin.home')}}">Dashboard</a></li>
    <li class="nav-item"><a class="nav-link active" href="{{route('admin.users.index')}}">Users</a></li>
</ul>

    <div class="d-flex flex-row mb-3">
        <a href="{{ route('admin.users.edit', auth()->user()) }}" class="btn btn-primary mr-1">Edit</a>
        <form method="POST" action="{{ route('admin.users.destroy', auth()->user()) }}" class="mr-1">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>
    </div>

    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <th>Id</th><td>{{ auth()->user()->id }}</td>
                <th>Name</th><td>{{ auth()->user()->name }}</td>
                <th>Email</th><td>{{ auth()->user()->email }}</td>
            </tr>

        </tbody>
    </table>

{{--    {{$users->links()}}--}}
@endsection
