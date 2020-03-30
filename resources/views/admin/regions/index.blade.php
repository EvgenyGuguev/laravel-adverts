@extends('layouts.app')

@section('content')
    @include('admin.regions.nav')

    <div class="text-right">
        <a class="btn btn-success mb-3" href="{{ route('admin.regions.create') }}">New Region</a>
    </div>

   @include('admin.regions.list', ['regions' => $regions])
@endsection
