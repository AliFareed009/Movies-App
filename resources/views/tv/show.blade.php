@extends('layouts.main')

@section('content')
<div class="main">

    <div class="tvshow-info">
        
        <div class="left">
            <img class="banner" src="{{ 'https://image.tmdb.org/t/p/w500/' .$tvshow['poster_path']  }}" alt="Image" />
        </div>

        <div class="right">
            <h2 class="heading">
                {{ $tvshow['name'] }}
            </h2>
            <div class="online gray">
                <span class="">{{ $tvshow['vote_average'] * 10 . '%' }}</span>
                <span class="gap">|</span>
                <span>{{ $tvshow['first_air_date'] }}</span>
            </div>
            <p class="white">
                {{ $tvshow['overview'] }}
            </p>

            <div class="margin">
                <h4 class="heading">Created By</h4>
                <div class="online">
                    @foreach ($tvshow['created_by'] as $crew)
                    <div>
                        <div class="white crew"> {{ $crew['name'] }} </div>
                        <div class="gray crew">Creator</div>
                    </div>
                @endforeach
                </div>
            </div>

            @if (count($tvshow['videos']['results']) > 0)
            <div class="margin">
                <a href="https://youtube.com/watch?v={{ $tvshow['videos']['results'][0]['key'] }}">
                    <button class="trailer">
                        <span>Play trailer</span>
                    </button>
                </a>
            </div>
            @endif
        </div>

    <div class="cast">
        <h2 class="heading">Cast</h2>
        <div class="tvshow-cast">
            @foreach ($tvshow['credits']['cast'] as $cast)
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

    <div class="tvshow-images">
        <div class="">
            <h2 class="heading">Images</h2>
            <div class="tvshow-images">
                @foreach ($tvshow['images']['backdrops'] as $image)
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

    .tvshow-info {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        padding: 40px 20px;
    }

    .tvshow-images,
    .tvshow-cast {
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