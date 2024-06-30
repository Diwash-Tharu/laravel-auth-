<?php

namespace App\Http\Controllers;

use App\Repositories\PosiIntferface;
use Illuminate\Http\Request;


class PostController extends Controller
{
    //
    public function __construct(public PosiIntferface $postRepo)
    {
        
    }
    public function store(){
        dd($this->postRepo);
    }
  
}
