<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = session('posts', []);
        $header= [
            'id'=>'ID',
            'title'=>  'Title',
            'postedBy'=>  'Posted By',
            'created_at'=> 'Created at',
            'action'=>'Action'
        ];

        return view('posts.index',['posts'=>$posts,'header'=>$header]);
    }

    public function show ($id){

        $posts = session('posts', []);
        $post = $posts[$id] ?? null;
        if (!$post) {
            abort(404);
        }
        return view('posts.show',['post'=>$post]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $posts = session('posts', []);
        if (empty($posts)) {
            $newId = 1;
        } else {
            $lastKey = array_key_last($posts);
            $newId = $lastKey + 1;
        }

        $posts[$newId] = [
            'id' => $newId,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'postedBy' => $request->input('creator'),
            'created_at' => now(),
        ];
//        dd($newId);
        session(['posts' => $posts]);
       return  to_route('posts.index');
        return view('posts.create');
    }

    public function edit($id){

        $posts = session('posts', []);
        $post = $posts[$id] ?? null;
//        dd($post);
        if (!$post) {
            abort(404);
        }
            return view('posts.edit',['post'=>$post]);
    }

    public function update(Request $request, $id){
        $posts = session('posts', []);

        if (!isset($posts[$id])) {
            abort(404);
        }

        $posts[$id]['title'] = $request->input('title');
        $posts[$id]['description'] = $request->input('description');
        $posts[$id]['postedBy'] = $request->input('creator');
        session(['posts' => $posts]);


        return  to_route('posts.index');
    }
    public function destroy($id)
    {
        $posts = session('posts', []);
        unset($posts[$id]);
        session(['posts' => $posts]);

        return to_route('posts.index');
    }

}
