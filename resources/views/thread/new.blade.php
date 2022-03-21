@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ action('ThreadController@create') }}">
        @csrf
    
        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">タイトル</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="body" class="col-md-4 col-form-label text-md-right">本文</label>
    
            <div class="col-md-6">
                <textarea class="form-control" name="body" value="{{ old('body') }}"></textarea>
            </div>
        </div>
    
        
    
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    作成
                </button>
            </div>
        </div>
    </form>
@endsection