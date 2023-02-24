@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <section class="movies">
        <div class="container">
            <h1 class="text-center py-3">Home</h1>
            <div class="row">
                @foreach ($movies as $movie)
                    @include('includes.cards')
                @endforeach
            </div>
        </div>

    </section>
@endsection
