<?php
namespace App\Repositories;
use App\Models\Post;

interface PosiIntferface{
    // this is the array type ,ethod 
    public function create(array $data):Post;

}
?>