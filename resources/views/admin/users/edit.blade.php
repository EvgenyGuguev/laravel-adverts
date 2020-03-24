@extends('layouts.app')

@section('content')
{{--    @include('admin.users._nav')--}}
<ul class="nav nav-tabs mb-3">
    <li class="nav-item"><a class="nav-link" href="{{route('admin.home')}}">Dashboard</a></li>
    <li class="nav-item"><a class="nav-link active" href="{{route('admin.users.index')}}">Users</a></li>
</ul>

    <form method="POST" action="{{ route('admin.users.update', auth()->user()) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name" class="col-form-label">Name</label>
            <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', auth()->user()->name) }}" required>
            @if ($errors->has('name'))
                <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <label for="email" class="col-form-label">E-Mail Address</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email', auth()->user()->email) }}" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong></span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </form>
@endsection
