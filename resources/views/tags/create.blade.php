@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Create tag</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('tags.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label  class="form-label">Enter name tag</label>
                                <input type="text" class="form-control" name="title">
                                @error('title')
                                    <div class="text-danger">The field must be filled</div>
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
