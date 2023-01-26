@extends('layouts.app')

@section('main')

    <div class="container">
        <div class="row py-4">
            <div class="col-md-6 m-auto">
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Series</label>
                        <input type="text" class="form-control" name="series">
                    </div>

                    <button class="btn btn-outline-primary" type="submit">Save comic</button>
                </form>
            </div>
        </div>
    </div>

@endsection