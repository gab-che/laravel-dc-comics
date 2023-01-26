@extends('layouts.app')

@section('main')
    <div class="main_section py-3">
        <div class="container">
            <h3>current series</h3>
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