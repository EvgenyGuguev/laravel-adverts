@extends('layouts.app')

@section('content')
    @include('cabinet.profile.nav')

    <div>
        <a href="{{ route('cabinet.profile.edit') }}" class="btn btn-primary mb-3">Edit</a>
    </div>

    <table class="table table-bordered">
        <tbody>
            <tr>
                <td>First Name</td><td>{{ $user->name }}</td>
            </tr>

            <tr>
                <td>Last Name</td><td>{{ $user->last_name }}</td>
            </tr>

            <tr>
                <td>Email</td><td>{{ $user->email }}</td>
            </tr>
        </tbody>
    </table>

@endsection
