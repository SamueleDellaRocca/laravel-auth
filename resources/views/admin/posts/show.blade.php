@extends('layouts.app')

@section('pagetitle')
    Post View
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-6">
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->content }}</p>
                <div class="d-flex justify-content-end w-100 mb-3 gap-3">
                    <a class="btn btn-success text-white" href="{{ route('admin.posts.edit', $post->slug) }}">EDIT</a>
                    <form action="{{ route('admin.posts.destroy', $post->slug) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger text-white">DELETE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
