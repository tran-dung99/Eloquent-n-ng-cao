<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Repositories\CategoryRepository;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postRepository;
    protected $categoryRepository;
    public function __construct(PostRepository $postRepository, CategoryRepository $categoryRepository){
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index() {
        $posts = $this->postRepository->getAll();
        return view('post.list',compact('posts'));
    }

    public function show($id) {
        $post = $this->postRepository->getById($id);
        return view("post.detail",compact('post'));
    }

    public function create() {
        $categories = $this->categoryRepository->getAll();
        return view('post.create',compact("categories"));
    }

    public function store(Request $request) {
        $data = $request->only("title","content","user_id");
        $post = Post::create($data);
//        dd($request->category);
        $post->categories()->attach($request->category);
//        dd( $post->categories()->attach($request->category));
        return redirect()->route("posts.index");

    }

    public function delete($id) {
        $this->postRepository->delete($id);
        return redirect()->route('posts.index');
    }

    public function edit($id) {
        $categories = $this->categoryRepository->getAll();
        $post = $this->postRepository->getById($id);
        return view('post.update',compact("post","categories"));
    }

    public function update(Request  $request) {
        $this->postRepository->update($request);
        return redirect()->route("posts.index");
    }
}
