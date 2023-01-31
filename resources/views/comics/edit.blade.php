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
                        @include('partials.input_form', [
                            'input_name' => 'text',
                            'label' => 'Title',
                            'type' => 'text',
                            'old_value' => $comic->title
                        ])
                    </div>
                    <div class="mb-3">
                        @include('partials.input_form', [
                            'input_name' => 'description',
                            'label' => 'Description',
                            'type' => 'textarea',
                            'old_value' => $comic->description
                        ])
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            @include('partials.input_form', [
                            'input_name' => 'price',
                            'label' => 'Price',
                            'type' => 'number',
                            'old_value' => $comic->price
                        ])
                        </div>
                        <div class="col">
                            @include('partials.input_form', [
                            'input_name' => 'series',
                            'label' => 'Series',
                            'type' => 'text',
                            'old_value' => $comic->series
                        ])
                        </div>
                    </div>
                    <div class="mb-3">
                        @include('partials.input_form', [
                            'input_name' => 'thumb',
                            'label' => 'Img Url',
                            'type' => 'text',
                            'old_value' => $comic->thumb
                        ])
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            @include('partials.input_form', [
                            'input_name' => 'sale_date',
                            'label' => 'Sale date',
                            'type' => 'date',
                            'old_value' => $comic->sale_date
                        ])
                        </div>
                        <div class="col">
                            @include('partials.input_form', [
                            'input_name' => 'type',
                            'label' => 'Type',
                            'type' => 'text',
                            'old_value' => $comic->type
                        ])
                        </div>
                    </div>
                    
                    <button class="btn btn-outline-primary" type="submit">Update comic</button>
                </form>
            </div>
        </div>
    </div>
@endsection