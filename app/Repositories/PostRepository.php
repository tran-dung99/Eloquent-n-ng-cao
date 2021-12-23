<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Impl\PostRepositoryInterface;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    public function __construct(Post $post)
    {
        $this->model = $post;
    }

    public function store($request)
    {
//      $data = $request->only("title","content");
//      $post =Post::create($data);
//      return $post->categories()->attach($request->category);
    }


    public function update($request)
    {
        $data = $request->only("title","co.ntent","user_id");
        $post = Post::findOrFail($request->id);
        $post->update($data);
        $post->categories()->sync($request->category);

    }
}
