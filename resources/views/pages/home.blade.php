@extends('layouts.main-layout')

@section('content')
    <section id="cards">
        <div class="container">
            <h2>
            CURRENT SERIES 
            </h2>
            <div class="cards_container">
                @foreach ($comics as $comic)
                    <div class="card">
                        <a href="{{ route('test') }}">
                            <img src="{{ $comic["thumb"] }}" :alt="{{ $comic["series"] }}">
                            <h4>
                                {{ $comic["series"] }}
                            </h4>
                        </a>
                    </div>
                @endforeach
            </div>
            <h5>
                <a href="#">
                    LOAD MORE
                </a>
            </h5>
        </div>
    </section>
@endsection