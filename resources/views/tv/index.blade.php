@extends('layouts.main')

@section('content')

<div class="main">
    <div class="popular">
        <h2 class="heading">
            Popular Tv Shows
        </h2>
        <div class="popular-movies">
            @foreach ($popularTv as $tvshow)
            <x-tv-card :tvshow='$tvshow' />
            @endforeach
        </div>
    </div>

    <div class="nowplaying">
        <h2 class="heading">
            Top Rated Shows
        </h2>

        <div class="nowplaying-movies">
        @foreach ($topRatedTv as $tvshow)
            <x-tv-card :tvshow='$tvshow' />
            @endforeach
        </div>
    </div>
</div>

<style>
    .main {
        padding: 40px 0;
        background-color: rgb(17 24 39);
    }

    .heading {
        color: orangered;
        font-size: 25px;
        font-weight: 700;
        font-style: italic;
        padding: 10px 20px;
    }

    .popular-movies,
    .nowplaying-movies {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }
</style>
@endsection