@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>All posts</h3>
                </div>
                <div class="card-body">
                    <a href="{{route('posts.create')}}" class="btn btn-primary mb-3 px-4">Create</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <th>{{$post->id}}</th>
                            <td>{{$post->title}}</td>
                            <td>
                                <a class="nav-link btn btn-info w-25 mb-2" href="{{route('posts.show', $post->id)}}">Show</a>
                                <a class="nav-link btn btn-success w-25 mb-2" href="{{route('posts.edit', $post->id)}}">Edit</a>
                                <form action="{{route('posts.destroy', $post->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="nav-link btn btn-danger w-25 mb-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                        <div>{{ $posts->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
