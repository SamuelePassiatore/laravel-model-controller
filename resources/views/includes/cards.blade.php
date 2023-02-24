@if (isset($movie))
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
@endif
