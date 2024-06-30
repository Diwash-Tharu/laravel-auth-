<?php

namespace App\Http\Controllers;

use App\Repositories\PosiInterface;
use Illuminate\Http\Request;


class PostController extends Controller
{
    //
    public function __construct(public PosiInterface $postRepo)
    {
        
    }
    public function store(){
        dd($this->postRepo);
    }
  
}
