@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit post</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label  class="form-label">Enter name post</label>
                            <input type="text" class="form-control" name="title" value="{{$post->title}}">
                            @error('title')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Enter content post</label>
                            <textarea class="form-control" name="content" id="content" cols="10" rows="10">{{$post->content}}</textarea>
                            @error('content')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="w-25">
                                <img src="{{url('storage/' .  $post->image)}}" alt="image" class="w-50"  >
                            </div>
                            <label  class="form-label">Chose file</label>
                            <input class="form-control" type="file" name="image">
                            @error('image')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <select name="category_id" class="form-select">
                                <option selected disabled>Choose category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                        {{$category->id == $post->category_id ? ' selected' : ''}}
                                    >{{$category->title}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Chose tag</label>
                            <select class="select-multiple form-select" name="tag_ids[]" multiple="multiple">
                                @foreach($tags as $tag)
                                    <option
                                        {{is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : ''}}
                                        value="{{$tag->id}}">{{$tag->title}}</option>
                                @endforeach
                            </select>
                            @error('tag_ids')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
