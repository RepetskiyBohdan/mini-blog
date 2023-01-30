@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>All tags</h3>
                </div>
                <div class="card-body">
                    <a href="{{route('tags.create')}}" class="btn btn-primary mb-3 px-4">Create</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                        <tr>
                            <th>{{$tag->id}}</th>
                            <td>{{$tag->title}}</td>
                            <td>
                                <a class="nav-link btn btn-info w-25 mb-2" href="{{route('tags.show', $tag->id)}}">Show</a>
                                <a class="nav-link btn btn-success w-25 mb-2" href="{{route('tags.edit', $tag->id)}}">Edit</a>
                                <form action="{{route('tags.destroy', $tag->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="nav-link btn btn-danger w-25 mb-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div>{{ $tags->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
