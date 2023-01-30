@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Show tag</h3>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary mb-3 px-4" href="{{route('tags.index')}}">Back</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Date of creation</th>
                            <th>Update date</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>{{$tag->id}}</th>
                                <td>{{$tag->title}}</td>
                                <td>{{$tag->created_at->diffForHumans()}}</td>
                                <td>{{$tag->updated_at->diffForHumans()}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
