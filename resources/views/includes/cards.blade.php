@if (isset($movie))
    <div class="col-3">
        <div class="card border-dark bg-dark mb-3 colored" style="max-width: 18rem;">
            <div class="card-header">
                <h5 class="m-0">{{ $movie->title }}</h5>
            </div>
            <div class="card-body">
                <div class="card-title"><strong>Original title : </strong>{{ $movie->original_title }}</div>
                <div class="pb-2"><strong>Nationality : </strong>{{ ucwords($movie->nationality) }}</div>
                <div class="pb-2"><strong>Year : </strong>{{ date('Y', strtotime($movie->date)) }}</div>
                <div class="pb-2"><strong>Vote : </strong>{{ $movie->vote }}</div>
            </div>
        </div>
    </div>
@endif
