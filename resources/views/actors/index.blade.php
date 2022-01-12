@extends('layouts.main')

@section('content')

<div class="main">
    <h2 class="heading">
        Popular Actors
    </h2>

    <div class="actor-info">

    @foreach($popularActors as $actor)
    <div class="card">
            <a href="{{ route('actors.show', $actor['id']) }}">
                <img class="image" src="{{ 'https://image.tmdb.org/t/p/w235_and_h235_face' .$actor['profile_path']  }}" />
            </a>

            <div class="description">
                <a href="{{ route('actors.show', $actor['id']) }}" class="title">{{$actor['name']}}</a>
                <div class="card-rating">
                    <span>{{$actor['known_for_department']}}</span>
                </div>
            </div>
        </div>
    @endforeach
        

        
    </div>
</div>




<style>
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }
    .main {
        padding: 40px 0;
        background-color: rgb(17 24 39);
    }

    .actor-info {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    .heading {
        color: orangered;
            font-size: 25px;
            font-weight: 700;
            font-style: italic;
            padding: 10px 20px;
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
        display: flex;
        flex-direction: column;
    }
</style>
@endsection