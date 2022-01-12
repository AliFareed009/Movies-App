<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class ActorViewModel extends ViewModel
{
     public $actor;
     public $credits;

    public function __construct($actor, $credits)
    {
        $this->actor =  $actor;
        $this->credits =  $credits;
    }
    public function actor()
    {
        return collect($this->actor);
    }
    public function knownmovies()
    {
        return collect($this->credits)->dump();
    }
}
