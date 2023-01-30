@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Show post</h3>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary mb-3 px-4" href="{{route('posts.index')}}">Back</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Tags</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>{{$post->id}}</th>
                                <td>{{$post->title}}</td>
                                <td>{{$post->content}}</td>
                                <td><img src="{{url('storage/' , $post->image)}}" alt="image" width="200px"></td>
                                <td>{{$post->categories->title}}</td>
                                <td>
                                    @foreach($tags as $tag)
                                    <div class="btn btn-sm btn-primary">
                                        {{$tag->title}}
                                    </div>
                                    @endforeach
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
