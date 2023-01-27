@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row py-4">
            <div class="col-md-6 m-auto">
                <h4 class="mb-3">Editing {{$comic->title}}</h4>
                <form action="{{route('comics.update', $comic->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$comic->title}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea type="text" class="form-control" name="description">{{$comic->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" step="0.1" class="form-control" name="price" value="{{$comic->price}}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Series</label>
                        <input type="text" class="form-control" name="series" value="{{$comic->series}}">
                    </div>
                    
                    <button class="btn btn-outline-primary" type="submit">Update comic</button>
                </form>
            </div>
        </div>
    </div>
@endsection