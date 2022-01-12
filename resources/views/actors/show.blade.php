@extends('layouts.main')

@section('content')

<div class="main">

    <div class="actor-info">
        <div class="left">
            <img class="banner" src="{{ 'https://image.tmdb.org/t/p/w300/' .$actor['profile_path']  }}" alt="Image" />
        </div>

        <div class="right">
            <h2 class="heading">
                {{ $actor['name'] }}
            </h2>
            <div class="online gray">
                <span class="">{{ $actor['birthday'] }} 
                    </span>
                <span class="gap">|</span>
                <span>{{ $actor['place_of_birth'] }}</span>
            </div>
            <p class="white">
                {{ $actor['biography'] }}
            </p>
        </div>
    </div>
</div>
@endsection



<style>
    .main {
        height: 95vh;
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

    .actor-info {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        padding: 40px 20px;
    }
      .movie-cast {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin: 20px 30px;
    }

    .banner {
        min-width: 250px;
    }
</style>