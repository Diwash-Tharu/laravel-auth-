<?php
namespace App\Repositories;
use App\Models\Post;

interface PosiInterface{
    // this is the array type ,ethod 
    public function create(array $data):Post;

}
?>