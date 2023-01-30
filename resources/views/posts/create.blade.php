@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Create post</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label  class="form-label">Enter name post</label>
                                <input type="text" class="form-control" name="title" value="{{old('title')}}">
                                @error('title')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Enter content post</label>
                                <textarea class="form-control" name="content" id="content" cols="10" rows="10">{{old('content')}}</textarea>
                                @error('content')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
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
                                {{$category->id == old('category_id') ? ' selected' : ''}}
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
                                        {{is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? 'selected' : ''}}
                                            value="{{$tag->id}}">{{$tag->title}}</option>
                                    @endforeach
                                </select>
                                @error('tag_ids')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
