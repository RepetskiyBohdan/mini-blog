@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Show category</h3>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary mb-3 px-4" href="{{route('categories.index')}}">Back</a>
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
                                <th>{{$category->id}}</th>
                                <td>{{$category->title}}</td>
                                <td>{{$category->created_at->diffForHumans()}}</td>
                                <td>{{$category->updated_at->diffForHumans()}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
