@extends('layouts.app')

@section('main')
    <div class="main_section py-3">
        <div class="container">
            <div class="d-flex justify-content-between">
                <h3 class="blue_velvet">current series</h3>
                <a href="{{route('comics.create')}}" class="btn blue_velvet d-flex align-items-center">add comic</a>
            </div>
            <div class="row row-cols-6">
                @foreach ($comics as $comic)
                    <div class="col">
                        <a href="{{route('comics.show', $comic->id)}}" target="_blank">
                            {{-- card component --}}
                            @include('partials.card', ['comic' => $comic])
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection