@extends('layouts.app')

@section('content')
    @include('admin.adverts.categories.nav')

    <div class="text-right">
        <a class="btn btn-success mb-3" href="{{ route('admin.adverts.categories.create') }}">New Category</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <td>Name</td>
            <td>Slug</td>
        </tr>
        </thead>

        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>
                    @for ($i = 0; $i < $category->depth; $i++) &mdash; @endfor
                    <a href="{{ route('admin.adverts.categories.show', $category) }}">{{ $category->name }}</a>
                </td>
                <td>{{$category->slug}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
