<?php
namespace App\Repositories;
use App\Models\Post;

class PostRepo implements PosiInterface
{
    public function __construct(Private Post $model)
    {

    }
    public function create($data):Post{
       $post= $this->model->create($data);
        // return 'Post created';
        return $post;
    }
}
?>