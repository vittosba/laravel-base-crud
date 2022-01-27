@extends('layouts.main')

@section('content')
    <section class="container flex-grow-1">
        <h1>{{ $comic->title }}</h1>
        <h3>{{ $comic->series }}</h3>

        <div class="mb-3">
            <span class="badge bg-primary">{{ $comic->type }}</span>
            Price: {{$comic->price}}
        </div>
        <div class="mb-5">
            Sale Date: {{ $comic->sale_date }}
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
            <div class="col-md-6">
                {!! $comic->description !!}
            </div>
        </div>

    </section>
@endsection