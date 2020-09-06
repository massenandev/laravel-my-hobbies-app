@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Tag</div>
                    <div class="card-body">
                        <form action="/tag/{{$tag->id}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control {{ $errors->has('name') ? 'border-danger' : '' }}" id="name" name="name" value="{{$tag->name ?? old('name')}}">
                                <small class="form-text text-danger">{!! $errors->first('name') !!}</small>
                            </div>
                            <div class="form-group">
                                <label for="description">Style</label>
                                <textarea class="form-control" {{ $errors->has('style') ? 'border-danger' : '' }}id="style" name="style" rows="5">{{$tag->style ?? old('style')}}</textarea>
                                <small class="form-text text-danger">{!! $errors->first('style') !!}</small>
                            </div>
                            <input class="btn btn-primary mt-4" type="submit" value="Edit Tag">
                        </form>
                        <a class="btn btn-primary float-right" href="/tag"><i class="fas fa-arrow-circle-up"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
