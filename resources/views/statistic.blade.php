@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Statistics</h3>
                    </div>
                    <div class="card-body d-flex justify-content-around">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Total posts :  {{count($posts)}}</h5>
                                <a href="{{route('posts.index')}}" class="btn btn-primary">Review</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Total tags :  {{count($tags)}}</h5>
                                <a href="{{route('tags.index')}}" class="btn btn-primary">Review</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Total categories :  {{count($categories)}}</h5>
                                <a href="{{route('categories.index')}}" class="btn btn-primary">Review</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
