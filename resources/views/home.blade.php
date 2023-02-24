@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <section class="movies">
        <div class="container">
            <h1 class="text-center py-3">Home</h1>
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-3">
                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header">
                                <h5>{{ $movie->title }}</h5>
                            </div>
                            <div class="card-body">
                                <div class="card-title">{{ $movie->original_title }}</div>
                                <div>{{ $movie->nationality }}</div>
                                <div>{{ $movie->date }}</div>
                                <div>{{ $movie->vote }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
