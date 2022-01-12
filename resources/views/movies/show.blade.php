@extends('layouts.main')

@section('content')
<div class="main">

    <div class="movie-info">
        
        <div class="left">
            <img class="banner" src="{{ 'https://image.tmdb.org/t/p/w500/' .$movie['poster_path']  }}" alt="Image" />
        </div>

        <div class="right">
            <h2 class="heading">
                {{ $movie['title'] }}
            </h2>
            <div class="online gray">
                <span class="">{{ $movie['vote_average'] * 10 . '%' }}</span>
                <span class="gap">|</span>
                <span>{{ $movie['release_date'] }}</span>
            </div>
            <p class="white">
                {{ $movie['overview'] }}
            </p>

            <div class="margin">
                <h4 class="heading">Featured Cast</h4>
                <div class="online">
                    @foreach ($movie['credits']['crew'] as $crew)
                    @if ($loop->index < 2) <div>
                        <div class="white crew"> {{ $crew['name'] }} </div>
                        <div class="gray crew">{{ $crew['job'] }}</div>
                                            </div>
                @endif
                @endforeach
                </div>
            </div>

            @if (count($movie['videos']['results']) > 0)
            <div class="margin">
                <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}">
                    <button class="trailer">
                        <span>Play trailer</span>
                    </button>
                </a>
            </div>
            @endif
        </div>

    <div class="cast">
        <h2 class="heading">Cast</h2>
        <div class="movie-cast">
            @foreach ($movie['credits']['cast'] as $cast)
            @if($loop->index < 5)
            <div class="gap">
                <a href="{{ route('actors.show', $cast['id']) }}">
                    <img src="{{ 'https://image.tmdb.org/t/p/w300/' .$cast['profile_path']  }}" alt="Image" />
                </a>
                <div>
                    <a href="{{ route('actors.show', $cast['id']) }}" class="white">{{ $cast['name'] }}</a>
                    <div class="gray">
                        <span>{{ $cast['character'] }}</span>
                    </div>
                </div>
            </div>
        @endif
        @endforeach
        </div>
    </div>

    <div class="movie-images">
        <div class="">
            <h2 class="heading">Images</h2>
            <div class="movie-images">
                @foreach ($movie['images']['backdrops'] as $image)
                @if($loop->index < 9)
                <div>
                    <a href="#">
                        <img class="margin" src="{{ 'https://image.tmdb.org/t/p/w500/' .$image['file_path']  }}" alt="Image" />
                    </a>
                </div>
            @endif
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection



<style>
    .main {
        background-color: rgb(17 24 39 );
    }
    .left {
        width: auto;
    }

    .right {
        width: 70%;
    }

    .gap {
        margin: 0 10px;
    }

    .margin {
        margin-top: 20px;
    }

    .online {
        display: flex;
    }

    .white {
        color: white;
        margin-top: 10px;
        font-size: 20px;
    }

    .gray {
        color: gray;
        margin-top: 5px;
        margin-bottom: 10px;
        font-size: 15px;
    }

    .heading {
        color: white;
        font-size: 35px;
        font-weight: 700;
        font-style: italic;
        padding: 10px 20px;
    }

    .movie-info {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        padding: 40px 20px;
    }

    .movie-images,
    .movie-cast {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin: 20px 30px;
    }

    .banner {
        min-width: 250px;
    }

    .trailer {
        background: orangered;
        padding: 20px;
        border-radius: 20px;
        font-size: 20px;
    }
</style>