<?php
namespace App\Repositories;
use App\Models\Post;
// app/Repositories/PosiIntferface.php
class PostRepo implements PosiIntferface
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