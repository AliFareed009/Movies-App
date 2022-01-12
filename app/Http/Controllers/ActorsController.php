<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ActorsController extends Controller
{
    public function index()
    {

        $popularActors = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/person/popular')
            ->json()['results'];

        //  return view('actors.index');

    //    dump($popularActors);

       return view('actors.index',compact('popularActors')) ;
          
    }

    public function show($id)
    {
        $actor = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/person/'.$id)
        ->json();

        // dump($actor);
        return view('actors.show',compact('actor')) ;
          
    }

 
}
