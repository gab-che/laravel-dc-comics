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
                        <textarea type="text" class="form-control" name="description"></textarea>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Price</label>
                            <input type="number" step="0.1" class="form-control" name="price">
                        </div>
                        <div class="col">
                            <label class="form-label">Series</label>
                            <input type="text" class="form-control" name="series">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Img Url</label>
                        <input type="text" class="form-control" name="thumb">
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Sale date</label>
                            <input type="text" class="form-control" name="sale_date">
                        </div>
                        <div class="col">
                            <label class="form-label">Type</label>
                            <input type="text" class="form-control" name="type" placeholder="graphic novel, comic book...">
                        </div>
                    </div>
                    
                    <button class="btn btn-outline-primary" type="submit">Save comic</button>
                </form>
            </div>
        </div>
    </div>

@endsection