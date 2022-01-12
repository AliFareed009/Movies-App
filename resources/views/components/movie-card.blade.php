<div>
    <div class="card">
        <a href="{{ route('movies.show', $movie['id']) }}">
            <img class="image" src="{{ 'https://image.tmdb.org/t/p/w300/' .$movie['poster_path']  }}" />
        </a>

        <div class="description">
            <a href="{{ route('movies.show', $movie['id']) }}" class="title">{{ $movie['title'] }}</a>
            <div class="card-rating">
                <span>ratings</span>
                <span>{{ $movie['vote_average'] * 10 . '%' }}</span>
                <span>|</span>
                <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
            </div>
        </div>
    </div>
</div>

<style>
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    .card {
        width: 300px;
        height: auto;
        margin-top: 50px;
        background-color: rgb(17 24 39);
        margin: 0 10px;
        margin-top: 30px;
    }

    .description a {
        color: white;
        margin-top: 10px;
        font-size: 20px;
    }

    .description a:hover {
        color: gray;
    }

    .card-rating span {
        color: gray;
    }
</style>