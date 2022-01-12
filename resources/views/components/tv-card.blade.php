<div>
    <div class="card">
        <a href="{{ route('tv.show', $tvshow['id']) }}">
            <img class="image" src="{{ 'https://image.tmdb.org/t/p/w300/' .$tvshow['poster_path']  }}" />
        </a>

        <div class="description">
            <a href="{{ route('tv.show', $tvshow['id']) }}" class="title">{{ $tvshow['name'] }}</a>
            <div class="card-rating">
                <span>ratings</span>
                <span>{{ $tvshow['vote_average'] * 10 . '%' }}</span>
                <span>|</span>
                <span>{{ \Carbon\Carbon::parse($tvshow['first_air_date'])->format('M d, Y')}}</span>
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