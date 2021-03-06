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
                    <button class="btn btn-danger btn_delete text-white">DELETE</button>
                </div>
            </div>
        </div>
        <div class="overlay d-none">
            <div class="confirmation">
                <h3>Sei sicuro di voler eliminare il post?</h3>
                <div class="d-flex justify-content-center gap-2">
                    <button id="btn-no" class="btn btn-success mb-2">NO</button>
                    <form class="form" action="{{ route('admin.posts.destroy', $post->slug) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger mb-2">ELIMINA</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
