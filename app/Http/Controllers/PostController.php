<?php

namespace App\Http\Controllers;

use App\Events\ShowMessageEvent;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('user')->get();

        // event(new ShowMessageEvent($posts));

        return view('posts.index', [
            "posts" => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.addPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => ['required'],
            'description' => ['required'],
        ]);
        $post = $request->only('title', 'description');
        $post['public'] = 1;
        $post['user_id'] = auth()->user()->id;
        Post::create($post);

//        event(new ShowMessageEvent($post));

        return redirect()->route('profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::with('user')->where('id', $id)->get();
        // dd($post);
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::with('user')->find($id);
        // dd($user['description']);
        return view('posts.updatePost', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => ['required'],
            'description' => ['required'],

        ]);
        auth()->attempt($request->only("email", "password"));
        $result = Post::find($id)->update($request->all());

//        dd(Post::find($id));

        event(new ShowMessageEvent($id,'edit'));

        return redirect()->route("profile");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        event(new ShowMessageEvent($id,'delete'));

        Post::find($id)->delete();

        return redirect()->route("profile");
    }
}
